@extends('layout.layout3')

@section('title', 'Registration')

@section('main')
<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form method="POST" action="" class="form" id="form1">
				@csrf
				<a href="/home"><img class="home_img" src="../userimg/home.png" alt=""></a>
				<h1>회원가입</h1>
				<input type="text" placeholder="Name" />
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
				<button class="btn_res">회원가입</button>
			</form>
		</div>
		{{-- <div class="form-container sign-in-container">
			<form action="#">
				<a href="/home"><img class="home_img" src="../userimg/home.png" alt=""></a>
				<h1>로그인</h1>
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
				<button class="btn_log">로그인</button>
			</form>
		</div> --}}
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<div class="paik_div"><img src="../userimg/paik.png" alt=""></div>
					<h1>Welcome Back!</h1>
					<p>빽다방에 오신 것을 환영합니다.</p>
					<button class="ghost1" id="signIn" onclick="location.href='/member/login'">로그인</button>
				</div>
				{{-- <div class="overlay-panel overlay-right">
					<div class="paik_div"><img src="../userimg/paik.png" alt=""></div>
					<h1>Hello, Friend!</h1>
					<p>가입을 통해 더 다양한 서비스를 만나보세요.</p>
					<button class="ghost2" id="signUp">회원가입</button>
				</div> --}}
			</div>
		</div>
	</div>
	{{-- <script src="../js/login.js"></script> --}}
@endsection