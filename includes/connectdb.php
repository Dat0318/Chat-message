<?php 
	$namehost = 'localhost';
	$userhost = 'root';
	$password = '';
	$database = 'messenger';
	// lenh ket noi database
	$cn = mysqli_connect($namehost, $userhost, $password, $database);

	// Neu ket noi database that bai se thong bao loi
	if (!$cn) {
		echo "Could not connect to database";
	}
	
?>