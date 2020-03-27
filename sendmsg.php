<?php 
	// Ket noi database, lay du lieu chung
	include 'includes/general.php';
	if(!$user) {
		header('Location: index.php'); // Di chuyen den file index.php
	}
	// Khai bao cac bien gan voi du lieu nhan duoc
	$body_msg = @mysqli_real_escape_string($cn, $_POST['body_msg']);
	// Xu ly chuoi $body_msg
	$body_msg = htmlentities($body_msg);
	$body_msg = trim($body_msg);

	// Neu $body_msg khac rong
	if($body_msg != '') {
		// Thuc thi gui tin nhan
		$sql_send_msg = mysqli_query($cn, "INSERT INTO messages VALUES (
			'',
			'$body_msg',
			'$user',
			'$date_current'
		)");
	}
?>