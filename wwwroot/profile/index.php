<?php
	require('../includes/prepend.inc.php');

	class QcodoForm extends QcodoWebsiteForm {
		protected $strPageTitle = 'Profile';

		protected function Form_Create() {
			parent::Form_Create();
		}

		protected function btnButton_Click($strFormId, $strControlId, $strParameter) {
			$this->lblMessage->Text = 'Hello, World!';
		}
	}

	QcodoForm::Run('QcodoForm');
?>