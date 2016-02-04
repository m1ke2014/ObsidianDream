<?php
// Currently doe NO CHECKING AT ALL.
// Allows ANY input to trigger access to the main site
	session_start();
	$_SESSION['userid'] = 'testuser';
	header("Location: index.php");
?>