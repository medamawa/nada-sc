<body>
    <h1>委員会の一覧</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
            <p>{{ "ユーザーネーム（ログインに使用）：" . $user->user_name }}</p>
            <a href="{{ route('article.committee.show', ['name' => $user->name]) }}">{{ $user->name }}の記事一覧を表示</a>
        @endforeach
    </ul>
</body>