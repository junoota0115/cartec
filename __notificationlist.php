	<div class="notification_list">
<?php for ($i=0; $i<$MAX_NOTICE_DATA; $i++) { ?>
		<div class="notice_data">
			<div class="dara_row1">
				<span>2023.</span>
			</div>
			<div class="dara_row2">
				<span>10.10</span>
				<span>イベントのお知らせイベントのお知らせ</span>
			</div>
		</div>
<?php } ?>
	</div>
	<div class="paging_area">
<?php
if ($PAGE>1) {
	echo '<span class="prev">&lt;</span>';
}
for ($i=1; $i<=$MAX_PAGE; $i++) {
	if ($i==$PAGE) {
		echo '<span class="current">' . $i . '</span>';
	} else {
		echo '<span>' . $i . '</span>';
	}
}
if ($PAGE<$MAX_PAGE) {
	echo '<span class="next">&gt;</span>';
}
?>
		<input type="hidden" id="page" value="<?=$PAGE?>">
	</div>
