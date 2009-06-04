<?php require(__INCLUDES__ . '/header.inc.php'); ?>

<!-- <div style="background-color: #e9e9f0; -moz-border-radius: 8px 8px 0 0; height: 22px; font-size: 16px; font-weight: bold; padding: 4px 0 0 14px; border: 1px solid #ccd;">  -->	
	<div style="background-color: #393939; -moz-border-radius: 8px 8px 0 0; height: 22px; font-size: 16px; font-weight: bold; padding: 4px 14px 0 14px; border: 1px solid #222; color: #efe">
		<div style="float: left">
			<?php _p($this->objForum->Name); ?>
		</div>
		<div style="float: right; padding-top: 1px;">
			<div style="width: 196px; height: 16px; padding: 0 0 0 4px; margin: 0; font-size: 1px; -moz-border-radius: 7px; background-color: #eee;">
				<a href="#" onclick="document.getElementById('search').select(); return false;"><img src="/images/search.png" style="position: relative; top: 2px; border: 0;"/></a>
				<input type="text" value="search" id="search" style="background-color: #eee; border: 0; height: 14px; width: 165px; margin: 0; padding: 1px 0 0 0; font: 12px arial; font-weight: bold; color: #999;"/>
				<a href="#" onclick="document.getElementById('search').select(); return false;"><img src="/images/search_cancel.png" style="position: relative; top: 2px; border: 0;"/></a>
			</div>
		</div>
	</div>
	
	<div class="topicsShell">
<!-- <div class="topicsBorder"><div class="a">&nbsp;</div><div class="b">&nbsp;</div><div class="c">&nbsp;</div><div class="d">&nbsp;</div><div class="e">&nbsp;</div></div> --> 	
	<div class="topics" style="border-top: 0; border-color: #ccd; ">
<!-- 	<div class="name"><?php _p($this->objForum->Name); ?></div> -->
	 	<div class="description"><?php _p($this->objForum->Description); ?></div>
	 	<div class="paginator"><?php $this->dtrTopics->Paginator->Render(); ?></div>
		<?php $this->dtrTopics->Render(); ?>
	</div>
	</div>

<?php if (!$this->objTopic) { ?>

	<div class="topic" style="margin-top: 12px;">
		<h2>Please select a topic on the left</h2>
	</div>

<?php } else { ?>

	<div class="topic" style="margin-top: 12px;">
		<?php $this->lblTopicInfo->Render(); ?>

		<div class="controlBar">
			<div class="controls">
				<?php $this->btnRespond1->Render(); ?>
				<div class="spacer">&nbsp;</div>
				<?php $this->btnNotify1->Render(); ?>
				<div class="spacer">&nbsp;</div>
				<?php $this->btnMarkAsViewed1->Render(); ?>
			</div>
			<div class="paginator"><?php $this->dtrMessages->Paginator->Render(); ?></div>
		</div>

		<br clear="all"/>
		<?php $this->dtrMessages->Render(); ?>
		<br clear="all"/>

		<div class="controlBar">
			<div class="controls">
				<?php $this->btnRespond2->Render(); ?>
				<div class="spacer">&nbsp;</div>
				<?php $this->btnNotify2->Render(); ?>
				<div class="spacer">&nbsp;</div>
				<?php $this->btnMarkAsViewed2->Render(); ?>
			</div>
			<div class="paginator"><?php $this->dtrMessages->PaginatorAlternate->Render(); ?></div>
		</div>
	</div>

<?php } /* if (!$this->objTopic) */ ?>

	<br clear="all"/>
	<?php $this->dlgMessage->Render(); ?>

<?php require(__INCLUDES__ . '/footer.inc.php'); ?>