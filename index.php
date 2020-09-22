<?php
session_start();
if ( isset($_COOKIE['usr_lang']) AND $_COOKIE['usr_lang'] == 'en' ) {
	if (isset($_SESSION['page_location']) OR $_SESSION['page_location'] != "") {
		header('location:pages/en/'.$_SESSION['page_location']);
	}else{
		header('location:pages/en/index.php');
	}
}else{
	if (isset($_SESSION['page_location']) OR $_SESSION['page_location'] != "") {
		header('location:pages/fr/'.$_SESSION['page_location']);
	}else {
		header('location:pages/fr/index.php');
	}
}
?>