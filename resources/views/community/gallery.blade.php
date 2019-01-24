@extends('community.common')
<style>
.content{
    padding-left: 40px;
}
#first{
    padding-top: 150px;
}

.gallery1{
    float:left;
    width: 100%;
}

.row1 img{
    width:187.5px; height:187.5px;
    border: 1px solid #979797;
    padding: 7px;
}

.row2 img{
    width:187.5px; height:187.5px;
    border: 1px solid #979797;
    padding: 7px;
}
.row3 img{
    width:187.5px; height:187.5px;
    border: 1px solid #979797;
    padding: 7px;
}
.row4 img{
    width:187.5px; height:187.5px;
    border: 1px solid #979797;
    padding: 7px;
}
.effect1:hover{
    opacity:0.3;
}
.effect2:hover{
    opacity:0.3;
}
.effect3:hover{
    opacity:0.3;
}
.effect4:hover{
    opacity:0.3;
}
.effect5:hover{
    opacity:0.3;
}

.effect6:hover{
    opacity:0.3;
}


#popup{
            position: fixed;
            z-index:1000;
            display:none;
            width:100%;
            height:100%;
            transition: all 0.3s ease-in-out;
        }
        #popimg{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
        }
</style>
    <script>

function popup_show(imgurl)
{
    $("#popimg").attr("src", imgurl);
    
    $("#popup").css("background-color","rgba( 000, 000, 000, 0.5 )");
    $("#popup").css("display","block");
}

function popup_del(){
    $("#popup").css("background-color","#fff");
    $("#popup").css("display","none");

}

</script>


<div id="popup">
<img src="" onclick="popup_del()" id="popimg">
{{-- <button id="pop1-btn" >제거</button> --}}
</div>

@section('inner')
<div class="content">
    <img id="first" src="http://julienwaffle.com/wp-content/uploads/2016/05/up18.png" alt="">

    <div class="gallery1" id="horizen">
        <div class="row1" id="hori1">
            <img class="effect1" src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20180713_165608779.jpg" onclick="popup_show('http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20180713_165608779.jpg')" alt="">
            <img class="effect2" src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20180713_165630342-180x180.jpg "onclick="popup_show('http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20180713_165630342-180x180.jpg')"  alt="">
            <img class="effect3" src="http://julienwaffle.com/wp-content/uploads/2016/05/11-1-180x180.jpg"  onclick="popup_show('http://julienwaffle.com/wp-content/uploads/2016/05/11-1-180x180.jpg')" alt="">
            <img class="effect4" src="http://julienwaffle.com/wp-content/uploads/2016/05/00-180x180.jpg"  onclick="popup_show('http://julienwaffle.com/wp-content/uploads/2016/05/00-180x180.jpg')" width="100%"  alt="">
         </div>

        <div class="row2" id="hori2">
        <img class="effect5" src="http://julienwaffle.com/wp-content/uploads/2016/05/00-180x180.jpg" alt="">
        <img class="effect6" src="http://julienwaffle.com/wp-content/uploads/2016/05/22-2-180x180.jpg" alt="">
        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20180713_172010674-180x180.jpg" alt="">
        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/IMG_1399-180x180.jpg" alt="">
        </div>

        <div class="row3" id="hori3">
        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/IMG_1381-180x180.jpg" alt="">
        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_20170928_162834435-180x180.jpg" alt="">
        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/IMG_1421-180x180.jpg" alt="">
        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/IMG_1326-1-180x180.jpg" alt="">
        </div>

        <div class="row4" id="hori4">
        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/IMG_1371-1-180x180.jpg" alt="">
        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/IMG_1376-1-180x180.jpg" alt="">
        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/IMG_1396-1-180x180.jpg" alt="">
        <img src="http://julienwaffle.com/wp-content/uploads/2016/05/IMG_1359-180x180.jpg" alt="">
        </div>

    </div>

</div>
@endsection
