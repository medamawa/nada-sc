<body>
    <h1>{{ $name }} drafts</h1>
    <ul>
        @foreach ($drafts as $draft)
            <li>{{ "[" . $draft->title . "] " }} <a href="{{ route('draft.show', ['id' => $draft->id]) }}">詳細を表示</a></li>
            <p>記事ID：<small>{{ $draft->id }}</small></p>
        @endforeach
    </ul>
    <a href="{{ route('draft.create') }}">new draft</a><br>
</body>