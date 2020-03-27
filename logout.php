<?php 
	// Bat dau session //
	session_start();
	// Xoa session
	session_destroy();
	// di chuyen den trang index.php
	header('Location: index.php');
?>