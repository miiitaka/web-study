<?php get_header(); ?>

<nav class="nav-breadcrumb" id="graphic">
	<ul>
		<li class="now"><img class="image1" src="<?php echo get_template_directory_uri(); ?>/images/graphic1.png" width="860" height="300" alt="「ペンギンのすみか」が4月25日にオープン！遊びに来てね！"></li>
		<li><img class="image2" src="<?php echo get_template_directory_uri(); ?>/images/graphic2.png" width="860" height="300" alt="ZOO LOGICALにパンダが登場！5月10日から6月29日まで"></li>
		<li><img class="image3" src="<?php echo get_template_directory_uri(); ?>/images/graphic3.png" width="860" height="300" alt="トラさんが「みんなの来場を待ってるよ！」と言っている。"></li>
	</ul>
</nav>

<div class="contents">
	<main>
		<section>
			<h2>お知らせ</h2>
			<ul class="contents-news">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<li>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
						<?php the_title(); ?>
					</li>
					<?php endwhile; ?>
				<?php else: ?>
					<li>現在はお知らせはありません。</li>
				<?php endif; ?>
			</ul>
		</section>
	</main>

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
