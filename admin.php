<?php
ob_start();
?>


This is the Administrators page

<?php
	$page_content = ob_get_contents();
	ob_clean();
	include("masterpage2.php");
?>