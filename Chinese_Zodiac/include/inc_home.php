<div class = "header">
	<?php include("include/inc_header.php"); ?>
</div>
<div class = "textNav">
	<?php include("include/inc_text_links.php"); ?>
</div>
<div class = "buttonNav">
	<?php include("include/inc_button_nav.php"); ?>
</div>
<div class = "dynamicCont">
	<?php
	include("include/inc_home_links_bar.php");

	if (isset($_GET['section'])) {
		if ($_GET['section'] == 'zodiac') {
			include('include/inc_chinese_zodiac.php');
		} else {
			include('include/inc_php_info.php');
		}
	}
	?>
</div>
<div class = "footer"><footer>
	<?php include("include/inc_footer.php"); ?>
</footer></div>