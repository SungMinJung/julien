<table>
    <thead>
        <tr>
            <td>번호</td>
            <td>타입</td>
            <td>제목</td>
            <td>작성자</td>
            <td>작성일</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach ($documents as $document)
            <tr>
                <td>{{ $document->id }}</td>
                <td><a href="{{ route('docu.adshow', $document->id) }}">{{ $document->title }}</a></td>
                <td>{{ $document->type }}</td>
                <td>{{ $document->user_id }}</td>
                <td>{{ $document->created_at }}</td>
                <form action="{{ route('docu.destroy', $document->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <td>
                        <a href="{{ route('docu.edit', $document->id) }}" class="btn btn-default">수정</a>
                        <button type="submit">삭제</button>
                    </td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $documents->render() }}

