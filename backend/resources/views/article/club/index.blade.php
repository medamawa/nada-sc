<body>
    <h1>クラブの記事一覧</h1>
    <ul>
        @foreach ($articles as $article)
            <li>{{ "[" . $article->title . "] " }}</li>
            <p>{{ "執筆者：" . $article->name }}</p>
            <p>記事ID：<small>{{ $article->id }}</small></p>
            <p>{!! $article->summary !!}</P>
            <a href="{{ route('article.show', ['id' => $article->id]) }}">詳細を表示</a>
        @endforeach
    </ul>
    <a href="{{ route('article.index') }}">記事一覧に戻る</a>
</body>