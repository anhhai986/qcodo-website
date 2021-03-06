<?php
	/**
	 * The abstract IssueGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Issue subclass which
	 * extends this IssueGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Issue class.
	 * 
	 * @package Qcodo Website
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $IssuePriorityTypeId the value for intIssuePriorityTypeId (Not Null)
	 * @property integer $IssueStatusTypeId the value for intIssueStatusTypeId (Not Null)
	 * @property integer $IssueResolutionTypeId the value for intIssueResolutionTypeId 
	 * @property string $Title the value for strTitle 
	 * @property string $ExampleCode the value for strExampleCode 
	 * @property string $ExampleTemplate the value for strExampleTemplate 
	 * @property string $ExampleData the value for strExampleData 
	 * @property string $ExpectedOutput the value for strExpectedOutput 
	 * @property string $ActualOutput the value for strActualOutput 
	 * @property integer $PostedByPersonId the value for intPostedByPersonId (Not Null)
	 * @property integer $AssignedToPersonId the value for intAssignedToPersonId 
	 * @property QDateTime $PostDate the value for dttPostDate (Not Null)
	 * @property QDateTime $AssignedDate the value for dttAssignedDate 
	 * @property QDateTime $DueDate the value for dttDueDate 
	 * @property integer $VoteCount the value for intVoteCount 
	 * @property Person $PostedByPerson the value for the Person object referenced by intPostedByPersonId (Not Null)
	 * @property Person $AssignedToPerson the value for the Person object referenced by intAssignedToPersonId 
	 * @property TopicLink $TopicLink the value for the TopicLink object that uniquely references this Issue
	 * @property IssueFieldValue $_IssueFieldValue the value for the private _objIssueFieldValue (Read-Only) if set due to an expansion on the issue_field_value.issue_id reverse relationship
	 * @property IssueFieldValue[] $_IssueFieldValueArray the value for the private _objIssueFieldValueArray (Read-Only) if set due to an ExpandAsArray on the issue_field_value.issue_id reverse relationship
	 * @property IssueVote $_IssueVote the value for the private _objIssueVote (Read-Only) if set due to an expansion on the issue_vote.issue_id reverse relationship
	 * @property IssueVote[] $_IssueVoteArray the value for the private _objIssueVoteArray (Read-Only) if set due to an ExpandAsArray on the issue_vote.issue_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class IssueGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column issue.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.issue_priority_type_id
		 * @var integer intIssuePriorityTypeId
		 */
		protected $intIssuePriorityTypeId;
		const IssuePriorityTypeIdDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.issue_status_type_id
		 * @var integer intIssueStatusTypeId
		 */
		protected $intIssueStatusTypeId;
		const IssueStatusTypeIdDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.issue_resolution_type_id
		 * @var integer intIssueResolutionTypeId
		 */
		protected $intIssueResolutionTypeId;
		const IssueResolutionTypeIdDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.title
		 * @var string strTitle
		 */
		protected $strTitle;
		const TitleMaxLength = 255;
		const TitleDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.example_code
		 * @var string strExampleCode
		 */
		protected $strExampleCode;
		const ExampleCodeDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.example_template
		 * @var string strExampleTemplate
		 */
		protected $strExampleTemplate;
		const ExampleTemplateDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.example_data
		 * @var string strExampleData
		 */
		protected $strExampleData;
		const ExampleDataDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.expected_output
		 * @var string strExpectedOutput
		 */
		protected $strExpectedOutput;
		const ExpectedOutputDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.actual_output
		 * @var string strActualOutput
		 */
		protected $strActualOutput;
		const ActualOutputDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.posted_by_person_id
		 * @var integer intPostedByPersonId
		 */
		protected $intPostedByPersonId;
		const PostedByPersonIdDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.assigned_to_person_id
		 * @var integer intAssignedToPersonId
		 */
		protected $intAssignedToPersonId;
		const AssignedToPersonIdDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.post_date
		 * @var QDateTime dttPostDate
		 */
		protected $dttPostDate;
		const PostDateDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.assigned_date
		 * @var QDateTime dttAssignedDate
		 */
		protected $dttAssignedDate;
		const AssignedDateDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.due_date
		 * @var QDateTime dttDueDate
		 */
		protected $dttDueDate;
		const DueDateDefault = null;


		/**
		 * Protected member variable that maps to the database column issue.vote_count
		 * @var integer intVoteCount
		 */
		protected $intVoteCount;
		const VoteCountDefault = null;


		/**
		 * Private member variable that stores a reference to a single IssueFieldValue object
		 * (of type IssueFieldValue), if this Issue object was restored with
		 * an expansion on the issue_field_value association table.
		 * @var IssueFieldValue _objIssueFieldValue;
		 */
		private $_objIssueFieldValue;

		/**
		 * Private member variable that stores a reference to an array of IssueFieldValue objects
		 * (of type IssueFieldValue[]), if this Issue object was restored with
		 * an ExpandAsArray on the issue_field_value association table.
		 * @var IssueFieldValue[] _objIssueFieldValueArray;
		 */
		private $_objIssueFieldValueArray = array();

		/**
		 * Private member variable that stores a reference to a single IssueVote object
		 * (of type IssueVote), if this Issue object was restored with
		 * an expansion on the issue_vote association table.
		 * @var IssueVote _objIssueVote;
		 */
		private $_objIssueVote;

		/**
		 * Private member variable that stores a reference to an array of IssueVote objects
		 * (of type IssueVote[]), if this Issue object was restored with
		 * an ExpandAsArray on the issue_vote association table.
		 * @var IssueVote[] _objIssueVoteArray;
		 */
		private $_objIssueVoteArray = array();

		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column issue.posted_by_person_id.
		 *
		 * NOTE: Always use the PostedByPerson property getter to correctly retrieve this Person object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Person objPostedByPerson
		 */
		protected $objPostedByPerson;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column issue.assigned_to_person_id.
		 *
		 * NOTE: Always use the AssignedToPerson property getter to correctly retrieve this Person object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Person objAssignedToPerson
		 */
		protected $objAssignedToPerson;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column topic_link.issue_id.
		 *
		 * NOTE: Always use the TopicLink property getter to correctly retrieve this TopicLink object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var TopicLink objTopicLink
		 */
		protected $objTopicLink;
		
		/**
		 * Used internally to manage whether the adjoined TopicLink object
		 * needs to be updated on save.
		 * 
		 * NOTE: Do not manually update this value 
		 */
		protected $blnDirtyTopicLink;





		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a Issue from PK Info
		 * @param integer $intId
		 * @return Issue
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Issue::QuerySingle(
				QQ::Equal(QQN::Issue()->Id, $intId)
			);
		}

		/**
		 * Load all Issues
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Issue[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Issue::QueryArray to perform the LoadAll query
			try {
				return Issue::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Issues
		 * @return int
		 */
		public static function CountAll() {
			// Call Issue::QueryCount to perform the CountAll query
			return Issue::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCODO QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcodo Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			// Create/Build out the QueryBuilder object with Issue-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'issue');
			Issue::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('issue');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcodo Query method to query for a single Issue object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Issue the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Issue::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Issue object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Issue::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem) $objToReturn[] = $objItem;
				}

				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if (is_null($objDbRow)) return null;
				return Issue::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Issue objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Issue[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Issue::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Issue::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcodo query method to issue a query and get a cursor to progressively fetch its results.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return QDatabaseResultBase the cursor resource instance
		 */
		public static function QueryCursor(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the query statement
			try {
				$strQuery = Issue::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
		
			// Return the results cursor
			$objDbResult->QueryBuilder = $objQueryBuilder;
			return $objDbResult;
		}

		/**
		 * Static Qcodo Query method to query for a count of Issue objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Issue::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

/*		public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'issue_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Issue-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Issue::GetSelectFields($objQueryBuilder);
				Issue::GetFromFields($objQueryBuilder);

				// Ensure the Passed-in Conditions is a string
				try {
					$strConditions = QType::Cast($strConditions, QType::String);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

				// Create the Conditions object, and apply it
				$objConditions = eval('return ' . $strConditions . ';');

				// Apply Any Conditions
				if ($objConditions)
					$objConditions->UpdateQueryBuilder($objQueryBuilder);

				// Get the SQL Statement
				$strQuery = $objQueryBuilder->GetStatement();

				// Save the SQL Statement in the Cache
				$objCache->SaveData($strQuery);
			}

			// Prepare the Statement with the Parameters
			if ($mixParameterArray)
				$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objDatabase->Query($strQuery);
			return Issue::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Issue
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'issue';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'issue_priority_type_id', $strAliasPrefix . 'issue_priority_type_id');
			$objBuilder->AddSelectItem($strTableName, 'issue_status_type_id', $strAliasPrefix . 'issue_status_type_id');
			$objBuilder->AddSelectItem($strTableName, 'issue_resolution_type_id', $strAliasPrefix . 'issue_resolution_type_id');
			$objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
			$objBuilder->AddSelectItem($strTableName, 'example_code', $strAliasPrefix . 'example_code');
			$objBuilder->AddSelectItem($strTableName, 'example_template', $strAliasPrefix . 'example_template');
			$objBuilder->AddSelectItem($strTableName, 'example_data', $strAliasPrefix . 'example_data');
			$objBuilder->AddSelectItem($strTableName, 'expected_output', $strAliasPrefix . 'expected_output');
			$objBuilder->AddSelectItem($strTableName, 'actual_output', $strAliasPrefix . 'actual_output');
			$objBuilder->AddSelectItem($strTableName, 'posted_by_person_id', $strAliasPrefix . 'posted_by_person_id');
			$objBuilder->AddSelectItem($strTableName, 'assigned_to_person_id', $strAliasPrefix . 'assigned_to_person_id');
			$objBuilder->AddSelectItem($strTableName, 'post_date', $strAliasPrefix . 'post_date');
			$objBuilder->AddSelectItem($strTableName, 'assigned_date', $strAliasPrefix . 'assigned_date');
			$objBuilder->AddSelectItem($strTableName, 'due_date', $strAliasPrefix . 'due_date');
			$objBuilder->AddSelectItem($strTableName, 'vote_count', $strAliasPrefix . 'vote_count');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Issue from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Issue::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Issue
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intId == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'issue__';


				$strAlias = $strAliasPrefix . 'issuefieldvalue__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objIssueFieldValueArray)) {
						$objPreviousChildItem = $objPreviousItem->_objIssueFieldValueArray[$intPreviousChildItemCount - 1];
						$objChildItem = IssueFieldValue::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issuefieldvalue__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objIssueFieldValueArray[] = $objChildItem;
					} else
						$objPreviousItem->_objIssueFieldValueArray[] = IssueFieldValue::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issuefieldvalue__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'issuevote__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objIssueVoteArray)) {
						$objPreviousChildItem = $objPreviousItem->_objIssueVoteArray[$intPreviousChildItemCount - 1];
						$objChildItem = IssueVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issuevote__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objIssueVoteArray[] = $objChildItem;
					} else
						$objPreviousItem->_objIssueVoteArray[] = IssueVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issuevote__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'issue__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Issue object
			$objToReturn = new Issue();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'issue_priority_type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'issue_priority_type_id'] : $strAliasPrefix . 'issue_priority_type_id';
			$objToReturn->intIssuePriorityTypeId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'issue_status_type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'issue_status_type_id'] : $strAliasPrefix . 'issue_status_type_id';
			$objToReturn->intIssueStatusTypeId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'issue_resolution_type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'issue_resolution_type_id'] : $strAliasPrefix . 'issue_resolution_type_id';
			$objToReturn->intIssueResolutionTypeId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'title'] : $strAliasPrefix . 'title';
			$objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'example_code', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'example_code'] : $strAliasPrefix . 'example_code';
			$objToReturn->strExampleCode = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'example_template', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'example_template'] : $strAliasPrefix . 'example_template';
			$objToReturn->strExampleTemplate = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'example_data', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'example_data'] : $strAliasPrefix . 'example_data';
			$objToReturn->strExampleData = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'expected_output', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'expected_output'] : $strAliasPrefix . 'expected_output';
			$objToReturn->strExpectedOutput = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'actual_output', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'actual_output'] : $strAliasPrefix . 'actual_output';
			$objToReturn->strActualOutput = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'posted_by_person_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'posted_by_person_id'] : $strAliasPrefix . 'posted_by_person_id';
			$objToReturn->intPostedByPersonId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'assigned_to_person_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'assigned_to_person_id'] : $strAliasPrefix . 'assigned_to_person_id';
			$objToReturn->intAssignedToPersonId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'post_date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'post_date'] : $strAliasPrefix . 'post_date';
			$objToReturn->dttPostDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'assigned_date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'assigned_date'] : $strAliasPrefix . 'assigned_date';
			$objToReturn->dttAssignedDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'due_date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'due_date'] : $strAliasPrefix . 'due_date';
			$objToReturn->dttDueDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'vote_count', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'vote_count'] : $strAliasPrefix . 'vote_count';
			$objToReturn->intVoteCount = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'issue__';

			// Check for PostedByPerson Early Binding
			$strAlias = $strAliasPrefix . 'posted_by_person_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPostedByPerson = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'posted_by_person_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for AssignedToPerson Early Binding
			$strAlias = $strAliasPrefix . 'assigned_to_person_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAssignedToPerson = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assigned_to_person_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);


			// Check for TopicLink Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'topiclink__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objTopicLink = TopicLink::InstantiateDbRow($objDbRow, $strAliasPrefix . 'topiclink__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objTopicLink = false;
			}



			// Check for IssueFieldValue Virtual Binding
			$strAlias = $strAliasPrefix . 'issuefieldvalue__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objIssueFieldValueArray[] = IssueFieldValue::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issuefieldvalue__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objIssueFieldValue = IssueFieldValue::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issuefieldvalue__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for IssueVote Virtual Binding
			$strAlias = $strAliasPrefix . 'issuevote__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objIssueVoteArray[] = IssueVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issuevote__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objIssueVote = IssueVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issuevote__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Issues from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Issue[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();
			
			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objLastRowItem = null;
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Issue::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Issue::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Issue object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Issue next row resulting from the query
		 */
		public static function InstantiateCursor(QDatabaseResultBase $objDbResult) {
			// If blank resultset, then return empty result
			if (!$objDbResult) return null;

			// If empty resultset, then return empty result
			$objDbRow = $objDbResult->GetNextRow();
			if (!$objDbRow) return null;

			// We need the Column Aliases
			$strColumnAliasArray = $objDbResult->QueryBuilder->ColumnAliasArray;
			if (!$strColumnAliasArray) $strColumnAliasArray = array();

			// Pull Expansions (if applicable)
			$strExpandAsArrayNodes = $objDbResult->QueryBuilder->ExpandAsArrayNodes;

			// Load up the return result with a row and return it
			return Issue::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Issue object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Issue
		*/
		public static function LoadById($intId) {
			return Issue::QuerySingle(
				QQ::Equal(QQN::Issue()->Id, $intId)
			);
		}
			
		/**
		 * Load an array of Issue objects,
		 * by IssuePriorityTypeId Index(es)
		 * @param integer $intIssuePriorityTypeId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Issue[]
		*/
		public static function LoadArrayByIssuePriorityTypeId($intIssuePriorityTypeId, $objOptionalClauses = null) {
			// Call Issue::QueryArray to perform the LoadArrayByIssuePriorityTypeId query
			try {
				return Issue::QueryArray(
					QQ::Equal(QQN::Issue()->IssuePriorityTypeId, $intIssuePriorityTypeId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Issues
		 * by IssuePriorityTypeId Index(es)
		 * @param integer $intIssuePriorityTypeId
		 * @return int
		*/
		public static function CountByIssuePriorityTypeId($intIssuePriorityTypeId) {
			// Call Issue::QueryCount to perform the CountByIssuePriorityTypeId query
			return Issue::QueryCount(
				QQ::Equal(QQN::Issue()->IssuePriorityTypeId, $intIssuePriorityTypeId)
			);
		}
			
		/**
		 * Load an array of Issue objects,
		 * by IssueStatusTypeId Index(es)
		 * @param integer $intIssueStatusTypeId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Issue[]
		*/
		public static function LoadArrayByIssueStatusTypeId($intIssueStatusTypeId, $objOptionalClauses = null) {
			// Call Issue::QueryArray to perform the LoadArrayByIssueStatusTypeId query
			try {
				return Issue::QueryArray(
					QQ::Equal(QQN::Issue()->IssueStatusTypeId, $intIssueStatusTypeId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Issues
		 * by IssueStatusTypeId Index(es)
		 * @param integer $intIssueStatusTypeId
		 * @return int
		*/
		public static function CountByIssueStatusTypeId($intIssueStatusTypeId) {
			// Call Issue::QueryCount to perform the CountByIssueStatusTypeId query
			return Issue::QueryCount(
				QQ::Equal(QQN::Issue()->IssueStatusTypeId, $intIssueStatusTypeId)
			);
		}
			
		/**
		 * Load an array of Issue objects,
		 * by IssueResolutionTypeId Index(es)
		 * @param integer $intIssueResolutionTypeId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Issue[]
		*/
		public static function LoadArrayByIssueResolutionTypeId($intIssueResolutionTypeId, $objOptionalClauses = null) {
			// Call Issue::QueryArray to perform the LoadArrayByIssueResolutionTypeId query
			try {
				return Issue::QueryArray(
					QQ::Equal(QQN::Issue()->IssueResolutionTypeId, $intIssueResolutionTypeId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Issues
		 * by IssueResolutionTypeId Index(es)
		 * @param integer $intIssueResolutionTypeId
		 * @return int
		*/
		public static function CountByIssueResolutionTypeId($intIssueResolutionTypeId) {
			// Call Issue::QueryCount to perform the CountByIssueResolutionTypeId query
			return Issue::QueryCount(
				QQ::Equal(QQN::Issue()->IssueResolutionTypeId, $intIssueResolutionTypeId)
			);
		}
			
		/**
		 * Load an array of Issue objects,
		 * by PostedByPersonId Index(es)
		 * @param integer $intPostedByPersonId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Issue[]
		*/
		public static function LoadArrayByPostedByPersonId($intPostedByPersonId, $objOptionalClauses = null) {
			// Call Issue::QueryArray to perform the LoadArrayByPostedByPersonId query
			try {
				return Issue::QueryArray(
					QQ::Equal(QQN::Issue()->PostedByPersonId, $intPostedByPersonId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Issues
		 * by PostedByPersonId Index(es)
		 * @param integer $intPostedByPersonId
		 * @return int
		*/
		public static function CountByPostedByPersonId($intPostedByPersonId) {
			// Call Issue::QueryCount to perform the CountByPostedByPersonId query
			return Issue::QueryCount(
				QQ::Equal(QQN::Issue()->PostedByPersonId, $intPostedByPersonId)
			);
		}
			
		/**
		 * Load an array of Issue objects,
		 * by AssignedToPersonId Index(es)
		 * @param integer $intAssignedToPersonId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Issue[]
		*/
		public static function LoadArrayByAssignedToPersonId($intAssignedToPersonId, $objOptionalClauses = null) {
			// Call Issue::QueryArray to perform the LoadArrayByAssignedToPersonId query
			try {
				return Issue::QueryArray(
					QQ::Equal(QQN::Issue()->AssignedToPersonId, $intAssignedToPersonId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Issues
		 * by AssignedToPersonId Index(es)
		 * @param integer $intAssignedToPersonId
		 * @return int
		*/
		public static function CountByAssignedToPersonId($intAssignedToPersonId) {
			// Call Issue::QueryCount to perform the CountByAssignedToPersonId query
			return Issue::QueryCount(
				QQ::Equal(QQN::Issue()->AssignedToPersonId, $intAssignedToPersonId)
			);
		}
			
		/**
		 * Load an array of Issue objects,
		 * by DueDate Index(es)
		 * @param QDateTime $dttDueDate
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Issue[]
		*/
		public static function LoadArrayByDueDate($dttDueDate, $objOptionalClauses = null) {
			// Call Issue::QueryArray to perform the LoadArrayByDueDate query
			try {
				return Issue::QueryArray(
					QQ::Equal(QQN::Issue()->DueDate, $dttDueDate),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Issues
		 * by DueDate Index(es)
		 * @param QDateTime $dttDueDate
		 * @return int
		*/
		public static function CountByDueDate($dttDueDate) {
			// Call Issue::QueryCount to perform the CountByDueDate query
			return Issue::QueryCount(
				QQ::Equal(QQN::Issue()->DueDate, $dttDueDate)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this Issue
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `issue` (
							`issue_priority_type_id`,
							`issue_status_type_id`,
							`issue_resolution_type_id`,
							`title`,
							`example_code`,
							`example_template`,
							`example_data`,
							`expected_output`,
							`actual_output`,
							`posted_by_person_id`,
							`assigned_to_person_id`,
							`post_date`,
							`assigned_date`,
							`due_date`,
							`vote_count`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intIssuePriorityTypeId) . ',
							' . $objDatabase->SqlVariable($this->intIssueStatusTypeId) . ',
							' . $objDatabase->SqlVariable($this->intIssueResolutionTypeId) . ',
							' . $objDatabase->SqlVariable($this->strTitle) . ',
							' . $objDatabase->SqlVariable($this->strExampleCode) . ',
							' . $objDatabase->SqlVariable($this->strExampleTemplate) . ',
							' . $objDatabase->SqlVariable($this->strExampleData) . ',
							' . $objDatabase->SqlVariable($this->strExpectedOutput) . ',
							' . $objDatabase->SqlVariable($this->strActualOutput) . ',
							' . $objDatabase->SqlVariable($this->intPostedByPersonId) . ',
							' . $objDatabase->SqlVariable($this->intAssignedToPersonId) . ',
							' . $objDatabase->SqlVariable($this->dttPostDate) . ',
							' . $objDatabase->SqlVariable($this->dttAssignedDate) . ',
							' . $objDatabase->SqlVariable($this->dttDueDate) . ',
							' . $objDatabase->SqlVariable($this->intVoteCount) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('issue', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`issue`
						SET
							`issue_priority_type_id` = ' . $objDatabase->SqlVariable($this->intIssuePriorityTypeId) . ',
							`issue_status_type_id` = ' . $objDatabase->SqlVariable($this->intIssueStatusTypeId) . ',
							`issue_resolution_type_id` = ' . $objDatabase->SqlVariable($this->intIssueResolutionTypeId) . ',
							`title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
							`example_code` = ' . $objDatabase->SqlVariable($this->strExampleCode) . ',
							`example_template` = ' . $objDatabase->SqlVariable($this->strExampleTemplate) . ',
							`example_data` = ' . $objDatabase->SqlVariable($this->strExampleData) . ',
							`expected_output` = ' . $objDatabase->SqlVariable($this->strExpectedOutput) . ',
							`actual_output` = ' . $objDatabase->SqlVariable($this->strActualOutput) . ',
							`posted_by_person_id` = ' . $objDatabase->SqlVariable($this->intPostedByPersonId) . ',
							`assigned_to_person_id` = ' . $objDatabase->SqlVariable($this->intAssignedToPersonId) . ',
							`post_date` = ' . $objDatabase->SqlVariable($this->dttPostDate) . ',
							`assigned_date` = ' . $objDatabase->SqlVariable($this->dttAssignedDate) . ',
							`due_date` = ' . $objDatabase->SqlVariable($this->dttDueDate) . ',
							`vote_count` = ' . $objDatabase->SqlVariable($this->intVoteCount) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
					');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('UPDATE');
				}

		
		
				// Update the adjoined TopicLink object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyTopicLink) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = TopicLink::LoadByIssueId($this->intId)) {
						$objAssociated->IssueId = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objTopicLink) {
						$this->objTopicLink->IssueId = $this->intId;
						$this->objTopicLink->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyTopicLink = false;
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this Issue
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Issue with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			
			
			// Update the adjoined TopicLink object (if applicable) and perform the unassociation

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = TopicLink::LoadByIssueId($this->intId)) {
				$objAssociated->IssueId = null;
				$objAssociated->Save();
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issue`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Issues
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issue`');
		}

		/**
		 * Truncate issue table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `issue`');
		}

		/**
		 * Reload this Issue from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Issue object.');

			// Reload the Object
			$objReloaded = Issue::Load($this->intId);

			// Update $this's local variables to match
			$this->IssuePriorityTypeId = $objReloaded->IssuePriorityTypeId;
			$this->IssueStatusTypeId = $objReloaded->IssueStatusTypeId;
			$this->IssueResolutionTypeId = $objReloaded->IssueResolutionTypeId;
			$this->strTitle = $objReloaded->strTitle;
			$this->strExampleCode = $objReloaded->strExampleCode;
			$this->strExampleTemplate = $objReloaded->strExampleTemplate;
			$this->strExampleData = $objReloaded->strExampleData;
			$this->strExpectedOutput = $objReloaded->strExpectedOutput;
			$this->strActualOutput = $objReloaded->strActualOutput;
			$this->PostedByPersonId = $objReloaded->PostedByPersonId;
			$this->AssignedToPersonId = $objReloaded->AssignedToPersonId;
			$this->dttPostDate = $objReloaded->dttPostDate;
			$this->dttAssignedDate = $objReloaded->dttAssignedDate;
			$this->dttDueDate = $objReloaded->dttDueDate;
			$this->intVoteCount = $objReloaded->intVoteCount;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Issue::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `issue` (
					`id`,
					`issue_priority_type_id`,
					`issue_status_type_id`,
					`issue_resolution_type_id`,
					`title`,
					`example_code`,
					`example_template`,
					`example_data`,
					`expected_output`,
					`actual_output`,
					`posted_by_person_id`,
					`assigned_to_person_id`,
					`post_date`,
					`assigned_date`,
					`due_date`,
					`vote_count`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intIssuePriorityTypeId) . ',
					' . $objDatabase->SqlVariable($this->intIssueStatusTypeId) . ',
					' . $objDatabase->SqlVariable($this->intIssueResolutionTypeId) . ',
					' . $objDatabase->SqlVariable($this->strTitle) . ',
					' . $objDatabase->SqlVariable($this->strExampleCode) . ',
					' . $objDatabase->SqlVariable($this->strExampleTemplate) . ',
					' . $objDatabase->SqlVariable($this->strExampleData) . ',
					' . $objDatabase->SqlVariable($this->strExpectedOutput) . ',
					' . $objDatabase->SqlVariable($this->strActualOutput) . ',
					' . $objDatabase->SqlVariable($this->intPostedByPersonId) . ',
					' . $objDatabase->SqlVariable($this->intAssignedToPersonId) . ',
					' . $objDatabase->SqlVariable($this->dttPostDate) . ',
					' . $objDatabase->SqlVariable($this->dttAssignedDate) . ',
					' . $objDatabase->SqlVariable($this->dttDueDate) . ',
					' . $objDatabase->SqlVariable($this->intVoteCount) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intId
		 * @return Issue[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Issue::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM issue WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Issue::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Issue[]
		 */
		public function GetJournal() {
			return Issue::GetJournalForId($this->intId);
		}




		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Id':
					// Gets the value for intId (Read-Only PK)
					// @return integer
					return $this->intId;

				case 'IssuePriorityTypeId':
					// Gets the value for intIssuePriorityTypeId (Not Null)
					// @return integer
					return $this->intIssuePriorityTypeId;

				case 'IssueStatusTypeId':
					// Gets the value for intIssueStatusTypeId (Not Null)
					// @return integer
					return $this->intIssueStatusTypeId;

				case 'IssueResolutionTypeId':
					// Gets the value for intIssueResolutionTypeId 
					// @return integer
					return $this->intIssueResolutionTypeId;

				case 'Title':
					// Gets the value for strTitle 
					// @return string
					return $this->strTitle;

				case 'ExampleCode':
					// Gets the value for strExampleCode 
					// @return string
					return $this->strExampleCode;

				case 'ExampleTemplate':
					// Gets the value for strExampleTemplate 
					// @return string
					return $this->strExampleTemplate;

				case 'ExampleData':
					// Gets the value for strExampleData 
					// @return string
					return $this->strExampleData;

				case 'ExpectedOutput':
					// Gets the value for strExpectedOutput 
					// @return string
					return $this->strExpectedOutput;

				case 'ActualOutput':
					// Gets the value for strActualOutput 
					// @return string
					return $this->strActualOutput;

				case 'PostedByPersonId':
					// Gets the value for intPostedByPersonId (Not Null)
					// @return integer
					return $this->intPostedByPersonId;

				case 'AssignedToPersonId':
					// Gets the value for intAssignedToPersonId 
					// @return integer
					return $this->intAssignedToPersonId;

				case 'PostDate':
					// Gets the value for dttPostDate (Not Null)
					// @return QDateTime
					return $this->dttPostDate;

				case 'AssignedDate':
					// Gets the value for dttAssignedDate 
					// @return QDateTime
					return $this->dttAssignedDate;

				case 'DueDate':
					// Gets the value for dttDueDate 
					// @return QDateTime
					return $this->dttDueDate;

				case 'VoteCount':
					// Gets the value for intVoteCount 
					// @return integer
					return $this->intVoteCount;


				///////////////////
				// Member Objects
				///////////////////
				case 'PostedByPerson':
					// Gets the value for the Person object referenced by intPostedByPersonId (Not Null)
					// @return Person
					try {
						if ((!$this->objPostedByPerson) && (!is_null($this->intPostedByPersonId)))
							$this->objPostedByPerson = Person::Load($this->intPostedByPersonId);
						return $this->objPostedByPerson;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AssignedToPerson':
					// Gets the value for the Person object referenced by intAssignedToPersonId 
					// @return Person
					try {
						if ((!$this->objAssignedToPerson) && (!is_null($this->intAssignedToPersonId)))
							$this->objAssignedToPerson = Person::Load($this->intAssignedToPersonId);
						return $this->objAssignedToPerson;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'TopicLink':
					// Gets the value for the TopicLink object that uniquely references this Issue
					// by objTopicLink (Unique)
					// @return TopicLink
					try {
						if ($this->objTopicLink === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objTopicLink)
							$this->objTopicLink = TopicLink::LoadByIssueId($this->intId);
						return $this->objTopicLink;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_IssueFieldValue':
					// Gets the value for the private _objIssueFieldValue (Read-Only)
					// if set due to an expansion on the issue_field_value.issue_id reverse relationship
					// @return IssueFieldValue
					return $this->_objIssueFieldValue;

				case '_IssueFieldValueArray':
					// Gets the value for the private _objIssueFieldValueArray (Read-Only)
					// if set due to an ExpandAsArray on the issue_field_value.issue_id reverse relationship
					// @return IssueFieldValue[]
					return (array) $this->_objIssueFieldValueArray;

				case '_IssueVote':
					// Gets the value for the private _objIssueVote (Read-Only)
					// if set due to an expansion on the issue_vote.issue_id reverse relationship
					// @return IssueVote
					return $this->_objIssueVote;

				case '_IssueVoteArray':
					// Gets the value for the private _objIssueVoteArray (Read-Only)
					// if set due to an ExpandAsArray on the issue_vote.issue_id reverse relationship
					// @return IssueVote[]
					return (array) $this->_objIssueVoteArray;


				case '__Restored':
					return $this->__blnRestored;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

				/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'IssuePriorityTypeId':
					// Sets the value for intIssuePriorityTypeId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intIssuePriorityTypeId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IssueStatusTypeId':
					// Sets the value for intIssueStatusTypeId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intIssueStatusTypeId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IssueResolutionTypeId':
					// Sets the value for intIssueResolutionTypeId 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intIssueResolutionTypeId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Title':
					// Sets the value for strTitle 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strTitle = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ExampleCode':
					// Sets the value for strExampleCode 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strExampleCode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ExampleTemplate':
					// Sets the value for strExampleTemplate 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strExampleTemplate = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ExampleData':
					// Sets the value for strExampleData 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strExampleData = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ExpectedOutput':
					// Sets the value for strExpectedOutput 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strExpectedOutput = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ActualOutput':
					// Sets the value for strActualOutput 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strActualOutput = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostedByPersonId':
					// Sets the value for intPostedByPersonId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objPostedByPerson = null;
						return ($this->intPostedByPersonId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AssignedToPersonId':
					// Sets the value for intAssignedToPersonId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objAssignedToPerson = null;
						return ($this->intAssignedToPersonId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostDate':
					// Sets the value for dttPostDate (Not Null)
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttPostDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AssignedDate':
					// Sets the value for dttAssignedDate 
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttAssignedDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DueDate':
					// Sets the value for dttDueDate 
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttDueDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'VoteCount':
					// Sets the value for intVoteCount 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intVoteCount = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'PostedByPerson':
					// Sets the value for the Person object referenced by intPostedByPersonId (Not Null)
					// @param Person $mixValue
					// @return Person
					if (is_null($mixValue)) {
						$this->intPostedByPersonId = null;
						$this->objPostedByPerson = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Person object
						try {
							$mixValue = QType::Cast($mixValue, 'Person');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Person object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved PostedByPerson for this Issue');

						// Update Local Member Variables
						$this->objPostedByPerson = $mixValue;
						$this->intPostedByPersonId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'AssignedToPerson':
					// Sets the value for the Person object referenced by intAssignedToPersonId 
					// @param Person $mixValue
					// @return Person
					if (is_null($mixValue)) {
						$this->intAssignedToPersonId = null;
						$this->objAssignedToPerson = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Person object
						try {
							$mixValue = QType::Cast($mixValue, 'Person');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Person object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved AssignedToPerson for this Issue');

						// Update Local Member Variables
						$this->objAssignedToPerson = $mixValue;
						$this->intAssignedToPersonId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'TopicLink':
					// Sets the value for the TopicLink object referenced by objTopicLink (Unique)
					// @param TopicLink $mixValue
					// @return TopicLink
					if (is_null($mixValue)) {
						$this->objTopicLink = null;

						// Make sure we update the adjoined TopicLink object the next time we call Save()
						$this->blnDirtyTopicLink = true;

						return null;
					} else {
						// Make sure $mixValue actually is a TopicLink object
						try {
							$mixValue = QType::Cast($mixValue, 'TopicLink');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objTopicLink to a DIFFERENT $mixValue?
						if ((!$this->TopicLink) || ($this->TopicLink->Id != $mixValue->Id)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined TopicLink object the next time we call Save()
							$this->blnDirtyTopicLink = true;

							// Update Local Member Variable
							$this->objTopicLink = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////

			
		
		// Related Objects' Methods for IssueFieldValue
		//-------------------------------------------------------------------

		/**
		 * Gets all associated IssueFieldValues as an array of IssueFieldValue objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssueFieldValue[]
		*/ 
		public function GetIssueFieldValueArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return IssueFieldValue::LoadArrayByIssueId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated IssueFieldValues
		 * @return int
		*/ 
		public function CountIssueFieldValues() {
			if ((is_null($this->intId)))
				return 0;

			return IssueFieldValue::CountByIssueId($this->intId);
		}

		/**
		 * Associates a IssueFieldValue
		 * @param IssueFieldValue $objIssueFieldValue
		 * @return void
		*/ 
		public function AssociateIssueFieldValue(IssueFieldValue $objIssueFieldValue) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssueFieldValue on this unsaved Issue.');
			if ((is_null($objIssueFieldValue->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssueFieldValue on this Issue with an unsaved IssueFieldValue.');

			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issue_field_value`
				SET
					`issue_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objIssueFieldValue->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objIssueFieldValue->IssueId = $this->intId;
				$objIssueFieldValue->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a IssueFieldValue
		 * @param IssueFieldValue $objIssueFieldValue
		 * @return void
		*/ 
		public function UnassociateIssueFieldValue(IssueFieldValue $objIssueFieldValue) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldValue on this unsaved Issue.');
			if ((is_null($objIssueFieldValue->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldValue on this Issue with an unsaved IssueFieldValue.');

			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issue_field_value`
				SET
					`issue_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objIssueFieldValue->Id) . ' AND
					`issue_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objIssueFieldValue->IssueId = null;
				$objIssueFieldValue->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all IssueFieldValues
		 * @return void
		*/ 
		public function UnassociateAllIssueFieldValues() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldValue on this unsaved Issue.');

			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (IssueFieldValue::LoadArrayByIssueId($this->intId) as $objIssueFieldValue) {
					$objIssueFieldValue->IssueId = null;
					$objIssueFieldValue->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issue_field_value`
				SET
					`issue_id` = null
				WHERE
					`issue_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated IssueFieldValue
		 * @param IssueFieldValue $objIssueFieldValue
		 * @return void
		*/ 
		public function DeleteAssociatedIssueFieldValue(IssueFieldValue $objIssueFieldValue) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldValue on this unsaved Issue.');
			if ((is_null($objIssueFieldValue->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldValue on this Issue with an unsaved IssueFieldValue.');

			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issue_field_value`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objIssueFieldValue->Id) . ' AND
					`issue_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objIssueFieldValue->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated IssueFieldValues
		 * @return void
		*/ 
		public function DeleteAllIssueFieldValues() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldValue on this unsaved Issue.');

			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (IssueFieldValue::LoadArrayByIssueId($this->intId) as $objIssueFieldValue) {
					$objIssueFieldValue->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issue_field_value`
				WHERE
					`issue_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for IssueVote
		//-------------------------------------------------------------------

		/**
		 * Gets all associated IssueVotes as an array of IssueVote objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssueVote[]
		*/ 
		public function GetIssueVoteArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return IssueVote::LoadArrayByIssueId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated IssueVotes
		 * @return int
		*/ 
		public function CountIssueVotes() {
			if ((is_null($this->intId)))
				return 0;

			return IssueVote::CountByIssueId($this->intId);
		}

		/**
		 * Associates a IssueVote
		 * @param IssueVote $objIssueVote
		 * @return void
		*/ 
		public function AssociateIssueVote(IssueVote $objIssueVote) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssueVote on this unsaved Issue.');
			if ((is_null($objIssueVote->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssueVote on this Issue with an unsaved IssueVote.');

			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issue_vote`
				SET
					`issue_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objIssueVote->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objIssueVote->IssueId = $this->intId;
				$objIssueVote->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a IssueVote
		 * @param IssueVote $objIssueVote
		 * @return void
		*/ 
		public function UnassociateIssueVote(IssueVote $objIssueVote) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueVote on this unsaved Issue.');
			if ((is_null($objIssueVote->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueVote on this Issue with an unsaved IssueVote.');

			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issue_vote`
				SET
					`issue_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objIssueVote->Id) . ' AND
					`issue_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objIssueVote->IssueId = null;
				$objIssueVote->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all IssueVotes
		 * @return void
		*/ 
		public function UnassociateAllIssueVotes() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueVote on this unsaved Issue.');

			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (IssueVote::LoadArrayByIssueId($this->intId) as $objIssueVote) {
					$objIssueVote->IssueId = null;
					$objIssueVote->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issue_vote`
				SET
					`issue_id` = null
				WHERE
					`issue_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated IssueVote
		 * @param IssueVote $objIssueVote
		 * @return void
		*/ 
		public function DeleteAssociatedIssueVote(IssueVote $objIssueVote) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueVote on this unsaved Issue.');
			if ((is_null($objIssueVote->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueVote on this Issue with an unsaved IssueVote.');

			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issue_vote`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objIssueVote->Id) . ' AND
					`issue_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objIssueVote->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated IssueVotes
		 * @return void
		*/ 
		public function DeleteAllIssueVotes() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueVote on this unsaved Issue.');

			// Get the Database Object for this Class
			$objDatabase = Issue::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (IssueVote::LoadArrayByIssueId($this->intId) as $objIssueVote) {
					$objIssueVote->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issue_vote`
				WHERE
					`issue_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Issue"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="IssuePriorityTypeId" type="xsd:int"/>';
			$strToReturn .= '<element name="IssueStatusTypeId" type="xsd:int"/>';
			$strToReturn .= '<element name="IssueResolutionTypeId" type="xsd:int"/>';
			$strToReturn .= '<element name="Title" type="xsd:string"/>';
			$strToReturn .= '<element name="ExampleCode" type="xsd:string"/>';
			$strToReturn .= '<element name="ExampleTemplate" type="xsd:string"/>';
			$strToReturn .= '<element name="ExampleData" type="xsd:string"/>';
			$strToReturn .= '<element name="ExpectedOutput" type="xsd:string"/>';
			$strToReturn .= '<element name="ActualOutput" type="xsd:string"/>';
			$strToReturn .= '<element name="PostedByPerson" type="xsd1:Person"/>';
			$strToReturn .= '<element name="AssignedToPerson" type="xsd1:Person"/>';
			$strToReturn .= '<element name="PostDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="AssignedDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="DueDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="VoteCount" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Issue', $strComplexTypeArray)) {
				$strComplexTypeArray['Issue'] = Issue::GetSoapComplexTypeXml();
				Person::AlterSoapComplexTypeArray($strComplexTypeArray);
				Person::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Issue::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Issue();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'IssuePriorityTypeId'))
				$objToReturn->intIssuePriorityTypeId = $objSoapObject->IssuePriorityTypeId;
			if (property_exists($objSoapObject, 'IssueStatusTypeId'))
				$objToReturn->intIssueStatusTypeId = $objSoapObject->IssueStatusTypeId;
			if (property_exists($objSoapObject, 'IssueResolutionTypeId'))
				$objToReturn->intIssueResolutionTypeId = $objSoapObject->IssueResolutionTypeId;
			if (property_exists($objSoapObject, 'Title'))
				$objToReturn->strTitle = $objSoapObject->Title;
			if (property_exists($objSoapObject, 'ExampleCode'))
				$objToReturn->strExampleCode = $objSoapObject->ExampleCode;
			if (property_exists($objSoapObject, 'ExampleTemplate'))
				$objToReturn->strExampleTemplate = $objSoapObject->ExampleTemplate;
			if (property_exists($objSoapObject, 'ExampleData'))
				$objToReturn->strExampleData = $objSoapObject->ExampleData;
			if (property_exists($objSoapObject, 'ExpectedOutput'))
				$objToReturn->strExpectedOutput = $objSoapObject->ExpectedOutput;
			if (property_exists($objSoapObject, 'ActualOutput'))
				$objToReturn->strActualOutput = $objSoapObject->ActualOutput;
			if ((property_exists($objSoapObject, 'PostedByPerson')) &&
				($objSoapObject->PostedByPerson))
				$objToReturn->PostedByPerson = Person::GetObjectFromSoapObject($objSoapObject->PostedByPerson);
			if ((property_exists($objSoapObject, 'AssignedToPerson')) &&
				($objSoapObject->AssignedToPerson))
				$objToReturn->AssignedToPerson = Person::GetObjectFromSoapObject($objSoapObject->AssignedToPerson);
			if (property_exists($objSoapObject, 'PostDate'))
				$objToReturn->dttPostDate = new QDateTime($objSoapObject->PostDate);
			if (property_exists($objSoapObject, 'AssignedDate'))
				$objToReturn->dttAssignedDate = new QDateTime($objSoapObject->AssignedDate);
			if (property_exists($objSoapObject, 'DueDate'))
				$objToReturn->dttDueDate = new QDateTime($objSoapObject->DueDate);
			if (property_exists($objSoapObject, 'VoteCount'))
				$objToReturn->intVoteCount = $objSoapObject->VoteCount;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Issue::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objPostedByPerson)
				$objObject->objPostedByPerson = Person::GetSoapObjectFromObject($objObject->objPostedByPerson, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPostedByPersonId = null;
			if ($objObject->objAssignedToPerson)
				$objObject->objAssignedToPerson = Person::GetSoapObjectFromObject($objObject->objAssignedToPerson, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAssignedToPersonId = null;
			if ($objObject->dttPostDate)
				$objObject->dttPostDate = $objObject->dttPostDate->__toString(QDateTime::FormatSoap);
			if ($objObject->dttAssignedDate)
				$objObject->dttAssignedDate = $objObject->dttAssignedDate->__toString(QDateTime::FormatSoap);
			if ($objObject->dttDueDate)
				$objObject->dttDueDate = $objObject->dttDueDate->__toString(QDateTime::FormatSoap);
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $IssuePriorityTypeId
	 * @property-read QQNode $IssueStatusTypeId
	 * @property-read QQNode $IssueResolutionTypeId
	 * @property-read QQNode $Title
	 * @property-read QQNode $ExampleCode
	 * @property-read QQNode $ExampleTemplate
	 * @property-read QQNode $ExampleData
	 * @property-read QQNode $ExpectedOutput
	 * @property-read QQNode $ActualOutput
	 * @property-read QQNode $PostedByPersonId
	 * @property-read QQNodePerson $PostedByPerson
	 * @property-read QQNode $AssignedToPersonId
	 * @property-read QQNodePerson $AssignedToPerson
	 * @property-read QQNode $PostDate
	 * @property-read QQNode $AssignedDate
	 * @property-read QQNode $DueDate
	 * @property-read QQNode $VoteCount
	 * @property-read QQReverseReferenceNodeIssueFieldValue $IssueFieldValue
	 * @property-read QQReverseReferenceNodeIssueVote $IssueVote
	 * @property-read QQReverseReferenceNodeTopicLink $TopicLink
	 */
	class QQNodeIssue extends QQNode {
		protected $strTableName = 'issue';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Issue';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'IssuePriorityTypeId':
					return new QQNode('issue_priority_type_id', 'IssuePriorityTypeId', 'integer', $this);
				case 'IssueStatusTypeId':
					return new QQNode('issue_status_type_id', 'IssueStatusTypeId', 'integer', $this);
				case 'IssueResolutionTypeId':
					return new QQNode('issue_resolution_type_id', 'IssueResolutionTypeId', 'integer', $this);
				case 'Title':
					return new QQNode('title', 'Title', 'string', $this);
				case 'ExampleCode':
					return new QQNode('example_code', 'ExampleCode', 'string', $this);
				case 'ExampleTemplate':
					return new QQNode('example_template', 'ExampleTemplate', 'string', $this);
				case 'ExampleData':
					return new QQNode('example_data', 'ExampleData', 'string', $this);
				case 'ExpectedOutput':
					return new QQNode('expected_output', 'ExpectedOutput', 'string', $this);
				case 'ActualOutput':
					return new QQNode('actual_output', 'ActualOutput', 'string', $this);
				case 'PostedByPersonId':
					return new QQNode('posted_by_person_id', 'PostedByPersonId', 'integer', $this);
				case 'PostedByPerson':
					return new QQNodePerson('posted_by_person_id', 'PostedByPerson', 'integer', $this);
				case 'AssignedToPersonId':
					return new QQNode('assigned_to_person_id', 'AssignedToPersonId', 'integer', $this);
				case 'AssignedToPerson':
					return new QQNodePerson('assigned_to_person_id', 'AssignedToPerson', 'integer', $this);
				case 'PostDate':
					return new QQNode('post_date', 'PostDate', 'QDateTime', $this);
				case 'AssignedDate':
					return new QQNode('assigned_date', 'AssignedDate', 'QDateTime', $this);
				case 'DueDate':
					return new QQNode('due_date', 'DueDate', 'QDateTime', $this);
				case 'VoteCount':
					return new QQNode('vote_count', 'VoteCount', 'integer', $this);
				case 'IssueFieldValue':
					return new QQReverseReferenceNodeIssueFieldValue($this, 'issuefieldvalue', 'reverse_reference', 'issue_id');
				case 'IssueVote':
					return new QQReverseReferenceNodeIssueVote($this, 'issuevote', 'reverse_reference', 'issue_id');
				case 'TopicLink':
					return new QQReverseReferenceNodeTopicLink($this, 'topiclink', 'reverse_reference', 'issue_id', 'TopicLink');

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}
	
	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $IssuePriorityTypeId
	 * @property-read QQNode $IssueStatusTypeId
	 * @property-read QQNode $IssueResolutionTypeId
	 * @property-read QQNode $Title
	 * @property-read QQNode $ExampleCode
	 * @property-read QQNode $ExampleTemplate
	 * @property-read QQNode $ExampleData
	 * @property-read QQNode $ExpectedOutput
	 * @property-read QQNode $ActualOutput
	 * @property-read QQNode $PostedByPersonId
	 * @property-read QQNodePerson $PostedByPerson
	 * @property-read QQNode $AssignedToPersonId
	 * @property-read QQNodePerson $AssignedToPerson
	 * @property-read QQNode $PostDate
	 * @property-read QQNode $AssignedDate
	 * @property-read QQNode $DueDate
	 * @property-read QQNode $VoteCount
	 * @property-read QQReverseReferenceNodeIssueFieldValue $IssueFieldValue
	 * @property-read QQReverseReferenceNodeIssueVote $IssueVote
	 * @property-read QQReverseReferenceNodeTopicLink $TopicLink
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeIssue extends QQReverseReferenceNode {
		protected $strTableName = 'issue';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Issue';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'IssuePriorityTypeId':
					return new QQNode('issue_priority_type_id', 'IssuePriorityTypeId', 'integer', $this);
				case 'IssueStatusTypeId':
					return new QQNode('issue_status_type_id', 'IssueStatusTypeId', 'integer', $this);
				case 'IssueResolutionTypeId':
					return new QQNode('issue_resolution_type_id', 'IssueResolutionTypeId', 'integer', $this);
				case 'Title':
					return new QQNode('title', 'Title', 'string', $this);
				case 'ExampleCode':
					return new QQNode('example_code', 'ExampleCode', 'string', $this);
				case 'ExampleTemplate':
					return new QQNode('example_template', 'ExampleTemplate', 'string', $this);
				case 'ExampleData':
					return new QQNode('example_data', 'ExampleData', 'string', $this);
				case 'ExpectedOutput':
					return new QQNode('expected_output', 'ExpectedOutput', 'string', $this);
				case 'ActualOutput':
					return new QQNode('actual_output', 'ActualOutput', 'string', $this);
				case 'PostedByPersonId':
					return new QQNode('posted_by_person_id', 'PostedByPersonId', 'integer', $this);
				case 'PostedByPerson':
					return new QQNodePerson('posted_by_person_id', 'PostedByPerson', 'integer', $this);
				case 'AssignedToPersonId':
					return new QQNode('assigned_to_person_id', 'AssignedToPersonId', 'integer', $this);
				case 'AssignedToPerson':
					return new QQNodePerson('assigned_to_person_id', 'AssignedToPerson', 'integer', $this);
				case 'PostDate':
					return new QQNode('post_date', 'PostDate', 'QDateTime', $this);
				case 'AssignedDate':
					return new QQNode('assigned_date', 'AssignedDate', 'QDateTime', $this);
				case 'DueDate':
					return new QQNode('due_date', 'DueDate', 'QDateTime', $this);
				case 'VoteCount':
					return new QQNode('vote_count', 'VoteCount', 'integer', $this);
				case 'IssueFieldValue':
					return new QQReverseReferenceNodeIssueFieldValue($this, 'issuefieldvalue', 'reverse_reference', 'issue_id');
				case 'IssueVote':
					return new QQReverseReferenceNodeIssueVote($this, 'issuevote', 'reverse_reference', 'issue_id');
				case 'TopicLink':
					return new QQReverseReferenceNodeTopicLink($this, 'topiclink', 'reverse_reference', 'issue_id', 'TopicLink');

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>