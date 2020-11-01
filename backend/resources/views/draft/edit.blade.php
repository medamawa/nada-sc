<body>
    <h1>下書きの編集（draft edit）</h1>
    @foreach ($drafts as $draft)
    <form method="POST" action="{{ route('draft.update', ['id' => $draft->id]) }}">
        @csrf
        [name]
        <input type="text" name="name" value="{{ $draft->name }}" readonly>
        <br>
        [email]
        <input type="email" name="email" value="{{ $draft->email }}">
        <br>
        [title]
        <input type="text" name="title" value="{{ $draft->title }}">
        <br>
        [summary]<br>
        <textarea rows="10" cols="60" name="summary">{{ $draft->summary }}</textarea>
        <br>
        [body]<br>
        <textarea rows="10" cols="60" name="body">{{ $draft->body }}</textarea>
        <br>
        [links]
        <input type="text" name="links" value="{{ $draft->links }}">
        <br>
        <input type="submit">
    </form>
    @endforeach
</body>
