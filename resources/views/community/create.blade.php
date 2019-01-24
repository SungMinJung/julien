<form action="{{ route('community.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    종류 : 
        <select name="type">
            <option>공지사항</option>
            <option>news</option>
            <option>갤러리</option>
        </select>
    제목 : <input type="text" name="title">
    내용 : <textarea name="content" cols="30" rows="10"></textarea>
    사진 : <input type="file" name="main_image">

    <button type="submit">등록</button>
</form>