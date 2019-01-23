@extends('layouts.app')

<style>
.every1{
    margin-top:101;
}
.ex1{
    height:100%;
    border-right:1px solid #e1e1e1;
}
.menu{
    border-right:

}
.menu p{
    /* padding: 3px 3px 4px 0; */
    padding-top: 1px;
    padding-bottom : 1px;
}
.menu a{
    font-family: 'Noto Sans KR', sans-serif;
    color: #919191;
    font-size:13px;
}
.menu a:hover {
  color: red;
}
</style>
@section('content')
{{-- sidebar --}}
{{-- 성민씨 작성 --}}
<div class="container">
    <div class="row">
        <div class="every1">
            <div class="col-sm-2 text-center ">
                <div class="ex1">
                <img src="http://julienhome.cafe24.com/wp-content/uploads/2016/05/side-bar.png" alt="">
                <div class="menu">
                    <p class="menu-p" style="color:#000000; margin-top:30px; border-top:1px solid #e1e1e1; border-bottom:1px solid #e1e1e1; padding-top:7px;padding-bottom:7px;">
                        <a href=""><strong> 브랜드 스토리</strong></a></p>
                    <p class="menu-p"><a href="">대표 인사말</a></p>
                    <p class="menu-p"><a href="">꼬마 줄리앙</a></p>
                    <p class="menu-p"><a href="">줄리앙 커피</a></p>
                    <p class="menu-p"><a href="">커피&와플</a></p>
                    <p class="menu-p tag"><a href="">킴스 와플</a></p>
                    <p class="menu-p"><a href="">찾아오시는 길</a></p>
                </div>

            </div>
            
        

        <div class="col-sm-10">
        
            @yield('inner')
        
        </div>
        </div>
    </div>

</div>

</div>


@endsection
