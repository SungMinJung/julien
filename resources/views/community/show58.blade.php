@extends('community.common')
<style>
    .content img{
        padding-top: 150px;
    }
    .row{
        border-top:1px solid green;
        border-bottom:1px solid green;
        padding: 5px 0px 3px 0px;

    }
</style>
@section('inner')

<div class="content">
<img src="http://julienwaffle.com/wp-content/uploads/2016/05/up17-1.png" alt="">
    <p>줄리앙와플 준가맹점</p>
    <table>
        <tr class="row">
            <th>작성자</th><td>julien</td>
            <th>작성일</th><td>2017-02-28</td>
            <th>조회</th><td>642</td>
        </tr>
    </table>
</div>
@endsection