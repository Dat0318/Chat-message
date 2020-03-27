// Ham gui du lieu
function Join() {
	// Khai bao cac bien du lieu trong form
	$username = $('#username').val();
	$password = $('#password').val();

	// Gui du lieu
	$.ajax({
		url: 'join.php', // Duong dan file xu ly
		type: 'POST', // Phuong thuc
		// Cac du lieu
		data: {
			username : $username,
			password : $password
			// Thuc thi khi gui du lieu thanh cong
		}, success: function(result) {
			$('#formJoin .btn-submit').html('Bat dau');
			$('#formJoin .alert').html(result);
		}
	});

}

// Bat su kien Click vao nut bat dau cua form
$('#formJoin .btn-submit').click(function () {
	$(this).html('Dang tai ...');
	// Thuc thi gui du lieu
	Join();
});