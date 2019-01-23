@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="active item"><img src="http://julienwaffle.com/wp-content/uploads/2017/05/003.jpg" class="img"></div>
                <div class="item"><img src="http://julienwaffle.com/wp-content/uploads/2017/05/003.jpg" class="img"></div>
                <div class="item"><img src="http://julienwaffle.com/wp-content/uploads/2016/11/mainbn033.jpg" class="img"></div>
            </div>

            <a class="carousel-control left" href="#carouselExampleIndicators" data-slide="prev"></a>
            <a class="carousel-control right" href="#carouselExampleIndicators" data-slide="next"></a>
        </div>
    </div>
</div>
 <!-- 팝업 -->
 {{-- <div class="popup" id="pop1">
    <img src="http://julienwaffle.com/wp-content/uploads/2018/09/%ED%99%88%ED%8E%98%EC%9D%B4%EC%A7%80-%ED%8C%9D%EC%97%85%EC%98%A4%ED%94%88%EC%A0%90-5.jpg">
    <button class="popup_delete">제거</button>
</div>

<div class="popup" id="pop2">
    <img src="http://julienwaffle.com/wp-content/uploads/2018/07/%EC%83%B5%EC%9D%B8%EC%83%B54.jpg">
    <button class="popup_delete">제거</button>
</div>

<div class="popup" id="pop3">
    <img src="http://julienwaffle.com/wp-content/uploads/2018/10/%ED%8C%9D%EC%97%85-10.jpg">
    <button class="popup_delete">제거</button>
</div> --}}
@include('popup');
<div class="container" style="width:1000px;">
    <!-- 첫번째 라인 -->
    <div class="row" style="margin-top:2%;">
        <div class="col-sm-4">
            <p><b>Franchise</b></p>
            <img src="http://julienwaffle.com/wp-content/uploads/2016/05/web-fran.jpg" class="image">
            {{-- <div class="middle">
                <img src="/img/imghover.png" width="50%">
            </div> --}}
        </div>
        <div class="col-sm-4">
            <p><b>Best Menu</b></p>
            <p>줄리앙와플 베스트 메뉴를 소개합니다.</p>
            <div class="row">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="active item"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/%EC%83%9D%ED%81%AC%EB%A6%BC%EB%94%B8%EA%B8%B0-.jpg" class="img"></div>
                            <div class="item"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/%EB%94%B8%EA%B8%B0%EC%8A%A4%EB%AC%B4%EB%94%94-.jpg" class="img"></div>
                            <div class="item"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/%EB%B0%94%EB%8B%90%EB%9D%BC%EC%BB%A4%ED%94%BC-.jpg" class="img"></div>
                            <div class="item"><img src="http://julienwaffle.com/wp-content/uploads/2016/05/%EC%B9%B4%EB%9D%BC%EB%A9%9C%EC%B4%88%EC%BD%94-.jpg" class="img"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <p><b>Store</b></p>
            <p>전국 줄리앙와플 매장을 찾아보세요.</p>
            <form action="">
                <input type="text" class="col-md-8" name="keyword">
                <button class="col-sm-3">검색</button>
            </form>
            <div class="row">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <p><b>신규오픈매장</b></p>
                        <!-- <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol> -->

                        <div class="carousel-inner">
                            <div class="active item">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201809/5b9a28d0c781a6012634-235x151.jpg" class="img col-md-4">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201809/5b9a27d27b9112687395-235x151.jpg" class="img col-md-4">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201806/5b2cc1b3b14113923736-235x151.jpg" class="img col-md-4">
                            </div>
                            <div class="item">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201809/5b9a28d0c781a6012634-235x151.jpg" class="img col-md-4">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201809/5b9a27d27b9112687395-235x151.jpg" class="img col-md-4">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201806/5b2cc1b3b14113923736-235x151.jpg" class="img col-md-4">
                            </div>
                            <div class="item">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201809/5b9a28d0c781a6012634-235x151.jpg" class="img col-md-4">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201809/5b9a27d27b9112687395-235x151.jpg" class="img col-md-4">
                                <img src="http://julienwaffle.com/wp-content/uploads/kboard_thumbnails/2/201806/5b2cc1b3b14113923736-235x151.jpg" class="img col-md-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 두번째 라인 -->
    <div class="row" style="margin-top:5%;">
        <div class="col-sm-4">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/main_coffee-secret-1.png" class="image"></a>
            {{-- <div class="middle">
                <img src="/img/imghover.png" width="50%">
            </div> --}}
        </div>
        <div class="col-sm-4">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/메인하단-신규오픈2.jpg" class="image"></a>
            {{-- <div class="middle">
                <img src="/img/imghover.png" width="50%">
            </div> --}}
        </div>
        <div class="col-sm-4">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/main_success.jpg" class="image"></a>
            {{-- <div class="middle">
                <img src="/img/imghover.png" width="50%">
            </div> --}}
        </div>
    </div>

    <!-- 세번째 라인 -->
    <div class="row" style="margin-top:5%">
        <div class="col-sm-3">
            공지사항 NEWS
        </div>
        <div class="col-sm-3">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/main_mascot.png"></a>
        </div>
        <div class="col-sm-3">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/Group-4.png"></a>
        </div>
        <div class="col-sm-3">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/Group-5.png"></a>
        </div>
    </div>

    <!-- 네번째 라인 -->
    <div class="row" style="margin-top:5%">
        <div class="col-sm-5">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/R-0012.jpg" class="image"></a>
            <div class="middle">
                {{-- <img src="/img/imghover.png" width="50%"> --}}
            </div>
        </div>

        <div class="col-sm-5">
            <a href=""><img src="http://julienwaffle.com/wp-content/uploads/2016/05/생생딸기.jpg" class="image"></a>
            <div class="middle">
                {{-- <img src="/img/imghover.png" width="50%"> --}}
            </div>
        </div>

        <div class="col-sm-2">
            <p class="text-center">SMS 창업 지원 신청</p>
            <form action="">
                <div class="row">
                    이름 <input type="text" id="" placeholder="" style="width:50%;" class="pull-right">
                </div>
                <div class="row">
                    전화번호<input type="text" id="" placeholder="" style="width:50%;" class="pull-right">
                </div>
                <div class="row">
                    문의내용 <input type="text" id="" placeholder="" style="width:50%;" class="pull-right">
                </div>
                <input type="submit" value="보내기">
            </form>
        </div>
    </div>
</div>
@endsection
