<body>
    <h1>指定した drafts</h1>
    <ul>
        @foreach ($drafts as $draft)
            <li>{{ "[" . $draft->title . "] " }}</li>
            <p>{{ "執筆者：" . $draft->name }}</p>
            <p>記事ID：<small>{{ $draft->id }}</small></p>
            <p>{!! $draft->summary !!}</P>
            <article>{!! $draft->body !!}</article>
            <br>
            <a href="{{ route('draft.edit', ['id' => $draft->id]) }}">編集</a>
            <form method="POST" action="{{ route('draft.submit', ['id' => $draft->id]) }}">
                @csrf
                <input type="submit" value="チェックを依頼をする">
            </form>
        @endforeach
    </ul>
    <a href="{{ route('draft.create') }}">new draft</a><br>
</body>