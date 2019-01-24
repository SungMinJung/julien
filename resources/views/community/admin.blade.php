<form action="{{ route('community.test.destroy') }}" method="post">
    @csrf
    @method('delete')

    <table>
        <thead>
            <tr>
                <td>번호</td>
                <td>제목</td>
                <td>작성자</td>
                <td>작성일</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($documents as $document)
                <tr>
                    <td>{{ $document->id }}</td>
                    <td>{{ $document->title }}</td>
                    <td>{{ $document->user_id }}</td>
                    <td>{{ $document->crated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button type="submit">삭제</button>
</form>