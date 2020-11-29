<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.11.0/css/mdb.min.css" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
	<link href="{{ asset('css/global/font.css') }}" rel="stylesheet" media="all">
	<link href="{{ asset('css/global/size.css') }}" rel="stylesheet" media="all">
	<link href="{{ asset('css/global/size-template/3col.css') }}" rel="stylesheet" media="all">
	<link href="{{ asset('css/global/style/style.css') }}" rel="stylesheet" media="all">
	<link href="{{ asset('css/global/style/header.css') }}" rel="stylesheet" media="all">
	<link href="{{ asset('css/global/style/right-bar.css') }}" rel="stylesheet" media="all">
	<link href="{{ asset('css/global/style/main-article/style.css') }}" rel="stylesheet" media="all">
	<link href="{{ asset('css/global/style/main-article/template.css') }}" rel="stylesheet" media="all">
	<link href="{{ asset('css/global/style/left-bar.css') }}" rel="stylesheet" media="all">
	<link href="{{ asset('css/global/style/footer.css') }}" rel="stylesheet" media="all">
	<!-- <link href="css/index/size.css" rel="stylesheet" media="all"> -->
	<!-- <link href="css/index/style.css" rel="stylesheet" media="all"> -->
	@yield('style')

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Styles -->
</head>
<body>
		<div id="fullscreen" class="fullheight">
			<div id="blockskip"><a href="#main">このページの本文へ移動</a></div>
			<header id="body-header">
					<nav class="navbar navbar-default navbar-expand-lg py-0 navbar-light color__navi ">
							<div class="container-fluid font-weight-bold">
									<a class="navbar-brand" href="#">
											<h1 class="mb-0 font-weight-bold">
													<img src="img/nada-sc.png">
											</h1>
									</a>
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="スマートフォン用ナビゲーション">
											<span class="navbar-toggler-icon"></span>
											<span class="toggler__txt">メニュー</span>
									</button>
									<div class="navbar-collapse collapse pb-md-0" id="navbarContent">
											<ul class="w-100 navbar-nav pb-3 pb-lg-0 d-flex align-items-center">
													<li class="nav-item dropdown">
															<a href="#" id="navbarDropdownMenuLink" class="nav-link dropdown-toggle p-4" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">メインフィード</a>
															<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
																	<a class="dropdown-item" href="#">生徒会</a>
																	<a class="dropdown-item" href="#">クラブ</a>
																	<a class="dropdown-item" href="#">学校</a>
																	<a class="dropdown-item" href="#">コミュニティ</a>
															</div>
													</li>
													<li class="nav-item dropdown ">
															<a href="#" id="navbarDropdownMenuLink" class="nav-link dropdown-toggle p-4" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">募集</a>
															<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
																	<a class="dropdown-item" href="#">生徒会</a>
																	<a class="dropdown-item" href="#">クラブ</a>
																	<a class="dropdown-item" href="#">個人</a>
															</div>
													</li>
													<li class="nav-item dropdown ">
															<a href="#" id="navbarDropdownMenuLink" class="nav-link dropdown-toggle p-4" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">意見</a>
															<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
																	<a class="dropdown-item" href="#">意見BOX</a>
															</div>
													</li>
													<li class="nav-item dropdown ">
															<a href="#" id="navbarDropdownMenuLink" class="nav-link dropdown-toggle p-4" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">掲示板</a>
															<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
																	<a class="dropdown-item" href="#">ndちゃんねる</a>
															</div>
													</li>
													<li class="nav-item dropdown ml-lg-auto">
															<a href="#" id="navbarDropdownMenuLink" class="nav-link dropdown-toggle p-4 user-name" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">一般アカウント</a>
															<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
																	<a class="dropdown-item" href="#">マイページ</a>
																	<a class="dropdown-item" href="#">設定</a>
																	<a class="dropdown-item" href="#">ログアウト</a>
															</div>
													</li>
											</ul>
									</div>
							</div>
					</nav>
			</header>

			<div id="contents-wrapper">

					<aside id="left-bar">
							<ul>
									<li class="bar-title">メインフィード</li>
									<li><a href="">生徒会</a></li>
									<li><a href="">クラブ</a></li>
									<li><a href="">学校</a></li>
									<li><a href="">コミュニティ</a></li>
							</ul>
							<ul>
									<li class="bar-title">募集</li>
									<li><a href="">生徒会</a></li>
									<li><a href="">クラブ</a></li>
									<li><a href="">個人</a></li>
							</ul>
							<ul>
									<li class="bar-title">意見</li>
									<li><a href="">意見BOX</a></li>
							</ul>
							<ul>
									<li class="bar-title">掲示板</li>
									<li><a href="">ndちゃんねる</a></li>
							</ul>
					</aside>

					@yield('main')

					<aside id="right-bar">
							<div id="pr-wrapper" class="right-bar-wrapper">
									<h1 class="wrapper-h1">お知らせ一覧</h1>

									<ul>
											<li class="bar-title">生徒会</li>
											<li>
													<a href="">
															<p class="title">1分でも早く仕事を終わらせるためにVSCodeにできること</p>
															<p class="name">Qiitaコピペ委員会</p>
													</a>
											</li>
											<li>
													<a href="">
															<p class="title">Pythonの非同期プログラミングを完全理解</p>
															<p class="name">Qiitaコピペ委員会</p>
													</a>
											</li>
											<li>
													<a href="">
															<p class="title">装飾タグのあれこれ</p>
															<p class="name">装飾担当PT</p>
													</a>
											</li>
											<li>
													<a href="">
															<p class="title">石原さとみショックの裏で東証のシステム障害・一体何が起きたのか</p>
															<p class="name">Qiitaコピペ委員会</p>
													</a>
											</li>
											<li>
													<a href="">
															<p class="title">Qiita開設</p>
															<p class="name">Qiitaコピペ委員会</p>
													</a>
											</li>
											<li class="bar-more"><a href="">もっと見る</a></li>
									</ul>
									<ul>
											<li class="bar-title">クラブ</li>
											<li>
													<a href="">
															<p class="title">モルック同好会、新人大会で大躍進！</p>
															<p class="name">モルック同好会</p>
													</a>
											</li>
											<li>
													<a href="">
															<p class="title">美術同好会、活動のお知らせ</p>
															<p class="name">美術同好会</p>
													</a>
											</li>
											<li class="bar-more"><a href="">もっと見る</a></li>
									</ul>
									<ul>
											<li class="bar-title">個人</li>
											<li>
													<a href="">
															<p class="title">お話会実施</p>
															<p class="name">犬養毅</p>
													</a>
											</li>
											<li class="bar-more"><a href="">もっと見る</a></li>
									</ul>
							</div>
							<div id="recruit-wrapper" class="right-bar-wrapper">
									<h1 class="wrapper-h1">募集一覧</h1>

									<ul>
											<li class="bar-title">生徒会</li>
											<li>
													<a href="">
															<p class="title">体育委員募集</p>
															<p class="name">体育委員会</p>
													</a>
											</li>
											<li>
													<a href="">
															<p class="title">文化委員募集！</p>
															<p class="name">文化委員会</p>
													</a>
											</li>
											<li>
													<a href="">
															<p class="title">[急募]会誌委員</p>
															<p class="name">会誌委員会</p>
													</a>
											</li>
											<li>
													<a href="">
															<p class="title">テストPT募集</p>
															<p class="name">テストPT</p>
													</a>
											</li>
											<li class="bar-more"><a>もっと見る</a></li>
									</ul>
									<ul>
											<li class="bar-title">クラブ</li>
											<li>
													<a href="">
															<p class="title">モルック同好会、新入部員募集！</p>
															<p class="name">モルック同好会</p>
													</a>
											</li>
											<li>
													<a href="">
															<p class="title">美術同好会、新入部員募集</p>
															<p class="name">美術同好会</p>
													</a>
											</li>
											<li class="bar-more"><a>もっと見る</a></li>
									</ul>
									<ul>
											<li class="bar-title">個人</li>
											<li>
													<a href="">
															<p class="title">物理チャレンジメンバー募集[2人]</p>
															<p class="name">犬養毅</p>
													</a>
											</li>
											<li class="bar-more"><a>もっと見る</a></li>
									</ul>
							</div>
							<div id="opinion-wrapper" class="right-bar-wrapper">
									<h1 class="wrapper-h1">意見BOX</h1>
									<ul>
											<li class="bar-button"><a href="opinion.html">意見BOX</a></li>
									</ul>
							</div>
							<div id="twitter-wrapper">
									<a class="twitter-timeline" href="https://twitter.com/ND_timetable?ref_src=twsrc%5Etfw" data-lang="en" height="500px" width="100%">灘校時間割速報(非公式)のツイート</a>
									<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
							</div>
					</aside>

			</div>

			<footer id="body-footer" class="outer-block footer">
					<div class="logo">
							<h1 class="mb-0 font-weight-bold">
									灘校生徒会サイト
							</h1>
					</div>
					<ul class="body-footer-nav">
							<li><a href="">ABOUT</a></li>
							<li><a href="">CONTACT</a></li>
					</ul>
					<p class="copyright">
							<a href="https://twitter.com/rxr6ep9" target="_blank">COPYRIGHT © 2020 Sogo Nishihara. All rights Reserved.</a>
					</p>
			</footer>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- 「続きを読む」ボタンの:hoverをスマホ、タブレットで無効化 -->
<script>
		var touch = 'ontouchstart' in document.documentElement || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;

		if (touch) {
				try {
						for (var si in document.styleSheets) {
								var styleSheet = document.styleSheets[si];
								if (!styleSheet.rules) continue;

								for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
										if (!styleSheet.rules[ri].selectorText) continue;

										if (styleSheet.rules[ri].selectorText.match('.main-article-grad-btn:hover')) {
												styleSheet.deleteRule(ri);
										}
								}
						}
				} catch (ex) {}
		}
</script>
</body>
</html>
