@extends('layouts.app')

@section('content')
{{-- sidebar --}}
<div class="container">
    <div class="row">
        <div class="every1">
            <div class="col-sm-2 text-center ">
                <div class="ex1">
                <img src="http://julienhome.cafe24.com/wp-content/uploads/2016/05/side-bar.png" alt="">
                <div class="menu">
                    <p class="menu-p select" >
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
