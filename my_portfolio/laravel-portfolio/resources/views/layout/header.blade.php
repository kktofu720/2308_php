<header id="header">
	<div class="in_header">
		<div class="sub_bg"></div>
		<div class="container">
			<ul class="topbar">
				<li><a href="https://www.theborn.co.kr/" target="_blank">더본코리아</a></li>
				@guest
				<li><a href="{{route('member.login.get')}}">멤버십 로그인</a></li>
				<li><a href="{{route('member.registration.get')}}">멤버십 가입</a></li>
				@endguest

				@auth
				<span>{{auth() -> user() -> name}} 님</span>
				<li><a href="{{route('member.logout.get')}}">로그아웃</a></li>
				@endauth
				<li class="sns f">
					<a href="https://ko-kr.facebook.com/ipaikscoffee/" target="_blank">facebook</a>
				</li>
				<li class="sns i">
					<a href="https://www.instagram.com/paikscoffee_official/" target="_blank">instagram</a>
				</li>
			</ul>
			<div class="nav_wrap">
				<a class="logo" href="">
					<img class="logo_img" src="../userimg/logo.png" alt="">
				</a>
				<div class="nav">
					<ul class="navbar">
						<li>
							<a href="">빽다방</a>
							<ul class="sub-menu">
								<li><a href="">CEO 인사말</a></li>
								<li><a href="">빽다방 소개</a></li>
								<li><a href="">멤버십/앱 소개</a></li>
								<li><a href="">커피 이야기</a></li>
								<li><a href="">교육 이야기</a></li>
							</ul>
						</li>
						<li>
							<a href="">메뉴</a>
							<ul class="sub-menu">
								<li><a href="">신메뉴</a></li>
								<li><a href="">커피</a></li>
								<li><a href="">음료</a></li>
								<li><a href="">아이스크림/디저트</a></li>
								<li><a href="">빽스치노</a></li>
							</ul>
						</li>
						<li>
							<a href="">소식</a>
							<ul class="sub-menu">
								<li><a href="">소식</a></li>
								<li><a href="">이벤트</a></li>
								<li><a href="">친절 우수매장</a></li>
							</ul>
						</li>
						<li>
							<a href="">커뮤니티</a>
							<ul class="sub-menu">
								<li><a href="">커피 클래스</a></li>
							</ul>
						</li>
						<li>
							<a href="">매장안내</a>
							<ul class="sub-menu">
								<li><a href="">매장찾기</a></li>
							</ul>
						</li>
						<li>
							<a href="">창업안내</a>
							<ul class="sub-menu">
								<li><a href="">왜 빽다방인가요?</a></li>
								<li><a href="">창업상담 신청</a></li>
								<li><a href="">창업절차 및 조건</a></li>
								<li><a href="">인테리어</a></li>
							</ul>
						</li>
						<li><a href="">고객의 소리</a></li>
					</ul>
				</div>
			</div>    
		</div>
	</div>
</header>