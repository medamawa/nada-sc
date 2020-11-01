<body>
    <h1>指定した drafts</h1>
    <ul>
        @foreach ($drafts as $draft)
            <li>{{ "[" . $draft->title . "] " }}</li>
            <p>{{ "執筆者：" . $draft->name }}</p>
            <p>記事ID：<small>{{ $draft->id }}</small></p>
            <article>{{!! $draft->body !!}}</article>
            <br>
            <a href="{{ route('draft.edit', ['id' => $draft->id]) }}">編集</a>
            <form method="POST" action="{{ route('admin.draft-check.reject', ['id' => $draft->id]) }}">
                @csrf
                <input type="submit" value="再編集を依頼する">
            </form>
            <form method="POST" action="{{ route('admin.draft-check.activate', ['id' => $draft->id]) }}">
                @csrf
                <input type="submit" value="OK">
            </form>
        @endforeach
    </ul>
    <a href="{{ route('admin.draft-check.index') }}">一覧に戻る</a><br>
</body>