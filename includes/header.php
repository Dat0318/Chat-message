<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Kết nối thư viện Font Awesome Icons -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		// Neu ton tai $user
		if ($user) {
			// Hien thi menu
			echo '<div class="main-menu">
							<h1><i class="fa fa-commenting"></i> Messenger</h1>
							<a href="logout.php"><i class="fa fa-sign-out"></i></a>
						</div>
						<div class="clearfix"></div>';
		}
		// Nguoc lai
		else {
			// Hien thi navbar
			echo '
				<div class="main-navbar">
					<h1><i class="fa fa-commenting"></i> Messenger</h1>
				</div><!-- div.main-header -->
			';
		}
	?>

