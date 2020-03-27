// Ham gui tin nhan
function sendMsg () {
	// Khai bao cac bien trong form
	$body_msg = $('#formSendMsg input[type="text"]').val();

	// Gui du lieu
	$.ajax ({
		url : 'sendmsg.php', // Duong dan file xu ly
		type : 'POST', // Phuong thuc
		// Du lieu
		data : {
			body_msg : $body_msg
			// Thuc thi khi gui du lieu thanh cong
		}, success: function() {
			$('#formSendMsg input[type="text"]').val(); // Lam trong thanh tro truyen
		}
	});
}

// Bat su kien go phim enter trong thanh tro chuyen

$('#formSendMsg input[type="text"]').keypress(function() {
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if (keycode == '13') {
		// Chay ham gui tin nhan
		sendMsg();
	}
});

// Bat su kien click vao thanh tro chuyen
$('#formSendMsg input[type="text"]').click(function (e) {
	// Keo het thanh cuon trinh duyet den cuoi
	window.scrollBy(0, $(document).height());
});