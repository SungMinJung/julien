@extends('community.common')
<style>
    .content{
        padding-left: 30px;
    }

    .searchSubmit{
        background:#4A4A4A;
        border-radius: 5px;
        font-weight:400;
        font-size:11px;
        color: #FFFFFF;
        border:0;
        padding: 9px 11px;
    }
    #img{
        /* margin-top: 50px; */
        padding-top:150px;
    }
    #notice {
        font-size:12px;
  width: 100%;
  text-align:center;
}

#notice td, #notice th {
  border: 1px solid #ddd;
  padding: 8px;
}


#notice tr:hover {background-color: #ddd;}

#notice th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  border-top:3px solid #F1D0AD;
  background-color: #F9F3B9;
  /* color: black; */
}
#number{
    width:5%;
  text-align:center;

}
#notice  td {
border-left: none;
border-right: none;
}
</style>
@section('inner')
            <div class="content">
            <img id="img" src="http://julienwaffle.com/wp-content/uploads/2016/05/up17-1.png" alt="">
            <div class="row">
            <div class="col-sm-6">
                
                <input type="text" size="30">
                <button type="submit" class="searchSubmit">검색</button>

            </div>
            </div>


<table id="notice">
  <tr>
    <th id="number">번호</th>
    <th>제목</th>
    <th>글쓴이</th>
    <th>날짜</th>
    <th>조회</th>
  </tr>
  <tr>
    <td>78</td>
    <td>줄리앙와플 준가맹점</td>
    <td>관리자</td>
    <td>2017년 02월 28일	</td>
    <td>639</td>
  </tr>
  <tr>
    <td>77</td>
    <td>하나멤버스ｘ줄리앙와플　제휴이벤트　</td>
    <td>관리자</td>
    <td>2017년 01월 03일</td>
    <td>503</td>
  </tr>
</table>


            </div>

@endsection