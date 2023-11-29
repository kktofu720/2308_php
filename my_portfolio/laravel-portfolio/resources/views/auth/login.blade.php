<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/login.css">
	<title>로그인</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="#">
				<h1>회원가입</h1>
		{{-- <div class="social-container">
			<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
			<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
			<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
		</div>
		<span>or use your email for registration</span> --}}
				<input type="text" placeholder="Name" />
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
				<button class="btn_res">회원가입</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="#">
				<h1>로그인</h1>
		{{-- <div class="social-container">
			<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
			<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
			<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
		</div>
		<span>or use your account</span> --}}
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
		{{-- <a href="#">Forgot your password?</a> --}}
				<button class="btn_log">로그인</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<div class="paik_div"><img src="../userimg/paik.png" alt=""></div>
					<h1>Welcome Back!</h1>
					<p>
						빽다방에 오신 것을 환영합니다.
					</p>
					<button class="ghost1" id="signIn">로그인</button>
				</div>
				<div class="overlay-panel overlay-right">
					{{-- <img src="../userimg/logo-2.png" alt=""> --}}
					<div class="paik_div"><img src="../userimg/paik.png" alt=""></div>
					<h1>Hello, Friend!</h1>
					<p>가입을 통해 더 다양한 서비스를 만나보세요.</p>
					<button class="ghost2" id="signUp">회원가입</button>
					{{-- onclick="location.href=''" --}}
				</div>
			</div>
		</div>
	</div>
<script src="../js/login.js"></script>
</body>
</html>