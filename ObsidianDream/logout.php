<?php
	session_start();
	if(isset($_SESSION['userid']) == True)
	{	unset($_SESSION['userid']);
	}
	header("Location: index.php");
?>