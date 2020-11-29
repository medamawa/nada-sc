@extends('layouts.app')

@section('style')
@endsection

@section('main')
<main>
		<h1 class="wrapper-h1">意見BOX</h1>

		<article class="main-article">
				<header>
						<h1>意見BOX</h1>
						<div class="main-article-subinfo">
								<p class="name committee">生徒会長</p>
								<p><time datetime="2020-10-04T13:23:40">2020/10/4 13:23</time></p>
						</div>
						<div class="main-article-summary">
								<p>
										意見BOXです。意見を書き込んでください。
								</p>
						</div>
				</header>
				<div class="main-article-body">
						<h1>意見BOX</h1>
						<p>以下のフォームに入力してください。</p>
						<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfUMF-Vi92OclE-I3torywhzL9EO8PmGDROvM25aRCOY93ZBg/viewform?embedded=true" width="100%" height="1202" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
						<footer>興味アリ</footer>
		</article>
</main>
@endsection
