<body>
    <h1>指定した drafts</h1>
    <ul>
        @foreach ($drafts as $draft)
            <li>{{ "[" . $draft->title . "] " }}</li>
            <p>記事ID：<small>{{ $draft->id }}</small></p>
            <article>{{!! $draft->body !!}}</article>
            <br>
            <form method="POST" action="{{ route('draft.submit', ['id' => $draft->id]) }}">
                @csrf
                <input type="submit" value="チェックを依頼をする">
            </form>
        @endforeach
    </ul>
    <a href="{{ route('draft.create') }}">new draft</a><br>
</body>