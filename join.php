<?php 
	// Ket noi database, lay du lieu chung
	include 'includes/general.php';
	if( $user) {
		header('Location: index.php'); // Di chuyen den file index.php
	}
	// Khai bao cac bien nhan du lieu
	$username = @mysqli_real_escape_string($cn, $_POST['username']);
	$password = @mysqli_real_escape_string($cn, $_POST['password']);

	// Cac bien hien thi thong bao
	$show_alert = '<script>$("#formJoin .alert").show();</script>'; // Hien thi thong bao loi
	$hide_alert = '<script>$("#formJoin .alert").hide();</script>'; // An thong bao loi
	$success_alert = '<script>$("#formJoin .alert").attr("class", "alert success");</script>'; // Thong bao thanh cong

	// Kiem tra neu co ton tai User
	$query_check_exists_user = mysqli_query($cn , "SELECT * FROM users WHERE username = '$username' ");

	// Neu username hay password trong
	if($username == '' ||  $password == '') {
		echo $show_alert.'Vui long dien day du thong tin ben tren.'; // Thong bao
	}
	// Nguoc lai thi thuc thi dang ky
	else {
		if (strlen($username) < 6 || strlen($username) > 40) {
			echo $show_alert.'ten dang nhap phai trong khoang 6 den 40 ky tu.'; // Thong bao
		}
		// Neu username chua khoang trang hoac ky tu dac biet
		else if (preg_match('/\W/', $username)) {
			echo $show_alert.'ten dang nhap khong chua khoang trang va ky tu dac biet'; // Thong bao
		}
		// Neu do dai password < 6
		else if (strlen($password < 6)) {
			echo $show_alert.'mat khau cua ban qua ngan hay thu lai voi mat khau khac an toan hon.'; // Thong bao
		}
		// Khong mac phai cac loi tren thi insert vao table
		else {
			$password = md5($password); // ma hoa password sang md5
			// Them thong tin nguoi dung vao table users
			$query_create_user = mysqli_query($cn, "INSERT INTO users VALUES (
				'',
				'$username',
				'$password',
				'$date_current'
			)");
			echo $show_alert . $success_alert.'Dang ky tai khoan thanh cong.'; // Thong bao
			$_SESSION["username"] = $username; // Luu session gia tri username
			echo '<script>window.location.reload();</script>'; // Tai lai trang
		}
	}

?>