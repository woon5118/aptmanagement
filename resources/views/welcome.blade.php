<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
		<link href="/css/login.css" rel="stylesheet">
		<script src="/js/jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <div class="container">
			<div class="screen">
				<div class="screen__content">
					<form class="login" name="l_form" id="l_form" action="/login/auth" method="POST">
					@csrf
						<div class="login__field">
							<i class="login__icon fas fa-user"></i>
							<input type="text" class="login__input" name="username" placeholder="User name / Email">
						</div>
						<div class="login__field">
							<i class="login__icon fas fa-lock"></i>
							<input type="password" class="login__input" name="userpass"  placeholder="Password">
						</div>
						<button class="button login__submit" type="button" onclick="validation();">
							<span class="button__text">Log In Now</span>
							<i class="button__icon fas fa-chevron-right"></i>
						</button>				
					</form>
					<div class="social-login">
						<h3>Building Master</h3>
						<div class="social-icons">
							<a href="#" class="social-login__icon fab fa-instagram"></a>
							<a href="#" class="social-login__icon fab fa-facebook"></a>
							<a href="#" class="social-login__icon fab fa-twitter"></a>
						</div>
					</div>
				</div>
				<div class="screen__background">
					<span class="screen__background__shape screen__background__shape4"></span>
					<span class="screen__background__shape screen__background__shape3"></span>		
					<span class="screen__background__shape screen__background__shape2"></span>
					<span class="screen__background__shape screen__background__shape1"></span>
				</div>		
			</div>
		</div>
    </body>
</html>
<script>
function validation()
{
	var usrname = $("[name=username]").val();
	if( usrname == '' ){
		alert("사용자 아이디를 입력해주세요.");
		return false;
	}

	var userpass = $("[name=userpass]").val();
	if( userpass == '' ){
		alert("비밀번호를 입력해주세요.");
		return false;
	}

	$("#l_form").submit();
}
</script>