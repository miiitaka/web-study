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
					
						// $dbh = new PDO('mysql:dbname=study07;host:localhost;charset=utf8', 'root', 'root');
						// $sql = 'SELECT * FROM students;';
						// $stmt = $dbh->query($sql);
						// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
						// // print_r($result);
						// 
						// foreach ($result as $data) {
						// 	echo 'ID：' . $data['id'] . '<br>';
						// 	echo '名前：' . $data['name'] . '<br>';
						// 	echo '生年月日：' . $data['birthday'] . '<br>';
						// 	echo '<br>';
						// }
					
						$dbh = new PDO('mysql:dbname=db_animal;host:localhost;charset=utf8', 'root', 'root');
						$sql = 'SELECT * FROM mst_animals;';
						$stmt = $dbh->query($sql);
						$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
						
						// foreach ($results as $result) {
						// 	echo '<figcaption>';
						// 	echo $result['name'] . '<br>';
						// 	echo $result['description'];
						// 	echo '</figcaption>';
						// }
						
						foreach ($results as $result) {
							echo <<< EOM
							<figcaption>
								{$result['name']}<br>
								{$result['description']}
							</figcaption>
EOM;
						}
						
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
