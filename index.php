<?php 
	// ket noi database, lay du lieu chung
	include 'includes/connectdb.php';
	// Ket noi database
	include 'includes/general.php';
	// Ket noi header
	include 'includes/header.php';

	// Neu ton tai $user
	if ($user) {
		// Hien thi tro chuyen
		echo '
			<div class="main-chat">
			</div><!-- div.main-chat -->
			<div class="chat-box">
				<form method="POST" id="formSendMsg" onsubmit="return false;">
					<input type="text" placeholder="Nhap noi dung tin nhan ... ">
				</form><!-- form#formSendMsg -->
			</div><!-- div.chat-box -->
		';
	}
	// Nguoc lai 
	else {
		// Hien thi form dang nhap, dang ky
		echo '
			<div class="box-join">
				<p>Tao tai khoan hoac dang nhap de tham gia voi chung toi</p>
				<form method="POST" id="formJoin" onsubmit="return false;">
					<input type="text" placeholder="Ten dang nhap" class="data-input" id="username">
					<input type="password" placeholder="Mat khau" class="data-input" id="password">
					<button class="btn-submit">Bat Dau</button>
					<div class="alert danger"></div>
				</form><!-- form#formJoin -->	
			</div><!-- div.box-join -->
		';
	}

	// Ket noi footer
	include 'includes/footer.php';
?>