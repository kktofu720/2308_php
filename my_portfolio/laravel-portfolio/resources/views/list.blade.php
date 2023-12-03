@extends('layout.layout1')

@section('title', 'List')

@section('main')
<div id="b_content_wrap">
    <div id="b_primary" class="b_content-area">
        <main id="b_main" class="b_site-main">
            <article class="b_post-113726 b_page b_type-page b_status-publish b_hentry">
                <div class="b_entry-content">
                    <div class="b_sub_header b_sub_bg05">
                        <div>
                            <p class="b_company">PAIK'S COFFEE</p>
                            <p class="b_sub_tit">
                                고객의 소리
                            </p>
                            <p class="b_caption">
                                빽다방에 전하고 싶은 불만, 칭찬을 보내주세요.
                                <br>
                                항상 고객의 소리에 귀 기울이며 고객만족 향상을 위해 노력하겠습니다.
                            </p>
                        </div>
                    </div>
                    <div class="b_section_wrap">
                        <div class="b_tabMenu">
                            <ul class="b_cols_01">
                                <li>
                                    <a href="" class="b_on">
                                        고객의 소리
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="b_section">
                            <div class="b_location">
                                <ul>
                                    <li><img src="" alt=""></li>
                                    <li>고객센터</li>
                                    <li>고객의 소리</li>
                                </ul>
                            </div>
                            <div class="b_ft_info">
                                <div class="b_ft_form">
                                    <p class="b_desc_h4">고객의 소리</p>
                                    <p>빽다방에 전하고 싶은 불만, 칭찬을 보내주세요. 항상 고객님들의 목소리에 귀 기울이겠습니다.</p>
                                    <form method="POST" id="customer_form" enctype="multipart/form-data" action="">
                                        @csrf
                                        <input type="hidden" name="erp_code" id="ttms_code">
                                        <input type="hidden" name="ttms_code" id="ttms_code">
                                        <div class="b_form">
                                            <div class="b_form_input">
                                                <div>
                                                    <label for="">
                                                        <p>
                                                            이용경로
                                                            <span class="b_required">*</span>
                                                        </p>
                                                    </label>
                                                    <div class="b_eval">
                                                        <label for="visit">
                                                            <input type="radio" name="form_route" value="매장방문" id="visit" checked>
                                                            <span>매장방문</span>
                                                        </label>
                                                        <label for="no_visit">
                                                            <input type="radio" name="form_route" value="매장방문 외" id="no_visit">
                                                            <span>매장방문 외</span>
                                                        </label>
                                                        <div class="b_visit_form" style="display: block;">
                                                            <div>
                                                                <label class="b_col2_form" for="visit_day"></label>
                                                                <input type="text" name="visit_day" id="visit_day" value placeholder="연도-월-일" class="b_hasDatepicker">
                                                            </div>
                                                            <div>
                                                                <label class="b_col2_form" for="pay_time">
                                                                    <span>결제시간</span>
                                                                </label>
                                                                <input type="text" name="pay_time" id="pay_time" value>
                                                                <select class="b_none-css" name="form_pay_time" id="form_pay_time" style="height: 34px !important;">
                                                                    <option value>직접입력</option>
                                                                </select>
                                                            </div>
                                                            <div>
                                                                <label class="b_col2_form" for="order_menu"></label>
                                                                <input type="text" name="order_menu" id="order_menu" value>
                                                            </div>
                                                        </div>
                                                        <div class="b_no_visit_form" style="display: block;">
                                                            <div>
                                                                <select class="b_none-css" name="no_visit" id="no_visit_select" style="height: 34px !important;">
                                                                    <option value="">선택</option>
                                                                    <option value="배달">배달</option>
                                                                    <option value="포장">포장</option>
                                                                </select>
                                                            </div>
                                                            <div>
                                                                <label class="b_col2_form" for="order_day">
                                                                    <span>주문일</span>
                                                                    <input type="text" name="order_day" id="order_day" value="" placeholder="연도-월-일" class="b_hasDatepicker">
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <label class="b_col2_form" for="pay_time2">
                                                                    <span>결제시간</span>
                                                                </label>
                                                                <input type="text" name="pay_time2" id="pay_time2">
                                                                <select class="b_none-css" name="form_pay_time2" id="form_pay_time2" style="height: 34px !important;">
                                                                    <option value="">직접입력</option>
                                                                </select>
                                                            </div>
                                                            <div>
                                                                <label class="b_col2_form" for="order_menu2"></label>
                                                                <input type="text" name="order_menu2" id="order_menu2" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="">
                                                        <p>
                                                            답변 알림 서비스
                                                            <span class="b_required">*</span>
                                                        </p>
                                                    </label>
                                                    <div>
                                                        <div class="b_opt_wrap">
                                                            <label for="no_alim">
                                                                <input type="radio" name="form_alim" id="no_alim" value="받지않음">
                                                                <span>받지않음</span>
                                                            </label>
                                                            <label for="sms_alim">
                                                                <input type="radio" name="form_alim" id="sms_alim" value="문자 답변">
                                                                <span>문자 답변</span>
                                                            </label>
                                                        </div>
                                                        <div class="b_opt_wrap">
                                                            <label for="em_alim">
                                                                <input type="radio" name="form_alim" id="em_alim" value="이메일 답변">
                                                                <span>이메일 답변</span>
                                                            </label>
                                                            <label for="hp_alim">
                                                                <input type="radio" name="form_alim" id="hp_alim" value="전화 답변">
                                                                <span>전화 답변</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <p class="b_to_top" style="display: block;"></p>
                        </div>
                    </div>
                </div>
            </article>
        </main>
    </div>
</div>
@endsection