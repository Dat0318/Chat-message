<?php 
	// Bat dau luu session
	session_start();
	// Neu ton tai session
	if(isset($_SESSION['username'])) {
		// gan $user = session
		$user = $_SESSION['username'];
	}
	// Nguoc lai
	else {
		// $user rong
		$user = ''; 
	}

	// Ket noi voi file connectdb.php
	include ('connectdb.php');
	// Lay mui gio chung cho site
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date_current = '';
	$date_current = date("Y-m-d H:i:sa");

	// Create Session
	
?>