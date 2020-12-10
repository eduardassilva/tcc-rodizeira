var loginRequired = 'admin';
var passwordRequired = '123';

var loginInput;
var passwordInput;

function Login(){
	
	loginInput = document.getElementById('login');
	passwordInput = document.getElementById('password');
	
//	if(loginInput.value == loginRequired && passwordInput.value == passwordRequired)
		window.location = "pageRestaurant.html";
	/*else{
		alert('Login ou Senha estão incorretos!');
		passwordInput.value = '';
	}*/
}