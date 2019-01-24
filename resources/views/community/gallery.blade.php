@extends('community.common')
<style>
.content{
    padding-left: 30px;
}
#first{
    padding-top: 150px;
}
#horizen{

}
#hori1{
    padding: 0px 22px 0px 22px;
    border: 1px solid #979797;

   
}
#hori2{
    padding: 0px 22px 0px 22px;
    border: 1px solid #979797;

}
#hori3{
    padding: 0px 22px 0px 22px;
    border: 1px solid #979797;
}
#hori4{
    padding: 0px 22px 0px 22px;
    border: 1px solid #979797;
}
</style>

@section('inner')
<div class="content">
    <img id="first" src="http://julienwaffle.com/wp-content/uploads/2016/05/up18.png" alt="">
    <div class="row" id="horizen">
        <div class="col-sm-3" id="hori1">
            <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20180713_165608779.jpg" style="width:187px; height:187px;" alt="">
        </div>

        <div class="col-sm-3" id="hori2">
            <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20180713_165630342-180x180.jpg" style="width:187px; height:187px;" alt="">
        </div>

        <div class="col-sm-3" id="hori3">
            <img src="http://julienwaffle.com/wp-content/uploads/2016/05/11-1-180x180.jpg" style="width:187px; height:187px;" alt="">
        </div>

        <div class="col-sm-3" id="hori4">
            <img src="http://julienwaffle.com/wp-content/uploads/2016/05/%EB%B3%B4%EC%8A%A4%ED%84%B43-180x180.jpg" style="width:180px; height:180px;" alt="">
        </div>
    </div>
</div>
@endsection
