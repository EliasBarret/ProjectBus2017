<?php

	if($_GET["act"]=="logout"){
	session_destroy();
	header("location:../index.php");
	exit;
	}

?>