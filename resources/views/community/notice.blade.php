@extends('community.common')
<style>
    .content{
        padding-left: 30px;
    }
    .kboard-header{
        float:left;
        margin:0;
        width:100%;
    }
    .kboard-search{
        float:left;
        padding-bottom: 5px;
        width: 50px;
        text-align:left;
    }
    .keyword{
        border: 1px solid #cccccc
        border-color:#e1e1e1;
        border-radius: 3px;
        background-color:#fcfcfc;
        color: #919191;
        width: 246px;
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
    #customers {
        font-size:12px;
  width: 100%;
  text-align:center;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}


#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  border-top:3px solid #F1D0AD;
  background-color: #F9F3B9;
  /* color: black; */
}
#number{
    width:3%;
  text-align:center;

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


<table id="customers">
  <tr>
    <th id="number">번호</th>
    <th>제목</th>
    <th>글쓴이</th>
    <th>날짜</th>
    <th>조회</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Berglunds snabbköp</td>
    <td>Christina Berglund</td>
    <td>Sweden</td>
  </tr>
</table>


            </div>

@endsection