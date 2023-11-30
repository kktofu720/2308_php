@extends('layout.layout2')

@section('title', 'Login')

@section('main')
<div class="container" id="container">
		{{-- <div class="form-container sign-up-container">
			<form method="POST" action="" class="form" id="form1">
				@include('layout.errorlayout')
				@csrf
				<a href="/home"><img class="home_img" src="../userimg/home.png" alt=""></a>
				<h1>회원가입</h1>
				<input type="text" placeholder="Name" />
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
				<button type="submit" class="btn_res">회원가입</button>
			</form>
		</div> --}}
		<div class="form-container sign-in-container">
			<form method="POST" action="{{route('member.login.post')}}" class="form" id="form2">
				@include('layout.errorlayout')
				@csrf
				<a href="/home"><img class="home_img" src="../userimg/home.png" alt=""></a>
				<h1>로그인</h1>
				<input type="email" name="email" placeholder="Email" />
				<input type="password" name="password" placeholder="Password" />
		{{-- <a href="#">Forgot your password?</a> --}}
				<button type="submit" class="btn_log">로그인</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				{{-- <div class="overlay-panel overlay-left">
					<div class="paik_div"><img src="../userimg/paik.png" alt=""></div>
					<h1>Welcome Back!</h1>
					<p>빽다방에 오신 것을 환영합니다.</p>
					<button class="ghost1" id="signIn">로그인</button>
				</div> --}}
				<div class="overlay-panel overlay-right">
					{{-- <img src="../userimg/logo-2.png" alt=""> --}}
					<div class="paik_div"><img src="../userimg/paik.png" alt=""></div>
					<h1>Hello, Friend!</h1>
					<p>가입을 통해 더 다양한 서비스를 만나보세요.</p>
					<button class="ghost2" id="signUp" onclick="location.href='/member/registration'">회원가입</button>
					{{-- onclick="location.href='/member/registration'" --}}
				</div>
			</div>
		</div>
	</div>
	{{-- <script src="../js/login.js"></script> --}}
@endsection