// Phần js của trang đăng nhập.

// onblur
function validatorEmail(){
	let x = document.querySelector('#Email');
	let y = document.querySelector('#alert-email');
	if(x.value.length == 0){
		y.innerHTML = "Trường này là bắt buộc";
	}else if(x.value.length <= 6){
		y.innerHTML = "Vui lòng nhập lớn hơn 6 kí tự";
	}else{
		y.innerHTML = "";

		ValidateEmail(x.value);
	}
}

function validatorPass(){
	let x = document.querySelector('#Pass-validator');
	let y = document.querySelector('#alert-pass');
	if(x.value.length == 0){
		y.innerHTML = "Trường này là bắt buộc";
	}else if(x.value.length <= 6){
		y.innerHTML = "Vui lòng nhập lớn hơn 6 kí tự";
	}else{
		y.innerHTML = "";
	}
}

function validatorRepass(){
	let x = document.querySelector('#Repass-validator');
	let y = document.querySelector('#alert-repass');
	let z = document.querySelector('#Pass-validator');
	if(x.value.length == 0){
		y.innerHTML = "Trường này là bắt buộc";
	}else if(x.value.length <= 6){
		y.innerHTML = "Vui lòng nhập lớn hơn 6 kí tự";
	}else if(x.value != z.value){
		y.innerHTML = "Mật khẩu nhập lại không chính xác";
	}else{
		y.innerHTML = "";
	}
}

function validatorLname(){
	let x = document.querySelector('#lname');
	// let lname = document.getElementsByClassName('input-lname')[0];
	let y = document.querySelector('#alert-lname');
	if(x.value.length == 0){
		y.innerHTML = "Trường này là bắt buộc";
	}else if(x.value.length < 2){
		y.innerHTML = "Họ hoặc tên không hợp lệ";
	}else{
		y.innerHTML = "";
	}
}

function validatorFname(){
	let x = document.querySelector('#fname');
	let y = document.querySelector('#alert-fname');
	if(x.value.length == 0){
		y.innerHTML = "Trường này là bắt buộc";
	}else if(x.value.length < 2){
		y.innerHTML = "Họ hoặc tên không hợp lệ";
	}else{
		y.innerHTML = "";
	}
}

//onfocus 
// Valid email
function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true)
  }
  	document.querySelector('#alert-email').innerHTML = "Email không hợp lệ !";
    return (false)
}

document.querySelector('#Email').addEventListener("focus",function(){
	let x = document.querySelector('#alert-email');
	x.innerHTML = "";
	})
document.querySelector('#Pass-validator').addEventListener("focus",function(){
	let x = document.querySelector('#alert-pass');
	x.innerHTML = "";
	})
document.querySelector('#Repass-validator').addEventListener("focus",function(){
	let x = document.querySelector('#alert-repass');
	x.innerHTML = "";
	})