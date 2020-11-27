<body>
    <h1>指定した記事</h1>
    <ul>
        @foreach ($articles as $article)
            <li>{{ "[" . $article->title . "] " }}</li>
            <p>{{ "執筆者：" . $article->name }}</p>
            <p>記事ID：<small>{{ $article->id }}</small></p>
            <p>{!! $article->summary !!}</P>
            <article>{!! $article->body !!}</article>
            <p>関連リンク：<small>{{ $article->links }}</small></p>
            <br>
        @endforeach
    </ul>
    <a href="{{ route('article.index') }}">一覧に戻る</a><br>
</body>