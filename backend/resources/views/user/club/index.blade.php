<body>
    <h1>クラブの一覧</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
            <p>{{ "ユーザーネーム（ログインに使用）：" . $user->user_name }}</p>
            <a href="{{ route('article.club.show', ['name' => $user->name]) }}">{{ $user->name }}の記事一覧を表示</a>
        @endforeach
    </ul>
</body>