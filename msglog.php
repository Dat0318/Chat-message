<?php 
	// Ket noi database de lay du lieu chung
include 'includes/general.php';
if(!$user) {
		header('Location: index.php'); // Di chuyen den file index.php
	}
// Lay du lieu tu table messages theo thu tu id_msg tang dan
$query_get_msg = mysqli_query($cn, "SELECT * FROM messages ORDER BY id_msg ASC");

// Dung vong lap while de lay du lieu
while ($row = mysqli_fetch_assoc($query_get_msg)) {
	// Thoi gian gui tin nhan
	$data_sent = $row['date_sent'];
	$day_sent = substr($data_sent, 8, 2); // Ngay gui
	$month_sent = substr($data_sent, 5, 2); // Thang gui
	$year_sent = substr($data_sent, 0, 4);	// nam gui
	$hour_sent = substr($data_sent, 11, 2); // Gio gui
	$min_sent = substr($data_sent, 14, 2); // Phut gui
	// Neu nguoi gui la $user thi hien thi khung tin nhan mau xanh
	if ( $row['user_from'] == $user) {
		echo '
			<div class="msg-user">
				<p>'.$row['body'].'</p>
				<div class="info-msg-user">
					Ban - '.$day_sent.'/'.$month_sent.'/'.$year_sent.' luc '.$hour_sent.' : '.$min_sent.'
				</div>
			</div>
		';
	}
	// Nguoc lai nguoi gui khong phai la $user thi hien thi khung tin nhan mau xam
	else {
		echo '
			<div class="msg">
				<p>'.$row['body'].'</p>
				<div class="info-msg">
					'.$row['user_form'].' - ' .$day_sent.' / '.$month_sent.' / ' .$year_sent.' luc ' . $hour_sent.' : '.$min_sent.'
				</div>
			</div>
		';
	}
}
?>

