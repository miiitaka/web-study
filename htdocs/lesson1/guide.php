<!DOCTYPE html>
<html lang="ja">
	<head>
	<meta charset="UTF-8">
	<title>ガイドのご案内：ZOO LOGICAL</title>
	<link rel="stylesheet" href="css/style.css">
	</head>

	<body id="guide">
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
				<li>ガイドのご案内</li>
			</ol>
		</div>
	<!-- contents -->
		<div id="contents">
			<div id="main">
				<article>
					<h1>ガイドのご案内</h1>
					<table>
						<caption>
							<strong>開始時刻と集合場所</strong>
							<p>
								飼育員が動物について詳しく解説いたします。
								各ガイドは、事前申し込みは不要ですので、
								開始時刻までに集合場所へ直接おいでください。
								所要時間はすべて20分です。
							</p>
						</caption>
						<thead>
							<tr>
								<th scope="col">動物</th>
								<th scope="col">開始時刻</th>
								<th scope="col">集合場所</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$name = ['ゴリラ', 'パンダ', 'トラ', 'ホッキョクグマ', 'ライオン', 'シマウマ'];
								$time = ['10時00分', '12時00分', '15時00分', '10時30分', '13時00分', '14時30分'];
								$place = ['第一森エリア入口', '第二森エリア入口', '第三森エリア入口', '海エリア入口', '第一草原エリア入口', '第二草原エリア入口'];
								
								for($i = 0; $i < 6; $i++) {
									echo <<< EOM
									<tr>
										<td class="animal_name">{$name[$i]}</td>
										<td>{$time[$i]}</td>
										<td>{$place[$i]}</td>
									</tr>
EOM;
								}
							?>
							<!-- <tr>
								<td class="animal_name">ゴリラ</td>
								<td>10時00分</td>
								<td>第一森エリア入口</td>
							</tr>
							<tr>
								<td class="animal_name">パンダ</td>
								<td>12時00分</td>
								<td>第二森エリア入口</td>
							</tr>
							<tr>
								<td class="animal_name">トラ</td>
								<td>15時00分</td>
								<td>第三森エリア入口</td>
							</tr>
							<tr>
								<td class="animal_name">ホッキョクグマ</td>
								<td>10時30分</td>
								<td>海エリア入口</td>
							</tr>
							<tr>
								<td class="animal_name">ライオン</td>
								<td>13時00分</td>
								<td>第一草原エリア入口</td>
							</tr>
							<tr>
								<td class="animal_name">シマウマ</td>
								<td>14時30分</td>
								<td>第二草原エリア入口</td>
							</tr> -->
						</tbody>
					</table>
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
