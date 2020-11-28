<body>
    <h1>ユーザーの一覧</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
            <p>{{ "ユーザーネーム（ログインに使用）：" . $user->user_name }}</p>
        @endforeach
    </ul>
</body>