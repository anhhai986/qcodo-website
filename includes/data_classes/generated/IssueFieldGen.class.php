<?php
	/**
	 * The abstract IssueFieldGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the IssueField subclass which
	 * extends this IssueFieldGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the IssueField class.
	 * 
	 * @package Qcodo Website
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Name the value for strName 
	 * @property string $Token the value for strToken (Unique)
	 * @property integer $OrderNumber the value for intOrderNumber 
	 * @property boolean $RequiredFlag the value for blnRequiredFlag 
	 * @property boolean $MutableFlag the value for blnMutableFlag 
	 * @property boolean $ActiveFlag the value for blnActiveFlag 
	 * @property IssueFieldOption $_IssueFieldOption the value for the private _objIssueFieldOption (Read-Only) if set due to an expansion on the issue_field_option.issue_field_id reverse relationship
	 * @property IssueFieldOption[] $_IssueFieldOptionArray the value for the private _objIssueFieldOptionArray (Read-Only) if set due to an ExpandAsArray on the issue_field_option.issue_field_id reverse relationship
	 * @property IssueFieldValue $_IssueFieldValue the value for the private _objIssueFieldValue (Read-Only) if set due to an expansion on the issue_field_value.issue_field_id reverse relationship
	 * @property IssueFieldValue[] $_IssueFieldValueArray the value for the private _objIssueFieldValueArray (Read-Only) if set due to an ExpandAsArray on the issue_field_value.issue_field_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class IssueFieldGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column issue_field.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column issue_field.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column issue_field.token
		 * @var string strToken
		 */
		protected $strToken;
		const TokenMaxLength = 50;
		const TokenDefault = null;


		/**
		 * Protected member variable that maps to the database column issue_field.order_number
		 * @var integer intOrderNumber
		 */
		protected $intOrderNumber;
		const OrderNumberDefault = null;


		/**
		 * Protected member variable that maps to the database column issue_field.required_flag
		 * @var boolean blnRequiredFlag
		 */
		protected $blnRequiredFlag;
		const RequiredFlagDefault = null;


		/**
		 * Protected member variable that maps to the database column issue_field.mutable_flag
		 * @var boolean blnMutableFlag
		 */
		protected $blnMutableFlag;
		const MutableFlagDefault = null;


		/**
		 * Protected member variable that maps to the database column issue_field.active_flag
		 * @var boolean blnActiveFlag
		 */
		protected $blnActiveFlag;
		const ActiveFlagDefault = null;


		/**
		 * Private member variable that stores a reference to a single IssueFieldOption object
		 * (of type IssueFieldOption), if this IssueField object was restored with
		 * an expansion on the issue_field_option association table.
		 * @var IssueFieldOption _objIssueFieldOption;
		 */
		private $_objIssueFieldOption;

		/**
		 * Private member variable that stores a reference to an array of IssueFieldOption objects
		 * (of type IssueFieldOption[]), if this IssueField object was restored with
		 * an ExpandAsArray on the issue_field_option association table.
		 * @var IssueFieldOption[] _objIssueFieldOptionArray;
		 */
		private $_objIssueFieldOptionArray = array();

		/**
		 * Private member variable that stores a reference to a single IssueFieldValue object
		 * (of type IssueFieldValue), if this IssueField object was restored with
		 * an expansion on the issue_field_value association table.
		 * @var IssueFieldValue _objIssueFieldValue;
		 */
		private $_objIssueFieldValue;

		/**
		 * Private member variable that stores a reference to an array of IssueFieldValue objects
		 * (of type IssueFieldValue[]), if this IssueField object was restored with
		 * an ExpandAsArray on the issue_field_value association table.
		 * @var IssueFieldValue[] _objIssueFieldValueArray;
		 */
		private $_objIssueFieldValueArray = array();

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
		 * Load a IssueField from PK Info
		 * @param integer $intId
		 * @return IssueField
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return IssueField::QuerySingle(
				QQ::Equal(QQN::IssueField()->Id, $intId)
			);
		}

		/**
		 * Load all IssueFields
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssueField[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call IssueField::QueryArray to perform the LoadAll query
			try {
				return IssueField::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all IssueFields
		 * @return int
		 */
		public static function CountAll() {
			// Call IssueField::QueryCount to perform the CountAll query
			return IssueField::QueryCount(QQ::All());
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
			$objDatabase = IssueField::GetDatabase();

			// Create/Build out the QueryBuilder object with IssueField-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'issue_field');
			IssueField::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('issue_field');

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
		 * Static Qcodo Query method to query for a single IssueField object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return IssueField the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = IssueField::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new IssueField object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = IssueField::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return IssueField::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of IssueField objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return IssueField[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = IssueField::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return IssueField::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = IssueField::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of IssueField objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = IssueField::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = IssueField::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'issue_field_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with IssueField-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				IssueField::GetSelectFields($objQueryBuilder);
				IssueField::GetFromFields($objQueryBuilder);

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
			return IssueField::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this IssueField
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'issue_field';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			$objBuilder->AddSelectItem($strTableName, 'token', $strAliasPrefix . 'token');
			$objBuilder->AddSelectItem($strTableName, 'order_number', $strAliasPrefix . 'order_number');
			$objBuilder->AddSelectItem($strTableName, 'required_flag', $strAliasPrefix . 'required_flag');
			$objBuilder->AddSelectItem($strTableName, 'mutable_flag', $strAliasPrefix . 'mutable_flag');
			$objBuilder->AddSelectItem($strTableName, 'active_flag', $strAliasPrefix . 'active_flag');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a IssueField from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this IssueField::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return IssueField
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
					$strAliasPrefix = 'issue_field__';


				$strAlias = $strAliasPrefix . 'issuefieldoption__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objIssueFieldOptionArray)) {
						$objPreviousChildItem = $objPreviousItem->_objIssueFieldOptionArray[$intPreviousChildItemCount - 1];
						$objChildItem = IssueFieldOption::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issuefieldoption__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objIssueFieldOptionArray[] = $objChildItem;
					} else
						$objPreviousItem->_objIssueFieldOptionArray[] = IssueFieldOption::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issuefieldoption__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

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

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'issue_field__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the IssueField object
			$objToReturn = new IssueField();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'token', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'token'] : $strAliasPrefix . 'token';
			$objToReturn->strToken = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'order_number', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'order_number'] : $strAliasPrefix . 'order_number';
			$objToReturn->intOrderNumber = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'required_flag', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'required_flag'] : $strAliasPrefix . 'required_flag';
			$objToReturn->blnRequiredFlag = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAliasName = array_key_exists($strAliasPrefix . 'mutable_flag', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'mutable_flag'] : $strAliasPrefix . 'mutable_flag';
			$objToReturn->blnMutableFlag = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAliasName = array_key_exists($strAliasPrefix . 'active_flag', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'active_flag'] : $strAliasPrefix . 'active_flag';
			$objToReturn->blnActiveFlag = $objDbRow->GetColumn($strAliasName, 'Bit');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'issue_field__';




			// Check for IssueFieldOption Virtual Binding
			$strAlias = $strAliasPrefix . 'issuefieldoption__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objIssueFieldOptionArray[] = IssueFieldOption::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issuefieldoption__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objIssueFieldOption = IssueFieldOption::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issuefieldoption__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
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

			return $objToReturn;
		}

		/**
		 * Instantiate an array of IssueFields from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return IssueField[]
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
					$objItem = IssueField::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = IssueField::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single IssueField object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return IssueField next row resulting from the query
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
			return IssueField::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single IssueField object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return IssueField
		*/
		public static function LoadById($intId) {
			return IssueField::QuerySingle(
				QQ::Equal(QQN::IssueField()->Id, $intId)
			);
		}
			
		/**
		 * Load a single IssueField object,
		 * by Token Index(es)
		 * @param string $strToken
		 * @return IssueField
		*/
		public static function LoadByToken($strToken) {
			return IssueField::QuerySingle(
				QQ::Equal(QQN::IssueField()->Token, $strToken)
			);
		}
			
		/**
		 * Load an array of IssueField objects,
		 * by ActiveFlag Index(es)
		 * @param boolean $blnActiveFlag
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssueField[]
		*/
		public static function LoadArrayByActiveFlag($blnActiveFlag, $objOptionalClauses = null) {
			// Call IssueField::QueryArray to perform the LoadArrayByActiveFlag query
			try {
				return IssueField::QueryArray(
					QQ::Equal(QQN::IssueField()->ActiveFlag, $blnActiveFlag),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count IssueFields
		 * by ActiveFlag Index(es)
		 * @param boolean $blnActiveFlag
		 * @return int
		*/
		public static function CountByActiveFlag($blnActiveFlag) {
			// Call IssueField::QueryCount to perform the CountByActiveFlag query
			return IssueField::QueryCount(
				QQ::Equal(QQN::IssueField()->ActiveFlag, $blnActiveFlag)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this IssueField
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = IssueField::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `issue_field` (
							`name`,
							`token`,
							`order_number`,
							`required_flag`,
							`mutable_flag`,
							`active_flag`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strToken) . ',
							' . $objDatabase->SqlVariable($this->intOrderNumber) . ',
							' . $objDatabase->SqlVariable($this->blnRequiredFlag) . ',
							' . $objDatabase->SqlVariable($this->blnMutableFlag) . ',
							' . $objDatabase->SqlVariable($this->blnActiveFlag) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('issue_field', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`issue_field`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`token` = ' . $objDatabase->SqlVariable($this->strToken) . ',
							`order_number` = ' . $objDatabase->SqlVariable($this->intOrderNumber) . ',
							`required_flag` = ' . $objDatabase->SqlVariable($this->blnRequiredFlag) . ',
							`mutable_flag` = ' . $objDatabase->SqlVariable($this->blnMutableFlag) . ',
							`active_flag` = ' . $objDatabase->SqlVariable($this->blnActiveFlag) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
					');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('UPDATE');
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
		 * Delete this IssueField
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this IssueField with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = IssueField::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issue_field`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all IssueFields
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = IssueField::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issue_field`');
		}

		/**
		 * Truncate issue_field table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = IssueField::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `issue_field`');
		}

		/**
		 * Reload this IssueField from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved IssueField object.');

			// Reload the Object
			$objReloaded = IssueField::Load($this->intId);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strToken = $objReloaded->strToken;
			$this->intOrderNumber = $objReloaded->intOrderNumber;
			$this->blnRequiredFlag = $objReloaded->blnRequiredFlag;
			$this->blnMutableFlag = $objReloaded->blnMutableFlag;
			$this->blnActiveFlag = $objReloaded->blnActiveFlag;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = IssueField::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `issue_field` (
					`id`,
					`name`,
					`token`,
					`order_number`,
					`required_flag`,
					`mutable_flag`,
					`active_flag`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strName) . ',
					' . $objDatabase->SqlVariable($this->strToken) . ',
					' . $objDatabase->SqlVariable($this->intOrderNumber) . ',
					' . $objDatabase->SqlVariable($this->blnRequiredFlag) . ',
					' . $objDatabase->SqlVariable($this->blnMutableFlag) . ',
					' . $objDatabase->SqlVariable($this->blnActiveFlag) . ',
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
		 * @return IssueField[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = IssueField::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM issue_field WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return IssueField::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return IssueField[]
		 */
		public function GetJournal() {
			return IssueField::GetJournalForId($this->intId);
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

				case 'Name':
					// Gets the value for strName 
					// @return string
					return $this->strName;

				case 'Token':
					// Gets the value for strToken (Unique)
					// @return string
					return $this->strToken;

				case 'OrderNumber':
					// Gets the value for intOrderNumber 
					// @return integer
					return $this->intOrderNumber;

				case 'RequiredFlag':
					// Gets the value for blnRequiredFlag 
					// @return boolean
					return $this->blnRequiredFlag;

				case 'MutableFlag':
					// Gets the value for blnMutableFlag 
					// @return boolean
					return $this->blnMutableFlag;

				case 'ActiveFlag':
					// Gets the value for blnActiveFlag 
					// @return boolean
					return $this->blnActiveFlag;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_IssueFieldOption':
					// Gets the value for the private _objIssueFieldOption (Read-Only)
					// if set due to an expansion on the issue_field_option.issue_field_id reverse relationship
					// @return IssueFieldOption
					return $this->_objIssueFieldOption;

				case '_IssueFieldOptionArray':
					// Gets the value for the private _objIssueFieldOptionArray (Read-Only)
					// if set due to an ExpandAsArray on the issue_field_option.issue_field_id reverse relationship
					// @return IssueFieldOption[]
					return (array) $this->_objIssueFieldOptionArray;

				case '_IssueFieldValue':
					// Gets the value for the private _objIssueFieldValue (Read-Only)
					// if set due to an expansion on the issue_field_value.issue_field_id reverse relationship
					// @return IssueFieldValue
					return $this->_objIssueFieldValue;

				case '_IssueFieldValueArray':
					// Gets the value for the private _objIssueFieldValueArray (Read-Only)
					// if set due to an ExpandAsArray on the issue_field_value.issue_field_id reverse relationship
					// @return IssueFieldValue[]
					return (array) $this->_objIssueFieldValueArray;


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
				case 'Name':
					// Sets the value for strName 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Token':
					// Sets the value for strToken (Unique)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strToken = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'OrderNumber':
					// Sets the value for intOrderNumber 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intOrderNumber = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RequiredFlag':
					// Sets the value for blnRequiredFlag 
					// @param boolean $mixValue
					// @return boolean
					try {
						return ($this->blnRequiredFlag = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MutableFlag':
					// Sets the value for blnMutableFlag 
					// @param boolean $mixValue
					// @return boolean
					try {
						return ($this->blnMutableFlag = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ActiveFlag':
					// Sets the value for blnActiveFlag 
					// @param boolean $mixValue
					// @return boolean
					try {
						return ($this->blnActiveFlag = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
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

			
		
		// Related Objects' Methods for IssueFieldOption
		//-------------------------------------------------------------------

		/**
		 * Gets all associated IssueFieldOptions as an array of IssueFieldOption objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssueFieldOption[]
		*/ 
		public function GetIssueFieldOptionArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return IssueFieldOption::LoadArrayByIssueFieldId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated IssueFieldOptions
		 * @return int
		*/ 
		public function CountIssueFieldOptions() {
			if ((is_null($this->intId)))
				return 0;

			return IssueFieldOption::CountByIssueFieldId($this->intId);
		}

		/**
		 * Associates a IssueFieldOption
		 * @param IssueFieldOption $objIssueFieldOption
		 * @return void
		*/ 
		public function AssociateIssueFieldOption(IssueFieldOption $objIssueFieldOption) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssueFieldOption on this unsaved IssueField.');
			if ((is_null($objIssueFieldOption->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssueFieldOption on this IssueField with an unsaved IssueFieldOption.');

			// Get the Database Object for this Class
			$objDatabase = IssueField::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issue_field_option`
				SET
					`issue_field_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objIssueFieldOption->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objIssueFieldOption->IssueFieldId = $this->intId;
				$objIssueFieldOption->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a IssueFieldOption
		 * @param IssueFieldOption $objIssueFieldOption
		 * @return void
		*/ 
		public function UnassociateIssueFieldOption(IssueFieldOption $objIssueFieldOption) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldOption on this unsaved IssueField.');
			if ((is_null($objIssueFieldOption->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldOption on this IssueField with an unsaved IssueFieldOption.');

			// Get the Database Object for this Class
			$objDatabase = IssueField::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issue_field_option`
				SET
					`issue_field_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objIssueFieldOption->Id) . ' AND
					`issue_field_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objIssueFieldOption->IssueFieldId = null;
				$objIssueFieldOption->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all IssueFieldOptions
		 * @return void
		*/ 
		public function UnassociateAllIssueFieldOptions() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldOption on this unsaved IssueField.');

			// Get the Database Object for this Class
			$objDatabase = IssueField::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (IssueFieldOption::LoadArrayByIssueFieldId($this->intId) as $objIssueFieldOption) {
					$objIssueFieldOption->IssueFieldId = null;
					$objIssueFieldOption->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issue_field_option`
				SET
					`issue_field_id` = null
				WHERE
					`issue_field_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated IssueFieldOption
		 * @param IssueFieldOption $objIssueFieldOption
		 * @return void
		*/ 
		public function DeleteAssociatedIssueFieldOption(IssueFieldOption $objIssueFieldOption) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldOption on this unsaved IssueField.');
			if ((is_null($objIssueFieldOption->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldOption on this IssueField with an unsaved IssueFieldOption.');

			// Get the Database Object for this Class
			$objDatabase = IssueField::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issue_field_option`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objIssueFieldOption->Id) . ' AND
					`issue_field_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objIssueFieldOption->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated IssueFieldOptions
		 * @return void
		*/ 
		public function DeleteAllIssueFieldOptions() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldOption on this unsaved IssueField.');

			// Get the Database Object for this Class
			$objDatabase = IssueField::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (IssueFieldOption::LoadArrayByIssueFieldId($this->intId) as $objIssueFieldOption) {
					$objIssueFieldOption->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issue_field_option`
				WHERE
					`issue_field_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
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
				return IssueFieldValue::LoadArrayByIssueFieldId($this->intId, $objOptionalClauses);
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

			return IssueFieldValue::CountByIssueFieldId($this->intId);
		}

		/**
		 * Associates a IssueFieldValue
		 * @param IssueFieldValue $objIssueFieldValue
		 * @return void
		*/ 
		public function AssociateIssueFieldValue(IssueFieldValue $objIssueFieldValue) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssueFieldValue on this unsaved IssueField.');
			if ((is_null($objIssueFieldValue->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssueFieldValue on this IssueField with an unsaved IssueFieldValue.');

			// Get the Database Object for this Class
			$objDatabase = IssueField::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issue_field_value`
				SET
					`issue_field_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objIssueFieldValue->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objIssueFieldValue->IssueFieldId = $this->intId;
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldValue on this unsaved IssueField.');
			if ((is_null($objIssueFieldValue->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldValue on this IssueField with an unsaved IssueFieldValue.');

			// Get the Database Object for this Class
			$objDatabase = IssueField::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issue_field_value`
				SET
					`issue_field_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objIssueFieldValue->Id) . ' AND
					`issue_field_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objIssueFieldValue->IssueFieldId = null;
				$objIssueFieldValue->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all IssueFieldValues
		 * @return void
		*/ 
		public function UnassociateAllIssueFieldValues() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldValue on this unsaved IssueField.');

			// Get the Database Object for this Class
			$objDatabase = IssueField::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (IssueFieldValue::LoadArrayByIssueFieldId($this->intId) as $objIssueFieldValue) {
					$objIssueFieldValue->IssueFieldId = null;
					$objIssueFieldValue->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issue_field_value`
				SET
					`issue_field_id` = null
				WHERE
					`issue_field_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated IssueFieldValue
		 * @param IssueFieldValue $objIssueFieldValue
		 * @return void
		*/ 
		public function DeleteAssociatedIssueFieldValue(IssueFieldValue $objIssueFieldValue) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldValue on this unsaved IssueField.');
			if ((is_null($objIssueFieldValue->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldValue on this IssueField with an unsaved IssueFieldValue.');

			// Get the Database Object for this Class
			$objDatabase = IssueField::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issue_field_value`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objIssueFieldValue->Id) . ' AND
					`issue_field_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssueFieldValue on this unsaved IssueField.');

			// Get the Database Object for this Class
			$objDatabase = IssueField::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (IssueFieldValue::LoadArrayByIssueFieldId($this->intId) as $objIssueFieldValue) {
					$objIssueFieldValue->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issue_field_value`
				WHERE
					`issue_field_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="IssueField"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Token" type="xsd:string"/>';
			$strToReturn .= '<element name="OrderNumber" type="xsd:int"/>';
			$strToReturn .= '<element name="RequiredFlag" type="xsd:boolean"/>';
			$strToReturn .= '<element name="MutableFlag" type="xsd:boolean"/>';
			$strToReturn .= '<element name="ActiveFlag" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('IssueField', $strComplexTypeArray)) {
				$strComplexTypeArray['IssueField'] = IssueField::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, IssueField::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new IssueField();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Token'))
				$objToReturn->strToken = $objSoapObject->Token;
			if (property_exists($objSoapObject, 'OrderNumber'))
				$objToReturn->intOrderNumber = $objSoapObject->OrderNumber;
			if (property_exists($objSoapObject, 'RequiredFlag'))
				$objToReturn->blnRequiredFlag = $objSoapObject->RequiredFlag;
			if (property_exists($objSoapObject, 'MutableFlag'))
				$objToReturn->blnMutableFlag = $objSoapObject->MutableFlag;
			if (property_exists($objSoapObject, 'ActiveFlag'))
				$objToReturn->blnActiveFlag = $objSoapObject->ActiveFlag;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, IssueField::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $Name
	 * @property-read QQNode $Token
	 * @property-read QQNode $OrderNumber
	 * @property-read QQNode $RequiredFlag
	 * @property-read QQNode $MutableFlag
	 * @property-read QQNode $ActiveFlag
	 * @property-read QQReverseReferenceNodeIssueFieldOption $IssueFieldOption
	 * @property-read QQReverseReferenceNodeIssueFieldValue $IssueFieldValue
	 */
	class QQNodeIssueField extends QQNode {
		protected $strTableName = 'issue_field';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'IssueField';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Token':
					return new QQNode('token', 'Token', 'string', $this);
				case 'OrderNumber':
					return new QQNode('order_number', 'OrderNumber', 'integer', $this);
				case 'RequiredFlag':
					return new QQNode('required_flag', 'RequiredFlag', 'boolean', $this);
				case 'MutableFlag':
					return new QQNode('mutable_flag', 'MutableFlag', 'boolean', $this);
				case 'ActiveFlag':
					return new QQNode('active_flag', 'ActiveFlag', 'boolean', $this);
				case 'IssueFieldOption':
					return new QQReverseReferenceNodeIssueFieldOption($this, 'issuefieldoption', 'reverse_reference', 'issue_field_id');
				case 'IssueFieldValue':
					return new QQReverseReferenceNodeIssueFieldValue($this, 'issuefieldvalue', 'reverse_reference', 'issue_field_id');

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
	 * @property-read QQNode $Name
	 * @property-read QQNode $Token
	 * @property-read QQNode $OrderNumber
	 * @property-read QQNode $RequiredFlag
	 * @property-read QQNode $MutableFlag
	 * @property-read QQNode $ActiveFlag
	 * @property-read QQReverseReferenceNodeIssueFieldOption $IssueFieldOption
	 * @property-read QQReverseReferenceNodeIssueFieldValue $IssueFieldValue
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeIssueField extends QQReverseReferenceNode {
		protected $strTableName = 'issue_field';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'IssueField';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Token':
					return new QQNode('token', 'Token', 'string', $this);
				case 'OrderNumber':
					return new QQNode('order_number', 'OrderNumber', 'integer', $this);
				case 'RequiredFlag':
					return new QQNode('required_flag', 'RequiredFlag', 'boolean', $this);
				case 'MutableFlag':
					return new QQNode('mutable_flag', 'MutableFlag', 'boolean', $this);
				case 'ActiveFlag':
					return new QQNode('active_flag', 'ActiveFlag', 'boolean', $this);
				case 'IssueFieldOption':
					return new QQReverseReferenceNodeIssueFieldOption($this, 'issuefieldoption', 'reverse_reference', 'issue_field_id');
				case 'IssueFieldValue':
					return new QQReverseReferenceNodeIssueFieldValue($this, 'issuefieldvalue', 'reverse_reference', 'issue_field_id');

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