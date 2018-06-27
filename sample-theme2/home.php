<?php get_header(); ?>

<nav id="slider">
	<ul>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/visual_image1.jpg" width="830" height="355" alt="一人ひとりに向き合った医療を"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/visual_image2.jpg" width="830" height="355" alt="充実の検査を快適な空間でソライロ病院の人間ドック"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/visual_image3.jpg" width="830" height="355" alt="看護師募集中"></li>
	</ul>
</nav>

<div class="contents">
	<main>
		<section class="topics">
			<h2>トピックス</h2>
			<ul>
				<li>
					<time datetime="2015-06-12">2015年06月12日</time>
					セカンドオピニオン外来を開始いたします。
				</li>
				<li>
					<time datetime="2015-05-23">2015年05月23日</time>
					6月より最新MRI検査機が2台に増えます。
				</li>
				<li>
					<time datetime="2015-05-01">2015年05月01日</time>
					平成27年度10月採用予定の看護師を募集します。
				</li>
				<li>
					<time datetime="2015-04-20">2015年04月20日</time>
					当院が緊急時避難ビルに指定されました。
				</li>
			</ul>
		</section>
	</main>

	<?php
	get_sidebar();
	get_footer();
