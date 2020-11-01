<body>
    <h1>{{ $name }} drafts</h1>
    <ul>
        @foreach ($drafts as $draft)
            <li>{{ "[" . $draft->title . "] " }}</li>
            <p>{{ "執筆者：" . $draft->name }}</p>
            <p>記事ID：<small>{{ $draft->id }}</small></p>
            <p>{!! $draft->summary !!}</p>
            <a href="{{ route('draft.show', ['id' => $draft->id]) }}">詳細を表示</a>
        @endforeach
    </ul>
    <a href="{{ route('draft.create') }}">new draft</a><br>
</body>