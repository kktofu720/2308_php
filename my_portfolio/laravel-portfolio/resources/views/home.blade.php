@extends('layout.layout1')

@section('title', '짭다방')

@section('main')
	<div id="wrap">
		{{-- 메인 --}}
		<div id="content-wrap">
			<div class="content-area">
				<main class="site-main">
					<article>
						<div class="entry-content">
							<div class="main_visual_wrap swiper-container-horizontal swiper-container-wp8-horizontal">
								<div class="swiper-wrapper" style="transition-duration: 0ms; trasform: translate3d(-4077px, 0px, 0px);">
									<div class="swiper-slide swiper-slide-duplicate" style="width: 1359px;">
										<img src="../userimg/pop1" alt="">
									</div>
									<div>
										<img src="../userimg/pop2" alt="">
									</div>
									<div>
										<img src="../userimg/pop3" alt="">
									</div>
									<div>
										<img src="../userimg/pop4" alt="">
									</div>
									<div>
										<img src="../userimg/pop5" alt="">
									</div>
									<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
										<span class="swiper-pagination-bullet"></span>
										<span class="swiper-pagination-bullet"></span>
										<span class="swiper-pagination-bullet"></span>
										<span class="swiper-pagination-bullet"></span>
										<span class="swiper-pagination-bullet"></span>
									</div>
								</div>
							</div>
							<div class="main_section">
								<section class="main_sec1">
									<div class="left_wrap">
										<a href="">
											<dl>
												<dt>
													PALK'S COFFEE
													<br>
													STORY
												</dt>
												<dd>
													균형잡힌 바디감으로 긴 여운을 남기는 빽다방 커피를 만나보세요.
												</dd>
											</dl>
										</a>
										<a class="view_btn" href=""></a>
									</div>
									<div class="right_wrap">
										<a href="">
											<dl>
												<dt>
													PAIK'S BRAND
													<br>
													STORY
												</dt>
												<dd>
													합리적인 가격으로 만나는 맛있고 든든한 빽다방
												</dd>
											</dl>
										</a>
										<a href=""></a>
									</div>
								</section>
								<section class="main_sec2">
									<a href="">
										<dl class="main_tt">
											<dt>
												FRESH
												<br>
												COFFEE
											</dt>
											<dd>
												신선한 뉴크롭 원두를 사용하여
												<br>
												추출한 커피메뉴!
											</dd>
										</dl>
										<img src="../userimg/main_sec2.jpg" alt="sec2">
									</a>
									<a href=""></a>
								</section>
								<section class="main_sec3">
									<div class="left_wrap">
										<a href="">
											<dl class="main_tt">
												<dt>
													VARIOUS
													<br>
													BEVERAGE
												</dt>
												<dd>
													에이드, 티, 주스 등 취향대로
													<br>
													골라 먹는 즐거움!
												</dd>
											</dl>
											<img src="../userimg/main_sec3_l.jpg" alt="sec3-left">
										</a>
										<a href=""></a>
									</div>
									<div class="right_wrap">
										<a href="">
											<dl class="main_tt">
												<dt>
													SWEET
													<br>
													PAIK'S CCINO
												</dt>
												<dd>
													달콤한 아이스크림부터
													<br>
													든든한 브레드까지!
												</dd>
											</dl>
											<img src="../userimg/main_sec3_r.jpg" alt="sec3-right">
										</a>
										<a href=""></a>
									</div>
								</section>
								<section class="main_sec4">
									<div class="right_wrap">
										<a href="">
											<dl class="main_tt">
												<dt>
													TASTY
													<br>
													ICE CREAM /
													<br>
													DESSERT
												</dt>
												<dd></dd>
											</dl>
											<img src="../userimg/main_sec4.jpg" alt="sec4-right">
										</a>
										<a href=""></a>
									</div>
									<div class="left_wrap">
										<div class="store_bn">
											<dl>
												<dt>STORE</dt>
												<dd>원하시는 지역의 매장을 검색해보세요!</dd>
											</dl>
											<div class="store_search">
												<form action="">
													<input type="text" placeholder="Find a store in your area!">
													<button>
														<img src="" alt="">
													</button>
												</form>
											</div>
										</div>
										<div class="franchise_bn">
											<a href="">
												<dl>
													<dt>FRANCHISE</dt>
													<dd>빽다방 창업안내를 도와드리겠습니다.</dd>
												</dl>
											</a>
											<a href="">
												<span></span>
											</a>
										</div>
									</div>
								</section>
								<div class="main_sns">
									<dl class="sns_tt">
										<dt>PAIK'S COFFEE SNS</dt>
										<dd>
											<span>#빽다방</span>
											<span>#빽다방신메뉴</span>
											<span>#빽다방이벤트</span>
										</dd>
									</dl>
									<ul class="sns_icon">
										<li>
											<a href="https://ko-kr.facebook.com/ipaikscoffee/">
												<img src="../userimg/big-facebook.png" target="_blank" alt="">
											</a>
										</li>
										<li>
											<a href="https://www.instagram.com/paikscoffee_official/">
												<img src="../userimg/big-insta.png" target="_blank" alt="">
											</a>
										</li>
									</ul>
									<div class="feed_box">
										<ul> </ul>
									</div>
								</div>
							</div>

						</div>
						{{-- , entry-content --}}

						
					</article>
					{{-- #post-## --}}
				</main>
				{{-- .site-main --}}
			</div>
			{{-- .content-area --}}
			
		</div>
	</div>
@endsection