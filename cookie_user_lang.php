<?php
session_start();
if (isset($_POST['lang_page'])) {
	$_SESSION['page_location'] = "";
	if (isset($_POST['page_location'])) {
		$_SESSION['page_location'] = $_POST['page_location'];
	}
	setcookie('usr_lang', $_POST['lang_page'], time() + 3600 * 24 * 365, null, null, false, true);
	header('location:index.php');
}
?>