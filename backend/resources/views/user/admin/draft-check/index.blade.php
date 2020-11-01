<body>
    <h1>下書きのチェック（一覧）</h1>
    <ul>
        @foreach ($drafts as $draft)
            <li>{{ "タイトル：" . "[" . $draft->title . "] "}}</li>
            <p>{{ "執筆者：" . $draft->name }}</p>
            <p>記事ID：<small>{{ $draft->id }}</small></p>
            <a href="{{ route('admin.draft-check.show', ['id' => $draft->id]) }}">詳細を表示</a>
        @endforeach
    </ul>
</body>