<?php
require 'database.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="./img/logoC.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./register.css">
	<script type="text/javascript" src="./CheckForm.js"></script>
</head>
<body>
<div class="login">
		<div class="title-head">
			<h1>Đăng nhập tài khoản</h1>
		</div>
		<div class="form">
			<form method="post" id="register">
            <div class="first-name">
					<input class="form-input" placeholder=" " id="fname" type="text" name="ad_name" onblur="validatorFname()">
					<label class="form-label" for="">Tên<span style="color: red;">*</span></label>
					<span class="alert" id="alert-fname"></span>
				</div>
				<div class="pass">
					<input class="form-input" placeholder=" " id="Pass-validator" type="password" name="pass" onblur="validatorPass()">
					<label class="form-label" for="">Mật khẩu<span style="color: red;">*</span></label>
					<span class="alert" id="alert-pass"></span>
				</div>
				<div class="login-btn">
					<button class="btn-log" name="login" type="submit">Đăng nhập</button>
				</div>
			</form>
		</div>
	</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	
<?php
if (isset($_POST['login'])) {
    $ad_name = $_POST['ad_name'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM `admin` WHERE ad_name='$ad_name' AND pass='$pass'";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    // echo  $sql;
    // nếu sai mật khẩu hoặc email thì thoát ra
    if ($count == 0) {
        echo "<script>alert('Email hoặc mật khẩu của bạn sai')</script>";
        exit();
    } else {
        $_SESSION['ad_name'] = $ad_name;
        echo "<script>alert('Bạn đã đăng nhập thành công')</script>";
        // echo " Xin chào: " . $_SESSION['ad_name'] . "";
        echo "<script>window.open('./18-Admin_index.php','_self')</script>";
    }
}
?>

</body>
</html>