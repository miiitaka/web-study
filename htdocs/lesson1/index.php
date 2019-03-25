<!DOCTYPE html>
<html lang="ja">
	<head>
	<meta charset="UTF-8">
	<title>ZOO LOGICAL</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css" media="screen and (max-width:480px)">
	</head>

	<body>
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

		<div id="graphic">
			<ul>
				<li class="now">
					<img src="images/graphic1.png" alt="「ペンギンのすみか」が4月25日にオープン！遊びにきてね！" class="image1">
				</li>
				<li>
					<img src="images/graphic2.png" alt="ZOO LOGICALにパンダが登場！5月10日から6月29日まで" class="image2">
				</li>
				<li>
					<img src="images/graphic3.png" alt="トラさんが「みんなの来場を待ってるよ！」と言っている。" class="image3">
				</li>
			</ul>
		</div>
	<!-- contents -->
		<div id="contents">
			<div id="main">
				<section id="news">
					<h2>お知らせ</h2>
					<ul>
						<?php
							$date = [
								'2014-07-25',
								'2014-05-10',
								'2014-04-25'
							];
							$title = [
								'動物園にライオンがやってきます。',
								'緊急企画『パンダ展』開催します。',
								'ゴールデンウィーク展『ペンギンのライフスタイル』を開催します。'
							];
							for($i = 0; $i < 3; $i++) {
								echo '<li><time datetime="' . $date[$i] . '">' .  date('Y年m月d日', strtotime($date[$i])) . '</time>' . $title[$i] . '</li>';
							}
						?>
						<!-- <li><time datetime="2014-07-25">2014年07年25日</time>動物園にライオンがやってきます。</li>
						<li><time datetime="2014-05-10">2014年05月10日</time>緊急企画『パンダ展』開催します。</li>
						<li><time datetime="2014-04-25">2014年04月25日</time>ゴールデンウィーク展『ペンギンのライフスタイル』を開催します。</li> -->
					</ul>
				</section>
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
		<script src="js/slideshow.js"></script>
	</body>
</html>
