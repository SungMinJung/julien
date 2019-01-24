<form action="{{ route('docu.update', $document->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    종류 : 
        <select name="type">
            <option>공지사항</option>
            <option>news</option>
            <option>갤러리</option>
        </select>
    제목 : <input type="text" name="title" value="{{ $document->title }}">
    내용 : <textarea name="content" cols="30" rows="10">{{ $document->content }}</textarea>
    사진 : <input type="file" name="main_image">

    <button type="submit">등록</button>
</form>