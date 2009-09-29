<?php
	class EditWikiImageForm extends EditWikiForm {
		protected $intWikiItemTypeId = WikiItemType::Image;

		protected $txtTitle;
		protected $flcImage;

		protected function CreateControlsForWikiVersionAndObject(WikiVersion $objWikiVersion, $objWikiObject) {
			$this->txtTitle = new QTextBox($this);
			$this->txtTitle->Text = $objWikiVersion->Name;
			$this->txtTitle->Required = true;

			$this->flcImage = new QFileControl($this, 'flc');
			$this->flcImage->Required = true;
		}

		protected function SaveWikiVersion() {
			// Validate it as a valid image file
			switch (QMimeType::GetMimeTypeForFile($this->flcImage->File)) {
				case QMimeType::Gif:
				case QMimeType::Jpeg:
				case QMimeType::Png:
					break;
				default:
					$this->flcImage->Warning = 'Must be a PNG, JPEG or GIF file';
					return null;
			}

			// Create the Parameters for Save
			$objWikiImage = new WikiImage();
			$arrMethodParameters = array($this->flcImage->File);

			$objWikiVersion = $this->objWikiItem->CreateNewVersion(trim($this->txtTitle->Text), $objWikiImage, 'SaveFile', $arrMethodParameters, QApplication::$Person, null);
			return $objWikiVersion;
		}
	}
?>