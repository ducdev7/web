<!DOCTYPE html>
<html>
<head>
	<title>Forgot password</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./register.css">
</head>
<body>
	<div class="login">
		<div class="title-head">
			<h1>Quên mật khẩu</h1>
		</div>
		<div class="social">
			<p class="social-text">Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email</p>
		</div>
		<div class="form">
			<form>
				<div class="email">
					<input class="form-input" placeholder=" " type="email" id="Email" onblur="validatorEmail()">
					<label class="form-label" for="">Email<span style="color: red;">*</span></label>
					<span class="alert" id="alert-email"></span>
				</div>
				<div class="login-btn">
					<button class="btn-log">Lấy lại mật khẩu</button>
				</div>
				<p class="no-acc">
					Quay lại <a href="./Login.php">tại đây</a>
				</p>
			</form>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./js/detail.js"></script>
</body>
</html>