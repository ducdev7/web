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
			<h1>Đăng kí tài khoản</h1>
		</div>
		<div class="form">
			<form method="post" id="register">
				<div class="last-name">
					<input class="form-input input-lname" placeholder=" " type="text" id="lname" name="Last name" onblur="validatorLname()">
					<label class="form-label" for="">Họ<span style="color: red;">*</span></label>
					<span class="alert" id="alert-lname"></span>
				</div>
				<div class="first-name">
					<input class="form-input" placeholder=" " id="fname" type="text" name="name" onblur="validatorFname()">
					<label class="form-label" for="">Tên<span style="color: red;">*</span></label>
					<span class="alert" id="alert-fname"></span>
				</div>
				<div class="email">
					<input class="form-input" placeholder=" " type="email" id="Email" name="email" onblur="validatorEmail()">
					<label class="form-label" for="">Email<span style="color: red;">*</span></label>
					<span class="alert" id="alert-email"></span>
				</div>
				<div class="pass">
					<input class="form-input" placeholder=" " id="Pass-validator" type="password" name="password" onblur="validatorPass()">
					<label class="form-label" for="">Mật khẩu<span style="color: red;">*</span></label>
					<span class="alert" id="alert-pass"></span>
				</div>
				<div class="repass">
					<input class="form-input" placeholder=" " id="Repass-validator" type="password" name="repass" onblur="validatorRepass()">
					<label class="form-label" for="">Nhập lại mật khẩu<span style="color: red;">*</span></label>
					<span class="alert" id="alert-repass"></span>
				</div>
				<div class="register-btn">
					<button class="btn-reg" name="register" type="submit">Đăng kí</button>
					<a href="./Login.php">Đăng nhập</a>
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
        if (isset($_POST['register'])) {
            require 'database.php';
            $userId = $_POST['name'];
            $password = $_POST['password'];
			$email = $_POST['email'];
            if(!$userId || !$password || !$email ) {
				echo "<script>alert('Vui lòng nhập đầy đủ thông tin đăng ký')</script>";
            } 
            else { // kiểm tra tên đăng nhập đã đăng ký hay chưa
                $sql = "SELECT userId FROM users WHERE userId = '$userId'";
                $result = $conn->query($sql); // chạy truy vấn, lưu kq vào result
                if ($result->num_rows == 0) { // nếu như không bị trùng sẽ tiếp tục đăng ký
                    $sql = "INSERT INTO users (userId, password, email) VALUES ('$userId', '$password', '$email')";
                    $result = $conn->query($sql);
                    if ($result != 0) {
						echo "<script>alert('Xin chào ${userId}. Bạn đã đăng ký tài khoản thành công')</script>";
						echo "<script>window.open('./Login.php','_self')</script>";
                    }
                    else {
						echo "<script>alert('Có lỗi xảy ra trong quá trình đăng ký')</script>";
                    }
                }
                else {
					echo "<script>alert('Tên đăng nhập đã tồn tại. Vui lòng chọn tên đăng nhập khác')</script>";
                }
            }
        }
    ?>

</body>
</html>