<?php
	// Define Amounts to Generate
	define('GENERATE_PEOPLE', 200);
	define('GENERATE_QPM', 150);
	define('GENERATE_SHOWCASE', 50);
	define('GENERATE_WIKI', 250);
	define('GENERATE_ISSUES', 100);
	define('GENERATE_FORUM_TOPICS', 100);
	define('GENERATE_MESSAGES_PER_TOPIC_UBOUND', 50);
	define('GENERATE_MESSAGES_PER_ISSUE_UBOUND', 25);
	define('GENERATE_MESSAGES_PER_WIKI_UBOUND', 25);
	define('GENERATE_MESSAGES_PER_PACKAGE_UBOUND', 25);

	// Example optional IssueFieldOption values for optional IssueFields loaded from data.sql
	$strOperatingSystemArray = array('CentOS 4', 'CentOS 5', 'CentOS 5.1', 'CentOS 5.2', 'CentOS 5.3',
		'Mac OS X 10.4', 'Mac OS X 10.5', 'Mac OS X 10.6',
		'RHEL 4', 'RHEL 5', 'RHEL 5.1', 'RHEL 5.2', 'RHEL 5.3',
		'Windows 2000', 'Windows XP / 2003', ' Windows Vista', 'Windows 7',
		'Ubuntu 7.04', 'Ubuntu 7.10', 'Ubuntu 8.04', 'Ubuntu 8.10', 'Ubuntu 9.04', 'Ubuntu 9.10'); 
	$strBrowserArray = array('Chrome 1', 'Chrome 2', 'Chrome 3',
		'Firefox 2', 'Firefox 3', 'Firefox 3.5',
		'Microsoft IE 6', 'Microsoft IE 7', 'Microsoft IE 8',
		'Safari 2', 'Safari 3', 'Safari 4'
	);
	$strServerArray = array('Apache 1.x', 'Apache 2.x', 'IIS 4', 'IIS 5', 'IIS 5.1', 'IIS 6', 'IIS 7', 'IIS 7.5');
	$strDatabaseArray = array('MySQL 4.x', 'MySQL 5.0', 'MySQL 5.1', 'MySQL 6.0', 'PostgreSQL 8.x', 'SQL Server 2000', 'SQL Server 2005', 'SQL Server 2008', 'SQLite 3.x');

	$intMaxCountryId = Country::CountAll();
	$intMaxTimeZoneId = Timezone::CountAll();
	$intMinForumId = Forum::QuerySingle(QQ::All(), QQ::OrderBy(QQN::Forum()->Id))->Id;
	$intMaxForumId = Forum::QuerySingle(QQ::All(), QQ::OrderBy(QQN::Forum()->Id, false))->Id;

	$dttStartDate = new QDateTime('2005-01-01 00:00:00');

	// Wiki Files Repository Directory
	if (is_dir(__DATA_ASSETS__))
		print(exec('rm -r -f ' . __DATA_ASSETS__));
	clearstatcache();
	QApplication::MakeDirectory(__DATA_ASSETS__, 0777);

	// Image Cached Directory
	if (is_dir(__DOCROOT__ . __IMAGES_CACHED__))
		print(exec('rm -r -f ' . __DOCROOT__ . __IMAGES_CACHED__));
	clearstatcache();
	QApplication::MakeDirectory(__DOCROOT__ . __IMAGES_CACHED__, 0777);

	// Setup Sample File Path Array
	$objDir = opendir(__DOCROOT__ . '/../data_loader_files');
	$strRandomFilePathArray = array();
	$strRandomImagePathArray = array();
	while ($strName = readdir($objDir)) {
		if (($strName != '.') && ($strName != '..')) {
			$strPath = __DOCROOT__ . '/../data_loader_files/' . $strName;
			$strRandomFilePathArray[] = $strPath;
			switch (substr($strName, strrpos($strName, '.') + 1)) {
				case 'jpg':
				case 'png':
				case 'gif':
					$strRandomImagePathArray[] = $strPath;
					break;
			}
		}
	}

	function GenerateOptionsForField($strFieldName, $strOptionNameArray) {
		$objIssueField = IssueField::QuerySingle(QQ::Equal(QQN::IssueField()->Name, $strFieldName));
		$intOrderNumber = 0;
		foreach ($strOptionNameArray as $strOptionName) {
			$intOrderNumber++;
			$objOption = new IssueFieldOption();
			$objOption->IssueField = $objIssueField;
			$objOption->Name = $strOptionName;
			$objOption->SetToken();
			$objOption->OrderNumber = $intOrderNumber;
			$objOption->ActiveFlag = true;
			$objOption->Save();
		}
	}



	//////////////////////
	// People
	//////////////////////

	while (QDataGen::DisplayWhileTask('Generating Person records', GENERATE_PEOPLE)) {
		$objPerson = new Person();
		
		// Person Type Id
		$objPerson->PersonTypeId = QDataGen::GenerateFromArrayWithProbabilities(array(
			array(PersonType::Contributor, 5),
			array(PersonType::RegisteredUser, 95)
		));

		// Required Stuff
		$objPerson->FirstName = QDataGen::GenerateFirstName();
		$objPerson->LastName = QDataGen::GenerateLastName();
		$objPerson->Username = QDataGen::GenerateUsername($objPerson->FirstName, $objPerson->LastName);
		$objPerson->Email = QDataGen::GenerateEmail($objPerson->FirstName, $objPerson->LastName);
		$objPerson->SetPassword('password');

		// Flags
		$objPerson->DisplayRealNameFlag = !rand(0, 3);
		$objPerson->DisplayEmailFlag = !rand(0, 7);
		$objPerson->OptInFlag = !rand(0, 3);
		$objPerson->DonatedFlag = !rand(0, 80);

		// Location and Country Flag
		if (rand(0, 2)) {
			$objPerson->Location = QDataGen::GenerateCity();
			if (rand(0, 2)) {
				$objPerson->CountryId = rand(1, $intMaxCountryId);
				$objPerson->Location .= ', ' . $objPerson->Country->Name;
			}
		}

		// Other Stuff
		if (!rand(0, 5)) $objPerson->Url = QDataGen::GenerateWebsiteUrl();
		if (!rand(0, 2)) $objPerson->TimezoneId = rand(1, $intMaxTimeZoneId);
		$objPerson->RegistrationDate = QDataGen::GenerateDateTime($dttStartDate, QDateTime::Now());

		// Save
		$objPerson->Save();

		// Set the DisplayName
		$objPerson->RefreshDisplayName();

		// Update the MaxId count
		$intMaxPersonId = $objPerson->Id;
	}



	//////////////////////
	// Showcase Tables and Classes
	//////////////////////
	while (QDataGen::DisplayWhileTask('Generating Showcase Items...', GENERATE_SHOWCASE)) {
		$objShowcase = new ShowcaseItem();
		$objShowcase->Person = Person::Load(rand(1, $intMaxPersonId));
		$objShowcase->Name = QDataGen::GenerateTitle(1, 8);
		$objShowcase->Description = QDataGen::GenerateContent(rand(1, 2), 20, 40);
		$objShowcase->Url = 'http://www.foobar.com/';
		$objShowcase->LiveFlag = rand(0, 4);
		$objShowcase->SaveWithImage(QDataGen::GenerateFromArray($strRandomImagePathArray));
	}



	//////////////////////
	// Wiki Tables and Classes
	//////////////////////

	while (QDataGen::DisplayWhileTask('Generating Wiki Items...', GENERATE_WIKI)) {
		$intWikiItemTypeId = rand(1, WikiItemType::MaxId);
		$intPathLength = rand(1, 3);
		if ($intWikiItemTypeId == WikiItemType::Page)
			$strPath = '';
		else {
			$strPath = '';
			for ($intIndex = 0; $intIndex < $intPathLength; $intIndex++) $strPath .= '/' . QDataGen::GenerateTitle(1, 2);
		}

		while (!($objWikiItem = WikiItem::CreateNewItem($strPath, $intWikiItemTypeId))) {
			$strPath = '';
			for ($intIndex = 0; $intIndex < $intPathLength; $intIndex++) $strPath .= '/' . QDataGen::GenerateTitle(1, 2);
		}

		$objWikiItem->EditorMinimumPersonTypeId = rand(1, PersonType::MaxId);
		$objWikiItem->Save();

		$intVersionCount = rand(1, 5);
		$dttPostDate = $dttStartDate;

		for ($intIndex = 0; $intIndex < $intVersionCount; $intIndex++) {
			$strName = QDataGen::GenerateTitle(1, 8);
			$objPerson = Person::Load(rand(1, $intMaxPersonId));
			$dttPostDate = QDataGen::GenerateDateTime($dttPostDate, QDateTime::Now());

			switch ($objWikiItem->WikiItemTypeId) {
				case WikiItemType::Page:
					$objWikiObject = new WikiPage();
					$objWikiObject->Content = QDataGen::GenerateContent(rand(1, 5), 20, 40);
					$objWikiObject->CompileHtml();
					$strMethodName = 'Save';
					$arrMethodParameters = array();
					break;
				case WikiItemType::Image:
					$objWikiObject = new WikiImage();
					$objWikiObject->Description = QDataGen::GenerateContent(rand(1, 3), 10, 50);
					$strMethodName = 'SaveFile';
					$arrMethodParameters = array(QDataGen::GenerateFromArray($strRandomImagePathArray));
					break;
				case WikiItemType::File:
					$objWikiObject = new WikiFile();
					$objWikiObject->Description = QDataGen::GenerateContent(rand(1, 3), 10, 50);
					$strPath = QDataGen::GenerateFromArray($strRandomFilePathArray);
					$strArray = pathinfo($strPath);
					$strFileName = str_replace(' ', '', $strName) . '.' . $strArray['extension'];
					$strMethodName = 'SaveFile';
					$arrMethodParameters = array($strPath, $strFileName);
					break;
				default:
					throw new Exception('Unknown handler for WikiItemTypeId: ' . $objWikiItem->WikiItemTypeId);
			}

			$objWikiItem->CreateNewVersion($strName, $objWikiObject, $strMethodName, $arrMethodParameters, $objPerson, $dttPostDate);
		}
	}

	// Generate Messages for Wiki
	QDataGen::DisplayForEachTaskStart($strTitle = 'Generating Messages for Wiki', WikiItem::CountAll());
	foreach (WikiItem::LoadAll() as $objWikiItem) {
		QDataGen::DisplayForEachTaskNext($strTitle);
		$intCount = rand(1, GENERATE_MESSAGES_PER_WIKI_UBOUND);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		$dttPostDate = $objWikiItem->GetFirstVersion()->PostDate;
		for ($intIndex = 0; $intIndex < $intCount; $intIndex++) {
			// If first message, the person who posted is the one who posts the first message
			$objPerson = Person::Load(rand(1, $intMaxPersonId));

			// Get a random Message PostDate relatively close to the current dttpostdate we're iterating through
			$dttEndRange = QDataGen::GenerateDateTime($dttPostDate, QDateTime::Now());
			$dttEndRange = QDataGen::GenerateDateTime($dttPostDate, $dttEndRange);
			$dttEndRange = QDataGen::GenerateDateTime($dttPostDate, $dttEndRange);
			$dttPostDate = QDataGen::GenerateDateTime($dttPostDate, $dttEndRange);

			$objWikiItem->PostMessage(QDataGen::GenerateContent(rand(1, 3), 10, 30), $objPerson, $dttPostDate);
		}
	}
	QDataGen::DisplayForEachTaskEnd($strTitle);



	//////////////////////
	// Issue Tracker
	//////////////////////

	print 'Generating Issue Field Options...';
	GenerateOptionsForField('Browser', $strBrowserArray);
	GenerateOptionsForField('Web Server', $strServerArray);
	GenerateOptionsForField('Database', $strDatabaseArray);
	GenerateOptionsForField('Operating System', $strOperatingSystemArray);
	print " Done.\r\n";

	// Cache Field and Option Values
	$objIssueFieldArray = IssueField::LoadAll();
	$objIssueFieldOptionArray = array();
	foreach ($objIssueFieldArray as $objIssueField) {
		$objIssueFieldOptionArray[$objIssueField->Id] = array();
		foreach ($objIssueField->GetIssueFieldOptionArray() as $objIssueFieldOption) {
			$objIssueFieldOptionArray[$objIssueField->Id][] = $objIssueFieldOption;
		}
	}

	// Generate Issues, themselves
	while (QDataGen::DisplayWhileTask('Generating Issues', GENERATE_ISSUES)) {
		$objIssue = new Issue();
		$objIssue->IssueStatusTypeId = rand(1, IssueStatusType::MaxId);
		if ($objIssue->IssueStatusTypeId == IssueStatusType::Closed) {
			$objIssue->IssueResolutionTypeId = rand(1, IssueResolutionType::MaxId);
		}
		$objIssue->IssuePriorityTypeId = QDataGen::GenerateFromArray(array_keys(IssuePriorityType::$NameArray));
		$objIssue->Title = QDataGen::GenerateTitle(2, 6);
		$objIssue->ExampleCode = QDataGen::GenerateContent(rand(1, 3), 10, 30);
		if (!rand(0, 2)) $objIssue->ExampleTemplate = QDataGen::GenerateContent(rand(1, 3), 10, 30);
		if (!rand(0, 2)) $objIssue->ExampleData = QDataGen::GenerateContent(rand(1, 3), 10, 30);
		if (!rand(0, 2)) $objIssue->ExpectedOutput = QDataGen::GenerateContent(rand(1, 3), 10, 30);
		if (!rand(0, 2)) $objIssue->ActualOutput = QDataGen::GenerateContent(rand(1, 3), 10, 30);
		$objIssue->PostedByPersonId = rand(1, $intMaxPersonId);
		$objIssue->PostDate = QDataGen::GenerateDateTime($dttStartDate, QDateTime::Now());
		
		if (($objIssue->IssueStatusTypeId == IssueStatusType::Assigned) ||
			($objIssue->IssueStatusTypeId == IssueStatusType::Fixed) ||
			(($objIssue->IssueStatusTypeId == IssueStatusType::Closed) && ($objIssue->IssueResolutionTypeId == IssueResolutionType::Fixed))) {
			$objIssue->AssignedToPersonId = rand(1, $intMaxPersonId);
			$objIssue->AssignedDate = QDataGen::GenerateDateTime($objIssue->PostDate, QDateTime::Now());

			if ($objIssue->IssueStatusTypeId == IssueStatusType::Assigned) {
				if (rand(0, 1))
					$objIssue->DueDate = QDataGen::GenerateDateTime($objIssue->PostDate, QDateTime::Now());
			}
		}
		$objIssue->Save();

		$objTopic = $objIssue->CreateTopicAndTopicLink();
		$objPackage = $objIssue->CreatePackage();

		// Add Field Values
		foreach ($objIssueFieldArray as $objIssueField) {
			if ($objIssueField->RequiredFlag || rand(0, 1)) {
				$objIssue->SetFieldOption(QDataGen::GenerateFromArray($objIssueFieldOptionArray[$objIssueField->Id]));
			}
		}

		// Add Votes
		$intCount = rand(0, 25);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		for ($intIndex = 0; $intIndex < $intCount; $intIndex++) {
			$objIssue->SetVote(Person::Load(rand(1, $intMaxPersonId)));
		}

		// Add Trackers
		$objTopic->AssociatePersonAsEmail($objIssue->PostedByPerson);
		$intCount = rand(0, 25);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		for ($intIndex = 0; $intIndex < $intCount; $intIndex++) {
			$objRandomPerson = Person::Load(rand(1, $intMaxPersonId));
			if (!$objTopic->IsPersonAsEmailAssociated($objRandomPerson))
				$objTopic->AssociatePersonAsEmail($objRandomPerson);
		}
	}

	// Generate Messages for Issues
	QDataGen::DisplayForEachTaskStart($strTitle = 'Generating Messages for Issues', Issue::CountAll());
	foreach (Issue::LoadAll() as $objIssue) {
		QDataGen::DisplayForEachTaskNext($strTitle);
		$intCount = rand(1, GENERATE_MESSAGES_PER_ISSUE_UBOUND);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		$dttPostDate = $objIssue->PostDate;
		for ($intIndex = 0; $intIndex < $intCount; $intIndex++) {
			// If first message, the person who posted is the one who posts the first message
			$objPerson = ($intIndex == 0) ? $objIssue->PostedByPerson : Person::Load(rand(1, $intMaxPersonId));

			// Get a random Message PostDate relatively close to the current dttpostdate we're iterating through
			$dttEndRange = QDataGen::GenerateDateTime($dttPostDate, QDateTime::Now());
			$dttEndRange = QDataGen::GenerateDateTime($dttPostDate, $dttEndRange);
			$dttEndRange = QDataGen::GenerateDateTime($dttPostDate, $dttEndRange);
			$dttPostDate = ($intIndex == 0) ? new QDateTime($objIssue->PostDate) : QDataGen::GenerateDateTime($dttPostDate, $dttEndRange);

			$objIssue->PostMessage(QDataGen::GenerateContent(rand(1, 3), 10, 30), $objPerson, $dttPostDate);
		}
	}
	QDataGen::DisplayForEachTaskEnd($strTitle);


	//////////////////////
	// Forum Topics
	//////////////////////
	$objForumArray = Forum::LoadAll();
	$objForumTopicArray = array();
	while (QDataGen::DisplayWhileTask('Generating Forum Topics', GENERATE_FORUM_TOPICS)) {
		$objForum = QDataGen::GenerateFromArray($objForumArray);
		
		$strName = QDataGen::GenerateTitle(4, 12);
		$strFirstMessageText =  QDataGen::GenerateContent(rand(1, 5));
		$objPerson = Person::Load(rand(1, $intMaxPersonId));
		$dttDateTime = QDataGen::GenerateDateTime($dttStartDate, QDateTime::Now());

		$objTopic = $objForum->PostTopic($strName, $strFirstMessageText, $objPerson, $dttDateTime);
		$objForumTopicArray[] = $objTopic;
	}


	//////////////////////
	// Qcodo Package Manager
	//////////////////////
	$objPackageCategories = PackageCategory::QueryArray(QQ::NotEqual(QQN::PackageCategory()->Token, 'issues'));
	while (QDataGen::DisplayWhileTask('Generating QPM Packages...', GENERATE_QPM)) {
		$objPackage = new Package();
		$objPackage->PackageCategory = QDataGen::GenerateFromArray($objPackageCategories);
		$objPackage->Name = QDataGen::GenerateTitle(1, 3);
		$objPackage->Token = Package::SanitizeForToken($objPackage->Name);
		while (Package::LoadByToken($objPackage->Token)) {
			$objPackage->Name = QDataGen::GenerateTitle(1, 3);
			$objPackage->Token = Package::SanitizeForToken($objPackage->Name);
		}
		$objPackage->Description = QDataGen::GenerateContent(rand(1, 3), 20, 80);
		$objPackage->Save();

		$objPackage->CreateTopicAndTopicLink(Person::Load(rand(1, $intMaxPersonId)));

		$intContributionCount = rand(1, 10);
		for ($intContribution = 0; $intContribution < $intContributionCount; $intContribution++) {
			while (PackageContribution::LoadByPackageIdPersonId($objPackage->Id, $objPerson->Id))
				$objPerson = Person::Load(rand(1, $intMaxPersonId));
			$intVersionCount = rand(1, 4);

			$dttEndRange = QDataGen::GenerateDateTime($dttStartDate, QDateTime::Now());
			$dttEndRange = QDataGen::GenerateDateTime($dttStartDate, $dttEndRange);
			$dttEndRange = QDataGen::GenerateDateTime($dttStartDate, $dttEndRange);
			$dttPostDate = QDataGen::GenerateDateTime($dttStartDate, $dttEndRange);

			for ($intVersion = 0; $intVersion < $intVersionCount; $intVersion++) {
				// Randomize a Qcodo Version
				$strQcodoVersion = rand(0,99) . '.' . rand(0,99) . '.' . rand(0,99);
				$strQcodoVersionType = rand(0, 1) ? 'Development' : 'Stable';
				// Randomize a New and Changed file count
				$intNewFileCount = rand(0, 10);
				$intChangedFileCount = rand(0, 10);
				// Randomize Notes
				$strNotes = QDataGen::GenerateContent(rand(1, 3), 20, 80);

				// Build XML
				$strQpmXml = '<?xml version="1.0" encoding="UTF-8" ?>';
				$strQpmXml .= '<qpm version="1.0">';
				$strQpmXml .= sprintf('<package name="%s" user="%s" version="%s" qcodoVersion="%s" qcodoVersionType="%s" submitted="%s">',
					$objPackage->Token, $objPerson->Username, $intVersion+1, $strQcodoVersion, $strQcodoVersionType, $dttPostDate->__toString(QDateTime::FormatRfc822));
				$strQpmXml .= sprintf('<notes>%s</notes>', QString::XmlEscape($strNotes));
				$strQpmXml .= '<newFiles>';
				for ($intFileCount = 0; $intFileCount < $intNewFileCount; $intFileCount++) {
					$strContent = QDataGen::GenerateContent(rand(1, 3), 20, 80);
					$strQpmXml .= sprintf('<file directoryToken="__FOOBAR__" path="some/random/path.txt" md5="%s">%s</file>',
						md5($strContent), base64_encode($strContent));
				}
				$strQpmXml .= '</newFiles>';
				$strQpmXml .= '<changedFiles>';
				for ($intFileCount = 0; $intFileCount < $intChangedFileCount; $intFileCount++) {
					$strContent = QDataGen::GenerateContent(rand(1, 3), 20, 80);
					$strQpmXml .= sprintf('<file directoryToken="__FOOBAR__" path="some/random/path.txt" md5="%s">%s</file>',
						md5($strContent), base64_encode($strContent));
				}
				$strQpmXml .= '</changedFiles>';
				$strQpmXml .= '</package></qpm>';

				$objPackage->PostContributionVersion($objPerson, $strQpmXml, $dttPostDate);

				$dttEndRange = QDataGen::GenerateDateTime($dttPostDate, QDateTime::Now());
				$dttEndRange = QDataGen::GenerateDateTime($dttPostDate, $dttEndRange);
				$dttEndRange = QDataGen::GenerateDateTime($dttPostDate, $dttEndRange);
				$dttPostDate = QDataGen::GenerateDateTime($dttPostDate, $dttEndRange);
			}
		}
	}

	foreach (PackageCategory::LoadAll() as $objCategory) $objCategory->RefreshStats();

	// Generate Messages for Packages
	QDataGen::DisplayForEachTaskStart($strTitle = 'Generating Messages for QPM Packages', Package::CountAll());
	foreach (Package::LoadAll() as $objPackage) {
		QDataGen::DisplayForEachTaskNext($strTitle);
		$intCount = rand(1, GENERATE_MESSAGES_PER_PACKAGE_UBOUND);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		if (rand(0, 1)) $intCount = round($intCount / 2);
		$dttPostDate = $dttStartDate;
		for ($intIndex = 0; $intIndex < $intCount; $intIndex++) {
			// If first message, the person who posted is the one who posts the first message
			$objPerson = Person::Load(rand(1, $intMaxPersonId));

			// Get a random Message PostDate relatively close to the current dttpostdate we're iterating through
			$dttEndRange = QDataGen::GenerateDateTime($dttPostDate, QDateTime::Now());
			$dttEndRange = QDataGen::GenerateDateTime($dttPostDate, $dttEndRange);
			$dttEndRange = QDataGen::GenerateDateTime($dttPostDate, $dttEndRange);
			$dttPostDate = QDataGen::GenerateDateTime($dttPostDate, $dttEndRange);

			$objPackage->PostMessage(QDataGen::GenerateContent(rand(1, 3), 10, 30), $objPerson, $dttPostDate);
		}
	}
	QDataGen::DisplayForEachTaskEnd($strTitle);


	
	//////////////////////
	// Forum Messages
	//////////////////////

	QDataGen::DisplayForEachTaskStart($strTopics = 'Generating Forum Messages for Topics', count($objForumTopicArray));
	foreach ($objForumTopicArray as $objTopic) {
		QDataGen::DisplayForEachTaskNext($strTopics);

		// Randomly Select a Number of Messages for this Forum Topic
		$intMessageCount = rand(1, GENERATE_MESSAGES_PER_TOPIC_UBOUND);
		if (rand(0, 1)) $intMessageCount = round($intMessageCount / 2);
		if (rand(0, 1)) $intMessageCount = round($intMessageCount / 2);
		if (rand(0, 1)) $intMessageCount = round($intMessageCount / 2);
		if (rand(0, 1)) $intMessageCount = round($intMessageCount / 2);
		if (rand(0, 1)) $intMessageCount = round($intMessageCount / 2);
		if (rand(0, 1)) $intMessageCount = round($intMessageCount / 2);

		$blnFirstMessage = true;
		while (QDataGen::DisplayWhileTask(' - Generating Messages for Topic #' . $objTopic->Id, $intMessageCount, true)) {
			$strMessageText =  QDataGen::GenerateContent(rand(1, 5));
			$objPerson = Person::Load(rand(1, $intMaxPersonId));
			$dttDateTime = QDataGen::GenerateDateTime($dttStartDate, QDateTime::Now());
			$objTopic->PostMessage($strMessageText, $objPerson, $dttDateTime);
		}

		// Finally, Refresh this topic's ReplyNumber ordering
		$objTopic->RefreshReplyNumbering();
	}
	QDataGen::DisplayForEachTaskEnd($strTopics);
?>