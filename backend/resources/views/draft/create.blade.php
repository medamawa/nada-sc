<body>
    <h1>下書きの作成（draft create）</h1>
    <form method="POST" action="{{ route('draft.store') }}">
        @csrf
        [name]
        <input type="text" name="name">
        @if ($errors->has('name'))
        {{$errors->first('name')}}
        @endif
        <br>
        [email]
        <input type="email" name="email">
        @if ($errors->has('email'))
        {{$errors->first('email')}}
        @endif
        <br>
        [title]
        <input type="text" name="title">
        @if ($errors->has('title'))
        {{$errors->first('title')}}
        @endif
        <br>
        [body]<br>
        <textarea rows="10" cols="60" name="body"></textarea>
        @if ($errors->has('body'))
        {{$errors->first('body')}}
        @endif
        <br>
        [links]
        <input type="text" name="links">
        @if ($errors->has('links'))
        {{$errors->first('links')}}
        @endif
        <br>
        <input type="submit">
    </form>
</body>
