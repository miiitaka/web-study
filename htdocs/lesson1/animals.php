<!DOCTYPE html>
<html lang="ja">
	<head>
	<meta charset="UTF-8">
	<title>人気の動物たち：ZOO LOGICAL</title>
	<link rel="stylesheet" href="css/style.css">
	</head>

	<body id="animals">
		<header id="top">
			<h1><a href="https://www.yahoo.co.jp" target="_blank">
				<img src="images/logo.png" alt="ZOO LOGICAL" width="244" height="76">
			</a></h1>
		</header>

<!--
		<div class="left"></div>
		<div class="right"></div>
-->
		<nav>
			<ul>
				<li id="nav_about">
					<a href="about.html">
						動物園について
					</a>
				</li>
				<li id="nav_guide">
					<a href="guide.html">
						ガイドのご案内
					</a>
				</li>
				<li id="nav_animals">
					<a href="animals.html">
						人気の動物たち
					</a>
				</li>
				<li id="nav_contact">
					<a href="contact.html">
						お問い合わせ
					</a>
				</li>
			</ul>
		</nav>

		<div id="path">
			<ol>
				<li><a href="index.html">ホーム</a></li>
				<li>人気の動物たち</li>
			</ol>
		</div>
	<!-- contents -->
		<div id="contents">
			<div id="main">
				<article>
					<h1>人気の動物たち</h1>
					<p>
						ZOO LOGICALでは、特にゴリラ、ホッキョクグマなどが人気です。動物たちも皆さんに会えるのを楽しみにしています。ぜひ、会いに来てください。
					</p>
					<?php
						$name = ['ゴリラ', 'ホッキョクグマ', 'ニホンザル', 'シマウマ', 'ツキノワグマ', 'ヒョウ'];
						$description = [
							'優しい性格で、バナナや葉だけではなく、昆虫も食べる雑食動物です。',
							'泳ぎが大得意で、何十kmも海を泳ぐことができます。',
							'群れを作り集団生活をしています。知能が高く学習能力があります。',
							'名前の由来であるその縞模様は、外敵から身を守る保護色といわれています。',
							'特徴は胸の三日月形の模様です。昼にも活動しますが、実は夜行性です。',
							'ご飯は木の上で食べることもあります。食事の時間にはその姿が見られるかもしれません。'
						];
						for($i = 0; $i < 6; $i++) {
							if($i % 2 == 0) {
								echo '<div class="animals_area">'."\n";
							}
					?>
						<figure>
							<img src="images/animals_photo<?php echo $i + 1; ?>.jpg">
							<figcaption>
								<?php echo $name[$i]; ?><br>
								<?php echo $description[$i]."\n"; ?>
							</figcaption>
						</figure>
					<?php
							if($i % 2 == 1) {
								echo '</div>'."\n";
							}
						}
					?>
				</article>
			</div>
			<div id="sub">
				<aside>
					<div class="bnr_area">
						<a href="guide.html">
							<dl>
								<dt>
									<img src="images/bnr_guide.png" alt="ガイドのご案内">
								</dt>
								<dd>飼育員が動物たちをご紹介</dd>
							</dl>
						</a>
					</div>
					<div class="bnr_area">
						<a href="contact.html">
							<p>
								<img src="images/bnr_contact.png" alt="お問い合わせ">
							</p>
						</a>
					</div>
				</aside>
			</div>
		</div>
	<!-- contents -->
		<footer>
			<p id="pagetop"><a href="#top">ページの先頭に戻る</a></p>
			<address>
				山梨県富士吉田市XXX-XXX
				電話:0120-XXX-XXXX
				営業時間:9:00~17:00(休園日:月曜日、年末年始)
			</address>
			<p id="copyright">
				<small>Copyright 2014 ZOO LOGICAL All rights reserved.</small>
			</p>
		</footer>
	</body>
</html>
