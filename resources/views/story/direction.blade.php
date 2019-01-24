@extends('story.common')

@section('inner')
<style>
#ex1-content{
   padding-top:80px;
}
.text{
   font-size:10px;
}
</style>

<div id="ex1-content">
   <div class="col-sm-9 border-left" style="margin-top:2%;">
       <div class="row" style="padding:10px;">
           <div class="col-sm-7" style="font-size:13px; color:#666666">
           <img src="http://julienwaffle.com/wp-content/uploads/2016/05/up5.png" alt="">
           </div>
        </div>
    </div>
</div>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyBYR3HOUCckMRzV1ko1HnAudr2k8WkZXhs"></script>
    <script>
        var myCenter=new google.maps.LatLng(37.483103, 126.995278);
        var myCenter2=new google.maps.LatLng(37.483069, 126.995858);

    function initialize() {

    var mapProp = {
       center:myCenter,
       zoom:16,
       mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var mapProp2 = {
       center:myCenter2,
       zoom:16,
       mapTypeId:google.maps.MapTypeId.ROADMAP
    };
   // var mapProp3 = {
   //     center:myCenter,
   //     zoom:16,
   //     mapTypeId:google.maps.MapTypeId.ROADMAP
   // };

   var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
   var map2=new google.maps.Map(document.getElementById("googleMap2"),mapProp2);
   // var map3=new google.maps.Map(document.getElementById("googleMap3"),mapProp3);

    var marker=new google.maps.Marker({
       position:myCenter,
    });
    var marker2=new google.maps.Marker({
       position:myCenter2,
    });
   // var marker3=new google.maps.Marker({
   //     position:myCenter,
   // });

    marker.setMap(map);
    marker2.setMap(map2);
   // marker3.setMap(map3);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

    <div class="container">
    <body style="padding:8px;">
    <h6><strong>(주) 브라더푸드 찾아오시는길</strong></h6>
   <div id="googleMap" style="width:719px;height:250px;"></div><br>
   <div class="text">
   <strong> 본사주소</strong>
    (주) 브라더푸드<br>
    주소 : 서울시 서초구 방배 13길 18 아크로타워 2층 209호<br>
    대표번호 : 1670 – 5892<br>
    메일주소 :  brotherfood@naver.com<br>
    </div><br>
    <h6><strong>줄리앙 와플 방배 본점 찾아오시는길</strong></h6>
   <div id="googleMap2" style="width:719px;height:250px;"></div><br>
   <div class="text">
   <strong> 방배 본점 주소</strong>
    줄리앙 와플(방배점) <br>
    주소 : 서울특별시 서초구 방배로 13길 18, 방배아크로타워 115호<br>
    대표번호 : 1670 – 5892<br>
    메일주소 :  brotherfood@naver.com<br></div>
   <!-- <div id="googleMap3" style="width:356px;height:131px;"></div> -->
    </body>
    </div>
@endsection

