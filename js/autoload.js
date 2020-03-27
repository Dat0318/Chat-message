$.ajaxSetup({cache:false});
// Thiet lap thoi gian thuc vong lap 1 giay
setInterval(function() {$('.main-chat').load('msglog.php');}, 1000);