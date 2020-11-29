@extends('layouts.center')

@section('style')
	<link href="{{ asset('css/login/style.css') }}" rel="stylesheet" media="all">
	<link href="{{ asset('css/login/size.css') }}" rel="stylesheet" media="all">
@endsection

@section('main')
<main class="background-color-transparent">
		<div id="form-wrapper">
				<div id="form-wrapper-header">
						<h1>新規登録</h1>
				</div>

				<div id="form-wrapper-body">
						<form method="POST" autocomplete="off">
								<div class="form-item">
										<label for="name"></label>
										<input type="name" name="name" required="required" placeholder="ユーザーネーム"></input>
								</div>
								<div class="form-item">
										<label for="password"></label>
										<input type="password" name="password" required="required" placeholder="パスワード"></input>
								</div>
								<div class="form-item">
										<label for="password-confirm"></label>
										<input type="password-confirm" name="password-confirm" required="required" placeholder="パスワード(確認)"></input>
								</div>
								<div class="button-panel">
										<input type="submit" class="button" title="Sign In" value="サインイン"></input>
								</div>
						</form>
						<div class="form-footer">
								<p><a href="#">お問い合わせ</a></p>
						</div>
				</div>
		</div>
</main>
@endsection
