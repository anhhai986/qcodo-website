<?php require(__INCLUDES__ . '/header.inc.php'); ?>

	<div class="searchBar">
		<div class="title">
			<span style="font-weight: normal; font-size: 12px;">Issue #<?php _p($this->objIssue->Id); ?> / </span>
			<?php _p($this->objIssue->Title); ?>
		</div>
		<div class="right">
			<?php // $this->txtSearch->Render(); ?>
		</div>
		<div class="right">
			<?php // $this->btnSearchAll->Render(); ?>
		</div>
		<div class="right">
			<?php // $this->btnSearchThis->Render(); ?>
		</div>
	</div>

	<div class="issueLeftColumn">
		<?php $this->pnlDetails->Render(); ?>
<?php if ($this->objIssue->IsEditableForPerson(QApplication::$Person)) { ?>
		<div class="roundedLink roundedLinkGray"><a href="/issues/edit.php/<?php _p($this->objIssue->Id); ?>" title="Edit this issue" style="">Edit Issue</a></div><br clear="all"/><br/>
<?php } ?>
<?php if ($this->btnSubmitFix) { $this->btnSubmitFix->Render(); print('<br clear="all"/><br/>'); } ?>

		<?php $this->pnlVotes->Render(); ?>

		<?php $this->pnlExampleCode->Render(); ?>
		<?php $this->pnlExampleTemplate->Render(); ?>
		<?php $this->pnlExampleData->Render(); ?>
		<?php $this->pnlExpectedOutput->Render(); ?>
		<?php $this->pnlActualOutput->Render(); ?>
		<?php $this->dlgZoom->Render(); ?>
	</div>

	<?php $this->pnlNotice->Render(); ?>
	<?php $this->pnlMessages->Render(); ?>
	<br clear="all"/>

<?php $this->dlgSubmitFix->Render(); ?>
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>