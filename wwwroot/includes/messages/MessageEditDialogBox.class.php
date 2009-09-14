<?php
	class MessageEditDialogBox extends QDialogBox {
		protected $mctMessage;
		protected $blnEditMode;

		public $lblHeading;
		public $lstForum;
		public $txtTopicName;
		public $txtMessage;
		public $btnOkay;
		public $btnCancel;

		public function __construct($objParent, $strControlId = null) {
			parent::__construct($objParent, $strControlId);

			$this->strTemplate = dirname(__FILE__) . '/MessageEditDialogBox.tpl.php';
			$this->strCssClass = 'dialogbox';
			$this->strWidth = '420px';

			$this->mctMessage = new MessageMetaControl($this, new Message());

			$this->lblHeading = new QLabel($this);
			$this->lblHeading->TagName = 'h3';
			$this->lblHeading->SetCustomStyle('margin', '0');
			
			$this->lstForum = new QListBox($this);

			$this->txtTopicName = new QTextBox($this);
			$this->txtTopicName->Name = 'Topic Name';
			$this->txtTopicName->Required = true;

			$this->txtMessage = $this->mctMessage->txtMessage_Create('message');
			$this->txtMessage->TextMode = QTextMode::MultiLine;
			$this->txtMessage->Required = true;
			
			$this->btnOkay = new QButton($this);
			$this->btnOkay->CausesValidation = QCausesValidation::SiblingsOnly;

			$this->btnCancel = new QLinkButton($this);
			$this->btnCancel->Text = 'Cancel';

			// Define Actions
			$this->txtTopicName->AddAction(new QEnterKeyEvent(), new QFocusControlAction($this->txtMessage));
			$this->txtTopicName->AddAction(new QEnterKeyEvent(), new QTerminateAction());
			
			$this->btnOkay->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnOkay_Click'));

			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));
			$this->btnCancel->AddAction(new QClickEvent(), new QTerminateAction());
			
			$this->HideDialogBox();
			$this->blnMatteClickable = false;
		}

		public function btnOkay_Click($strFormId, $strControlId, $strParameter) {
			$blnNewTopic = false;

			// Setup stuff if it's a NEW message being posted (either a NEW response or a NEW topic)
			if (!$this->blnEditMode) {
				// For NEW TOPIC in this Forum
				if (!$this->mctMessage->Message->Topic) {
					$objForum = Forum::Load($this->lstForum->SelectedValue);
					$objNewTopic = $objForum->PostTopic(trim($this->txtTopicName->Text), trim($this->txtMessage->Text), QApplication::$Person);
					QApplication::Redirect(sprintf('/forums/forum.php/%s/%s/', $objForum->Id, $objNewTopic->Id));
				// Otherwise, it's a new POST in this TOPIC
				} else {
					$this->mctMessage->Message->PostDate = QDateTime::Now();
				}
			}

			// Save Everything Else
			$this->mctMessage->SaveMessage();
			$this->mctMessage->Message->RefreshCompiledHtml();
			$this->mctMessage->SaveMessage();

			// Refresh Stats and Stuff
			$this->mctMessage->Message->Topic->RefreshStats();
			$this->mctMessage->Message->Topic->RefreshSearchIndex();
			$this->mctMessage->Message->TopicLink->RefreshStats();

			$this->ParentControl->CloseMessageDialog(true, !$this->blnEditMode);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->ParentControl->CloseMessageDialog();
		}

		public function EditMessage(Message $objMessage) {
			$this->mctMessage->ReplaceObject($objMessage);
			$this->ShowDialogBox();

			if ($objMessage->TopicId) {
				$this->lstForum->RemoveAllItems();
				$this->lstForum->AddItem($objMessage->TopicLink->Forum->Name);
				$this->lstForum->Enabled = false;

				$this->txtTopicName->Text = $objMessage->Topic->Name;
				$this->txtTopicName->Enabled = false;

				if ($objMessage->Id) {
					$this->lblHeading->Text = 'Edit My Existing Post';
					$this->blnEditMode = true;
					$this->btnOkay->Text = 'Update My Reply';
				} else {
					$this->lblHeading->Text = 'Post Response to Current Topic';
					$this->blnEditMode = false;
					$this->btnOkay->Text = 'Post My Reply';
				}
				
				$this->txtMessage->Focus();
			} else {
				$this->lblHeading->Text = 'Post a New Topic';
				
				$this->lstForum->RemoveAllItems();
				foreach (Forum::LoadAll(QQ::OrderBy(QQN::Forum()->OrderNumber)) as $objForum) {
					if ($objForum->CanUserPost(QApplication::$Person))
						$this->lstForum->AddItem($objForum->Name, $objForum->Id, $objForum->Id == $objMessage->TopicLink->ForumId);
				}
				$this->lstForum->Enabled = true;

				$this->txtTopicName->Text = null;
				$this->txtTopicName->Enabled = true;

				$this->blnEditMode = false;
				$this->btnOkay->Text = 'Post New Topic and Message';

				$this->txtTopicName->Focus();
			}
		}
	}
?>