<?php

require 'functions.php';

if (isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo "<script> 
		alert('Registrasi Berhasil');
		document.location.href = 'login.php';
		</script>";
	} else {
		echo "<script>
		alert('Registrasi Gagal');
		</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- my css -->
	<link rel="stylesheet" href="../css/style.css">
	<!-- my icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body class="con-login">
	<div class="container">
		<div class="shadow p-5 mb-5 bg-white rounded" id="bg-login">
			<form action="" method="post">
				<h1 class="text-center mb-4">Registrasi Akun</h1>

				<label for="username" class="form-label">Username</label>
				<input type="text" class="form-control mb-3" name="username">

				<label for="password" class="form-label">Password</label>
				<input type="password" class="form-control mb-3" name="password">
				<button type="submit" class="btn btn-info btn-block" name="register">Register</button>
			</form>
		</div>
	</div>
</body>

</html>