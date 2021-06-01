let email = document.getElementById('email');
let password = document.getElementById('password');
let pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
let email_error = document.getElementById('email_error');
let pass_error = document.getElementById('pass_error');


function validated(){
	if (!email.value.match(pattern)) {
		email.style.border = "1px solid red";
		email_error.style.display = "block";
		email.focus();
		return false;
	}else{
		email.style.border = "1px solid silver";
		email_error.style.display = "none";
	}
	localStorage.setItem('email', email.value);

	 if (password.value != 'password') {
		password.style.border = "1px solid red";
		pass_error.style.display = "block";
		password.focus();
		return false;
	}
	else{
		password.style.border = "1px solid silver";
		pass_error.style.display = "none";
		return true;
	}
}
