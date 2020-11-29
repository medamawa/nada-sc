@extends('layouts.app')

@section('style')
@endsection

@section('main')
<main>
		<h1 class="wrapper-h1">生徒会からのお知らせ</h1>

		<article class="main-article">
				<header>
						<h1>1分でも早く仕事を終わらせるためにVSCodeにできること</h1>
						<div class="main-article-subinfo">
								<p class="name committee">Qiitaコピペ委員会</p>
								<p><time datetime="2020-09-24T22:45:40">2020/9/24 22:45</time></p>
						</div>
						<div class="main-article-summary">
								<p>
										Qiitaのトレンドの上のほうにあった記事のコピペです。
								</p>
						</div>
				</header>
				<div class="main-article-grad-wrap">
						<input id="trigger1" class="main-article-grad-trigger" type="checkbox">
						<div class="main-article-grad-item">
								<div class="main-article-body">
										<h1>はじめに（見出し１）</h1>
										<p>本投稿は<strong>『VSCodeが最強のエディタだ!!』などといったことを伝える記事ではありません。</strong>数あるエディタの中の『VSCode』に焦点を当てて、作業効率化できるための使い方をまとめたものです。いくつかのテーマに分けて、ご紹介させていただきますので、興味のあるところを拾い読みしていただければと思います。(スクリーンショットについては、随時更新させていただきますが、古い場合があります。ご容赦ください。)</p>
										<h1>1.ショートカット（見出し１）</h1>
										<p>ショートカットはかなりの数があるので、今回は<strong>『1日の作業の中で登場頻度が多そうな操作』</strong>に焦点をあてて、効率化を目指していきます。 ショートカットを覚えることで、ある程度の操作はマウスに触らずにできるようになります。 1つ1つの効果としては微々たるものですが、操作頻度の多いものであればあるほど、効果が期待できるので、覚えることをオススメします！</p>
										<h2>VSCodeを閉じる ★☆☆☆☆</h2>
										<p>VSCodeを閉じるに関しては、おそらく一日の終わりに一度だけという人もいるかも知れませんので、星は1つにしました。 1日一度は必ず行う作業だと思いますので、ほんの少しの時短が期待できます。</p>
										<h2>アクティブなエディタを閉じる ★★★★☆</h2>
										<p>これは1日の中でもかなり登場機会の多い操作だと思います。 1点注意点として、アクティブなエディタが一つもない状態で、このコマンドを押すとVSCodeが自体が閉じてしまうので気を付けましょう。</p>
										<h1>2.編集操作</h1>
										<h2>矩形選択 ★★★☆☆</h2>
										<p>秀丸や、Sakuraエディタといったエディタでも同じようなことができます。 名前の通り、「領域を矩形に選択」できる機能です。 複数行にわたって、Prefixを追加したいといった場合などは非常に効果的です。 キーボードのみで操作する場合には、Ctrl + Shift + Altを入力している間は、矩形選択入力待ちの状態になります。 後は方向キー(←↑→↓)を使って、選択する範囲を決めます。 マウスを使って選択を範囲を決める場合は、Shift +Altを入力している間は、矩形選択入力待ちになるので、マウスを範囲を選択します。@borusitisanさんよりご提供
												マウスホイールをクリックしながらドラッグすることでも、同じように矩形選択を行うことができます。
										</p>
										<h2>マルチカーソル ★★★☆☆</h2>
										<p>マルチカーソルも一括編集を効率的に行う上で有効です。 複数個所にカーソルを指定して、同時にテキストを編集することができます。 最初に対象となる文字列に対して、カーソルを合わせます。(マウスでもキーボードでもどちらでも構いません。) カーソルを合わせると、対象となっている文字の背景色が薄っすらと変わるので、それを確認したら、Ctrl + Shift + Lを入力します。 マルチカーソル状態になると、複数行にカーソルが表示されるようになり、カーソルが表示されている全行に対して、同じ操作を行うことができます。
												イメージしにくい方は下記の.gifを参考にしてください。
										</p>
										<h1>最後に</h1>
										<p>本投稿が、皆様の明日の作業を1分でも短縮できる一助になればと思います。1分1秒でも早く仕事を終わらせ、皆様のプライベートの時間が少しでも有意義な時間になれば幸いです。</p>
								</div>
						</div>
						<div class="main-article-grad-btn-wrapper">
								<label class="main-article-grad-btn" for="trigger1">
										<span class="fa fa-chevron-down"></span>
								</label>
						</div>
				</div>
				<footer>興味アリ</footer>
		</article>

		<article class="main-article">
				<header>
						<h1>Pythonの非同期プログラミングを完全理解</h1>
						<div class="main-article-subinfo">
								<p class="name committee">Qiitaコピペ委員会</p>
								<p><time datetime="2020-09-24T22:47:40">2020/9/24 22:47</time></p>
						</div>
						<div class="main-article-summary">
								<p>
										Qiitaのトレンドの上のほうにあった記事のコピペです。（h3、liの見た目確認用）
								</p>
						</div>
				</header>
				<div class="main-article-grad-wrap">
						<!-- id="trigger{id}の変更できるようにする" -->
						<input id="trigger2" class="main-article-grad-trigger" type="checkbox">
						<div class="main-article-grad-item">
								<div class="main-article-body">
										<h1>非同期プログラミング</h1>
										<p>　非同期プログラミングについて、聞いたことのある人は多いと思います。例えば、<strong>フロントエンド</strong>で使われているJavaScriptはシングルスレッド言語で、メインスレッドをブロッキングさせないため、様々な関数は非同期処理になるよう実装されています。Node.jsもその性質を受け継ぎ、I/Oバウンドタスクに長けています。しかし、Pythonになると、並列・並行処理に対応しているため、ほとんどの人は自身のプロジェクトで非同期プログラミングを利用した経験がないでしょう。もちろん、Tornado、TwistedやGeventなどの非同期フレームワークが有名で使ったことのある人は少なくないですが、変わったエラーにぶつかった時はなかなか解決できないでしょう。近年のPyConの傾向から見るとわかりますが、非同期プログラミングは間違いなくPythonエコシステムの次のトレンドになります。また、新興のプログラミング言語であるGo、Rustなどは非同期処理と高性能並行処理を売りにしています。Pythonも負けてはならないので、2013年からPythonの生みの親であるGuidoさん自らTulip（asyncio）プロジェクトの開発を行い始めました。</p>
										<h2>1.非同期処理とは</h2>
										<p>　まず、関連するコンセプトを説明してから、非同期処理の説明に入りたいと思います。</p>
										<h3>1-1.ブロッキング</h3>
										<ul>
												<li>プログラムは計算リソースを得られずハングアップになった状態</li>
												<li>プログラムはある処理が完成するのを待っている時、自身は他の処理を行えない状態をブロッキングという</li>
												<li>よく見られるブロッキングの形式：ネットワークI/Oブロッキング、ハードディスクI/Oブロッキング、ユーザー入力ブロッキング</li>
										</ul>
										<p>　ブロッキングはあるゆるところに存在します。例えば、CPUが「コンテキストスイッチ」をしている時、他のプロセスは処理を行えないため、ブロッキングされます。（マルチコアの場合は、コンテキストスイッチをしているコアが利用不可になる）</p>
										<h3>1-2.ノンブロッキング</h3>
										<ul>
												<li>プログラムはある処理を待つ時、自身はブロッキングされず、他の処理に移れる状態をノンブロッキングという</li>
												<li>ノンブロッキングは全てのプログラムレベルと状況で可能なものではない</li>
												<li>プログラムのカプセル化レベルにおいて、子のプログラムユニットを許容できる時（「不可分処理」ではない時）のみ、ノンブロッキング状態が存在しうる</li>
										</ul>
										<p>　ノンブロッキングはブロッキングの反対面で、ある処理のブロッキングが計算効率を低下させたため、その処理をノンブロッキングにするわけです。</p>
										<p>（以下略...）</p>
										<h2>2. 非同期プログラミングを採用する理由</h2>
										<p>　前述のように、非同期プログラミングにはたくさんの難点があります。Pythonの生みの親が4年もかけて自ら取り組んで作った「asyncio」はPython 3.6で標準ライブラリーになったが、なんであんな苦労してまで作らなければならないでしょうか？理由は、非同期プログラミングは非常に役に立つものだからです。</p>
										<h3>2-1. CPUの時間感覚</h3>
										<p>　CPUはコンピューターの処理コアで、貴重なリソースになります。CPUの実行時間を無駄遣いし、利用率を低下させると、プログラムの効率も必然的に低下します。上記の表が示したように、1Gbpsのネットワークで2KBのデータをアップロードしたら、CPUの感覚では14時間を過ごしたようなものです。もし、10Mbpsのネットワークとなると、更に100倍も効率が下がります。この長い時間を、CPUをただただ待たせて他の処理に移さない行為はまさに<strong>CPUの「青春」の無駄遣い</strong>になります。</p>
										<h3>2-2. 現実の問題点</h3>
										<p>　コストと効率は企業経営の角度からの問題で、C10K/C10M問題はハードウェアに対する技術的なチャレンジになります。C10K/C10M問題が解決できたら、コストと効率の問題も同時に解決されることになります。</p>
										<h1>まとめ</h1>
										<p>　Pythonにおいての非同期プログラミングの発展から仕組みまで詳しく見てきました。最終的に、同期処理と同じぐらいシンプルなコードでN倍の効率向上を実現しました。しかも、コールバック地獄のような欠点もありません。asyncioの詳しい使い方、その長所と短所、そして、Pythonエコシステム内の他の非同期I/Oソリューション、asyncioとの区別などはまた他の記事で紹介します。</p>
								</div>
						</div>
						<div class="main-article-grad-btn-wrapper">
								<label class="main-article-grad-btn" for="trigger2">
								<span class="fa fa-chevron-down"></span>
						</label>
						</div>
				</div>
				<footer>興味アリ</footer>
		</article>
		<article class="main-article">
				<header>
						<h1>装飾タグのあれこれ</h1>
						<div class="main-article-subinfo">
								<p class="name committee">装飾担当PT</p>
								<p><time datetime="2020-09-24T22:47:40">2020/9/24 22:47</time></p>
						</div>
						<div class="main-article-summary">
								<p>
										装飾タグの一覧記事です。
								</p>
						</div>
				</header>
				<div class="main-article-grad-wrap">
						<!-- id="trigger{id}の変更できるようにする" -->
						<input id="trigger3" class="main-article-grad-trigger" type="checkbox">
						<div class="main-article-grad-item">
								<div class="main-article-body">
										<h1>見出し１</h1>
										<p>見出し１です。<strong>h1タグ</strong>です。</p>
										<h2>見出し２</h2>
										<p>見出し２です。<strong>h2タグ</strong>です。</p>
										<h3>見出し３</h3>
										<p>見出し３です。<strong>h3タグ</strong>です。</p>
										<h4>見出し４</h4>
										<p>見出し４です。<strong>h4タグ</strong>です。</p>
										<h5>見出し５</h5>
										<p>見出し５です。<strong>h5タグ</strong>です。</p>
										<h6>見出し６</h6>
										<p>見出し６です。<strong>h6タグ</strong>です。</p>
										<h1>テキスト装飾</h1>
										<p>いろいろなテキスト装飾があります。</p>
										<h2>強調</h2>
										<p>文章の一部を強調したいときには<strong>strongタグ</strong>を使ってください。</p>
										<h2>イタリック</h2>
										<p>テキストの装飾表現として<i>イタリック</i>にすることができます。</p>
										<p>そのためには<strong>iタグ</strong>を使ってください。</p>
										<h2>打ち消し線</h2>
										<p>テキスト装飾の方法として<del>打ち消し線</del>を使うことができます。</p>
										<p>これを使うには<strong>delタグ</strong>を使ってください。</p>
										<blockquote>
												<h3>テキスト装飾の応用</h3>
												<p>テキスト装飾はタグを重ねて使うことで合わせて使うことができます。</p>
												<p>例えば、<strong><i>強調&イタリック</i></strong>や、<strong><i><del>強調&イタリック&打ち消し線</del></i></strong>のような表現が可能です。</p>
										</blockquote>
										<h2>リスト</h2>
										<p>以下のようなリストを作成したいときは<strong>ulタグで挟んだliタグ</strong>を使ってください。</p>
										<ul>
												<li>りんご</li>
												<li>ばなな</li>
												<li>ピンクグレープフルーツ</li>
										</ul>
										<p>ペンパイナッポーアッポーペン。</p>
										<h2>リンク</h2>
										<p>サイトのURLを使いたいときは<strong>aタグ</strong>を使ってください。</p>
										<h3>URLを使う例</h3>
										<p>これ、見て。<a href="https://news.yahoo.co.jp/pickup/6372556" target="_blank">この記事</a>まぢワロス。</p>
										<h2>引用</h2>
										<p>補足情報などで引用を使いたいときは<strong>blockquoteタグで挟んだ要素</strong>を使ってください。</p>
										<h3>引用を使う例</h3>
										<p>こんな感じになります。</p>
										<blockquote>
												<h3>補足情報</h3>
												<p>この野菜が必要です。</p>
												<ul>
														<li>トマト</li>
														<li>キャベツ</li>
														<li>ビーツ</li>
												</ul>
												<p>各自事前に用意しておいてください。</p>
										</blockquote>
								</div>
						</div>
						<div class="main-article-grad-btn-wrapper">
								<label class="main-article-grad-btn" for="trigger3">
								<span class="fa fa-chevron-down"></span>
						</label>
						</div>
				</div>
				<footer>興味アリ</footer>
		</article>
		<article class="main-article">
				<header>
						<h1>石原さとみショックの裏で東証のシステム障害・一体何が起きたのか</h1>
						<div class="main-article-subinfo">
								<p class="name committee">Qiitaコピペ委員会</p>
								<p><time datetime="2020-10-04T01:04:40">2020/10/4 1:04</time></p>
						</div>
						<div class="main-article-summary">
								<p>
										10/1に発生した東証のシステム障害のまとめです。
								</p>
						</div>
				</header>
				<div class="main-article-grad-wrap">
						<!-- id="trigger{id}の変更できるようにする" -->
						<input id="trigger4" class="main-article-grad-trigger" type="checkbox">
						<div class="main-article-grad-item">
								<div class="main-article-body">
										<p>どうも乙pyです。昨日、石原さとみショックの裏(て言うか前ですけどね)で東京証券取引所のシステム障害が発生し株取引が全面停止になるという事象が発生しました。東証のシステム障害が気になったのでまとめてみました。</p>
										<h1>東京証券取引所にシステム障害発生</h1>
										<p>東京証券取引所は2020年10月01日 システム障害の影響で取引を終日取りやめ、各拠点の証券取引所も停止。 午前9時の取引開始から全銘柄を売買できない。 大規模障害は2005年11月以来約15年ぶり。 前回は午後1時30分に復旧したので、障害の規模は今回のほうが大きいと見られる。 終日売買停止は、全面的にシステム取引に移行した 1999年5月以降で初めて。 その後10月02日には復旧し、取引が再開されている。</p>
										<h1>株式売買システム「ａｒｒｏｗｈｅａｄ(アローヘッド)」</h1>
										<p>今回障害を起こしたと見られているのは富士通と東証が共同開発した株式売買システム、通称アローヘッド</p>
										<blockquote>
												<p>参考：<a href="https://www.fujitsu.com/jp/vision/customerstories/tokyo-stock-exchange/index.html" target="_blank">富士通 arrowhead</a></p>
										</blockquote>
										<p>2019年11月5日に刷新し最新のもので運用をしている模様。従来のものとの大きな違いは処理能力が大きく向上している。</p>
										<p>システムには富士通製サーバー<i>PRIMERGY</i>を400台ほど使っているとみられる。</p>
										<blockquote>
												<p>参考：<a href="https://pr.fujitsu.com/jp/news/2019/11/5.html" target="_blank">富士通：東証の株式売買システム「arrowhead」をバージョンアップ</a></p>
										</blockquote>
										<h1>システム障害の原因はどこか？</h1>
										<h3>原因</h3>
										<ul>
												<li>基本的な情報などを格納するディスク内のメモリーが故障</li>
												<li>バックアプに切り替えたが、切り替わらなかった</li>
										</ul>
										<p><i>アローヘッド</i>では、銘柄名や基準値などの基本情報を格納しているディスクが2つあり、<strong>共有ディスク装置</strong>と呼ばれている。</p>
										<p>今回は午前7時4分に１号機のディスクの故障を検知し、２号機に自動的に切り替わるはずだったが上手くいかなかった。</p>
										<blockquote>
												<p>参考：<a href="https://www.nikkei.com/article/DGXMZO64506130R01C20A0EA2000/" target="_blank">日経：東証売買停止</a></p>
										</blockquote>
										<h1>どういうシステムなのか</h1>
										<p>開発の経緯は<i>publickey</i>さんのサイトの記事がありました。</p>
										<p>2005年くらいから刷新を考え、2007年から本格開発。開発には500名以上のメンバーが関わっているそうです。</p>
										<p>2010年1月から本番稼働をしているようですね。</p>
										<p>銘柄ごとに機能分散し、ハードディスクを使わず、全てインメモリデータベースを使うことで<strong>2ミリ秒レベル</strong>の高速性を実現しているとあります。</p>
										<p>また、3台のサーバーで同期コピーを行うことで信頼性を確保しているそうです。</p>
										<h1>障害の責任は？</h1>
										<p>東京証券取引所は2020年10月1日夕方に記者会見を開き、システム障害で取引が停止した問題について謝罪。東証の<strong>宮原浩一郎社長</strong>は、この事態について<strong>「責任の所在は、市場運営者として我々に全面的にある」</strong>と述べた。</p>
										<p>また、<strong>「富士通に対する損害賠償は現時点では考えていない」</strong>をも述べています。</p>
										<h1>感想</h1>
										<p>アローヘッドのような止めちゃいけないシステム開発とか、 自分が責任者だったらと思うとゾッとしますね。 HFTシステムの仕組みなども分かり、 障害を気に少し勉強が捗りました。 東証CIO横山さん、 この方について周りの評価が高く 現代の会見での見本となる人材が いらっしゃるのが分かったことも 大きな収穫でした、見習いたいです。 その昔20年位前、<strong>F通</strong>さんで<strong>某最近の話題になった事件のシステム開発</strong>を
												していたのを思い出しました。 その時は開発者の規模が多すぎて何人いるか分からないのと、 そんな人数が窓のない部屋で一斉に作業 かつ、24時間365日営業中という、 素敵な開発現場だったなーという思い出です。 まさに<strong>開発を止めるな</strong>でした。 月の労働時間はMAX300時間くらいでしたかねwww</p>
										<h1>雑談</h1>
										<h2>真の原因は?!?!?!</h2>
										<p>どうやら芸能人の結婚報道があると 株価が大暴落したりするジンクスがあるそうです。</p>
										<ul>
												<li>堀北真希ショック　−895円</li>
												<li>木村沙羅ショック　−298円</li>
												<li>福山雅治ショック　−714円</li>
												<li>釈由美子ショック　−203円</li>
												<li>北川景子ショック　−479円</li>
												<li>優香ショック　　　−582円</li>
												<li>押切もえショック　−307円</li>
												<li>小倉優子ショック(再婚)　−1010円</li>
										</ul>
										<ul>
												<li>石原さとみショック　・・・東証物理破壊</li>
										</ul>
										<p>ちなみに<strong>石原さとみさん(本名:石神国子)</strong>は、発表前に止めているので他の人より スケールが大きいですね。 どこかのあの宗教ではありませんが、 神様はいるのかもしれません。 信じるか信じないかは あなた次第といった所でしょうか。</p>
										<h2>フェイルオーバー</h2>
										<p>システムなどでで異常事態が発生したとき 自動的に冗長な待機系システムに切り換える機能のことを<strong>フェイルオーバー</strong>といいます。 本命とセカンド・・などで二股三股をかけておいて 本命と別れたら自動的にセカンドが本命に昇格する。 これを人間フェイルオーバーと言うとか言わないとか。 さとみんも一般男性にフェイルオーバーしていたのかなぁ・・・。 一般男性とかけて、 東証のシステムと説きます。</p>
										<p>その心は</p>
										<p>どちらも石原さとみなら<strong>簡単に落とせるでしょう!!!</strong></p>
										<h2>作者の情報</h2>
										<p>乙pyのHP： <a href="http://www.otupy.net/" target="_blank">http://www.otupy.net/</a></p>
										<p>Youtube： <a href="https://www.youtube.com/channel/UCaT7xpeq8n1G_HcJKKSOXMw" target="_blank">https://www.youtube.com/channel/UCaT7xpeq8n1G_HcJKKSOXMw</a></p>
										<p>Twitter： <a href="https://twitter.com/otupython" target="_blank">https://twitter.com/otupython</a></p>
								</div>
						</div>
						<div class="main-article-grad-btn-wrapper">
								<label class="main-article-grad-btn" for="trigger4">
								<span class="fa fa-chevron-down"></span>
						</label>
						</div>
				</div>
				<footer>興味アリ</footer>
		</article>
		<article class="main-article">
				<header>
						<h1>Qiita開設</h1>
						<div class="main-article-subinfo">
								<p class="name committee">Qiitaコピペ委員会</p>
								<p><time datetime="2020-10-04T01:55:40">2020/10/4 1:55</time></p>
						</div>
						<div class="main-article-summary">
								<p>
										そろそろコピペが面倒くさくなってきたので、本当のクソ記事です。
								</p>
						</div>
				</header>
				<div class="main-article-grad-wrap">
						<!-- id="trigger{id}の変更できるようにする" -->
						<input id="trigger5" class="main-article-grad-trigger" type="checkbox">
						<div class="main-article-grad-item">
								<div class="main-article-body">
										<h1>★Qiita開設★</h1>
										<h2>Qiita開設の目的</h2>
										<p>インプットばかりの日々とさよならするため、本ブログを開設することを決意。インプットした情報をまとめて、アウトプットしていきたいと思います。例えば↓</p>
										<ul>
												<li>技術書のまとめ</li>
												<li>自己啓発本のまとめ</li>
												<li>IT勉強会のまとめ</li>
												<li>資格取得までの道のり</li>
										</ul>
										<h1>参考</h1>
										<p><a href="https://qiita.com/shizuma/items/8616bbe3ebe8ab0b6ca1#%E5%8F%82%E8%80%83" target="_blank">Qiita Markdown 書き方 まとめ</a></p>
								</div>
						</div>
						<div class="main-article-grad-btn-wrapper">
								<label class="main-article-grad-btn" for="trigger5">
								<span class="fa fa-chevron-down"></span>
						</label>
						</div>
				</div>
				<footer>興味アリ</footer>
		</article>
		<article class="main-article">
				<header>
						<h1>命名規約について(駄文)</h1>
						<div class="main-article-subinfo">
								<p class="name committee">Qiitaコピペ委員会</p>
								<p><time datetime="2020-10-04T02:01:40">2020/10/4 2:01</time></p>
						</div>
						<div class="main-article-summary">
								<p>
										そろそろコピペが面倒くさくなってきたので、本当のクソ記事です。(コピペ)
								</p>
						</div>
				</header>
				<div class="main-article-grad-wrap">
						<!-- id="trigger{id}の変更できるようにする" -->
						<input id="trigger6" class="main-article-grad-trigger" type="checkbox">
						<div class="main-article-grad-item">
								<div class="main-article-body">

										<h1>駄文と書いて、セーフティネットひいてます。</h1>
										<p>昔は10年程度しかプログラマーとかやっていましたが、命名規約は大事です。 とはいうものの、活躍する場所次第だと思いますので、</p>
										<ul>
												<li>金融機関の基幹系</li>
												<li>移動通信の基幹系</li>
												<li>予備校システム</li>
										</ul>
										<p>とか言えば、あたりがつく方はいるかな。</p>
										<p>unityでも命名規約は大事だと思っていて、子どもたちのオブジェクトの名前を見ていると頭が痛くなることも多々あります。 ただ、これは職業病であって、子供たちはあとから命名規約の大切さを知ればいいと思いますよ。 とはいうものの、 a;:kfa:mi;rewmi@pqv]:,p みたいなプロジェクト名とか、周りの人ノーツッコミで放置されていると、それはなんだかちょっと違くないかい。 言の葉とかいいますが、名前あっての大切さというのはマインドでどうにでもなると思うので、一生ひとりで作品作って、過去作を顧みない以外は、命名規約というカタい言葉とも付き合っていってほしいです。</p>
										<blockquote>
												<p>余談ですが、 Character Controller　を扱うための変数が　Character Controller　になっているのを見ると、毎回脳内で「デュヘイン、デュヘイン」(※)しています。 ※...吼え立てよ、我が憤怒(ラ・グロンドメント・デュ・ヘイン)</p>
										</blockquote>
								</div>
						</div>
						<div class="main-article-grad-btn-wrapper">
								<label class="main-article-grad-btn" for="trigger6">
								<span class="fa fa-chevron-down"></span>
						</label>
						</div>
				</div>
				<footer>興味アリ</footer>
		</article>
		<article class="main-article">
				<header>
						<h1>初投稿！！</h1>
						<div class="main-article-subinfo">
								<p class="name committee">Qiitaコピペ委員会</p>
								<p><time datetime="2020-10-04T02:07:40">2020/10/4 2:07</time></p>
						</div>
						<div class="main-article-summary">
								<p>
										そろそろコピペが面倒くさくなってきたので、本当のクソです。
								</p>
						</div>
				</header>
				<div class="main-article-grad-wrap">
						<!-- id="trigger{id}の変更できるようにする" -->
						<input id="trigger7" class="main-article-grad-trigger" type="checkbox">
						<div class="main-article-grad-item">
								<div class="main-article-body">
										<h1>投稿していく記事について</h1>
										<p>何かインターネット上にアウトプットする練習がしたい。でも何をしたらよいかわからない。 ということで、いつもお世話になっているQiitaで投稿を始めることにしました。 書く記事としては今のところ主に下の二つくらいかなと考えています。 アウトプットに慣れて様々なジャンルの記事が書けるように頑張りたいと思います！！</p>
										<h1>AtCoder記</h1>
										<p>何か新しいシステムやアプリを作ることができないか、日々考えながら生活していますが どうもアイディアが浮かばない。浮かんだとしてもそれは二番煎じのものであったり、 既存システムの派生したものしか浮かんでこない、、。 「どうしたらよいものか、、」と思うことは多々ありますが、兎にも角にも新しいアイディアというものは斬新な考え方と柔軟な発想からできているなぁとよく思います。 僕自身、この二つのどちらかでも持ち合わせているとよいのですが、そうじゃないのが現実。でも、考え方や発想というものは鍛えることができると思うのでここにその日記をつけていきたいと思います。<del>（こういうように宣言しないと続かないのが事実）</del>温かい目で見守ってもらえるとありがたいです。
												また、「この部分こういう考えのほうがスマートじゃん！」や「もっと改善できる」などの アイディアがあればぜひぜひお願いいたします。</p>
										<h1>システム・アプリ開発記</h1>
										<p>アイディアを浮かべるだけでなくアウトプットもしなければいけないと思うので、AtCoder記とは別で作成途中のシステムを記事に起こしていこうと思います。 正直、開発に関してはあんまり得意ではないのでこちらの更新は少々遅めになると思います。 最近はLINEを扱って何かできないかという記事を漁りながらシステムを作成中です。 皆さんが面白そうだけど、自分ではやる気にならないと思うようなことでもアイディアの一つとして教えていただければ幸いです！</p>
										<h1>終わりに</h1>
										<p>普段、TwitterやInstagramのアカウントを持っているのに全く投稿しない僕としてはかなり珍しく文章を書いています。自分でもびっくりです。 この調子で他の記事も続けて出せるように時間を作って頑張ります。</p>
										<p>ではまた次回、別の記事でお会いしましょう。</p>
								</div>
						</div>
						<div class="main-article-grad-btn-wrapper">
								<label class="main-article-grad-btn" for="trigger7">
								<span class="fa fa-chevron-down"></span>
						</label>
						</div>
				</div>
				<footer>興味アリ</footer>
		</article>
		<article class="main-article">
				<header>
						<h1>[TinkerCad]Webモデリングソフトを使って見た</h1>
						<div class="main-article-subinfo">
								<p class="name committee">Qiitaコピペ委員会</p>
								<p><time datetime="2020-10-04T02:13:40">2020/10/4 2:13</time></p>
						</div>
						<div class="main-article-summary">
								<p>
										駄文です。これを書いた人はなぜ書いたのでしょうか。
								</p>
						</div>
				</header>
				<div class="main-article-grad-wrap">
						<!-- id="trigger{id}の変更できるようにする" -->
						<input id="trigger8" class="main-article-grad-trigger" type="checkbox">
						<div class="main-article-grad-item">
								<div class="main-article-body">
										<h1>所詮 Webと思っているそこ。チョーク投げんぞｵﾗ</h1>
										<p>チョーク投げられた・・・(M</p>
										<p>という茶番は置いておいて。 TinkerCadは本当に使えます。 無料だけどなんとなく難しそうで実際難しいBlenderに比べ、機能は劣るもののとても使いやすい。 初心者にオススメ、と言ったところでしょうか。私は最初、<strong>"cgが綺麗じゃない"</strong>なんて思ってましたが、 モデリングソフトなのですから・・ それに光沢などはあとでつければいい話。 直感的な操作で、<del>Blenderとは大違い</del>使いやすいです。
												Circuitもなかなか面白いソフトですし、無料のソフトということでこの際導入して見てはいかがでしょうか。
										</p>
								</div>
						</div>
						<div class="main-article-grad-btn-wrapper">
								<label class="main-article-grad-btn" for="trigger8">
								<span class="fa fa-chevron-down"></span>
						</label>
						</div>
				</div>
				<footer>興味アリ</footer>
		</article>
</main>
@endsection
