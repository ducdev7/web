<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <link rel="shortcut icon" href="./img/logoC.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./register.css">
</head>
<body>
	<div class="login">
		<div class="title-head">
			<h1>Đăng nhập tài khoản</h1>
		</div>
		<div class="form">
			<form method="post" id="register">
            <div class="first-name">
					<input class="form-input" placeholder=" " id="fname" type="text" name="name" onblur="validatorFname()">
					<label class="form-label" for="">Tên<span style="color: red;">*</span></label>
					<span class="alert" id="alert-fname"></span>
				</div>
				<div class="pass">
					<input class="form-input" placeholder=" " id="Pass-validator" type="password" name="password" onblur="validatorPass()">
					<label class="form-label" for="">Mật khẩu<span style="color: red;">*</span></label>
					<span class="alert" id="alert-pass"></span>
				</div>
				<div class="login-btn">
					<button class="btn-log" name="login" type="submit">Đăng nhập</button>
					<a href="./ForgotPass.php" class="forgot-pass">Quên mật khẩu ?</a>
				</div>
				<p class="no-acc">
					Bạn chưa có tài khoản ? đăng kí <a href="./Register.php">tại đây</a>
				</p>
			</form>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./CheckForm.js"></script>

    <?php
        if(isset($_POST['login'])) {
            require 'database.php';
            $userId = $_POST['name'];
            $password = $_POST['password'];
            $sql = "SELECT userId, password FROM users WHERE userId='$userId' AND password= $password";
            $result = $conn->query($sql);
            if($result->num_rows == 0) {
                echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng. Vui lòng kiểm tra lại')</script>";
                    exit;
            }// Lưu tên đăng nhập
            else {
            session_start();
            $_SESSION['userId'] = $userId;
            echo "<script>alert('Xin chào ${userId}')</script>";
            echo "<script>window.open('./1-ChaoS.php','_self')</script>";
            }
        } 
    ?>
</body>
</html>