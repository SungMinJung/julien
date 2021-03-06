@extends('story.common')

@section('inner')
<style>
#ex1-content{
   padding-top:80px;
}
a:hover
{
   color:#f00;
}

.zoom
{
   transform: scale(1);
   -webkit-transform: scale(1);
   -moz-transform: scale(1);
   -ms-transform: scale(1);
   -o-transform: scale(1);
   transition: all 0.3s ease-in-out;
}

.zoom:hover
{
   transform: scale(1.2);
   -webkit-transform: scale(1.2);
   -moz-transform: scale(1.2);
   -ms-transform: scale(1.2);
   -o-transform: scale(1.2);
}
.img img
{
   float: right;
   width: 90%;
   height: auto;
}
.col-sm-4
{
   overflow:hidden
}
.container{
    position:relative;
    top:0;
    left:0;
    bottom:0;
    right:0;
}

</style>
<div id="ex1-content">
   <div class="col-sm-9 border-left" style="margin-top:2%;">
       <div class="row" style="padding:10px;">
           <div class="col-sm-12" style="font-size:13px; color:#666666">
           <img src="http://julienwaffle.com/wp-content/uploads/2016/05/up3.png" alt="">
   
                <h4><p><strong>줄리앙 와플의 홍보대사 !</p>
               <p>꼬마 줄리앙</strong></p></h4><br>
               <strong>
               <p>
                   '줄리앙 와플'매장 앞에 설치되어 있는 오줌싸개 동상은 줄리앙 와플 브랜드의 모티브이자 상징물입니다.<br>
                   줄리앙 동상은 고객들의 이목을 집중시키는 홍보대사 역할은 물론 지역의 명물로써 자리잡아 가고 있습니다.<br>
                   
               </p>
            <div class="container">
            <div class="row">
            <div class="col-sm-4 border-left"style="margin-top:2%;">
               <div class="zoom">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-1.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-5-705x396.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160709_121304829-397x705.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160805_135121919-397x705.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113715787-705x397.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113719210-e1472007205478-397x705.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113716807-705x397.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113706809-e1472008104346-397x705.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113711524-e1472007922640-397x705.jpg" style="width:100%;">
               </div>
           </div>
        </div>
           <div class="col-sm-4 border-center"style="margin-top:2%;>
               <div class="zoom">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-2-705x396.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-4-396x705.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160709_121343803-397x705.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160805_123106258-397x705.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113703302-e1472007034804-397x705.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113710672-e1472007446526-397x705.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113712314-e1472007905615-397x705.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113708265-e1472008086857-397x705.jpg" style="width:100%;">
               </div>
           </div>
           <div class="col-sm-4 border-right" style="margin-top:2%">
               <div class="zoom">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-3.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/brand-3-6-705x396.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160712_144634506-705x529.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160726_182341142-397x705.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113702428-e1472006990647-397x705.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113709075-e1472007430877-397x705.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113720845-705x397.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113714170-e1472007879401-397x705.jpg" style="width:100%;">
                   <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20160824_113709909-e1472008010947-397x705.jpg" style="width:100%;">
               </div>
           </div>
        </div>
    </div>
 </div>
</div>
  
@endsection
