<?php get_header(); ?>

<nav class="nav-breadcrumb">
	<?php
		if ( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) {
			echo do_shortcode( '[wp-structuring-markup-breadcrumb]' );
		}
	?>
</nav>

<div class="contents">
	<main>
		<section>
			<h2><?php echo get_search_query(); ?></h2>
			<ul class="contents-news">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<li>
							<?php the_title(); ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_permalink(); ?>
							</a>
							<?php the_excerpt(); ?>
						</li>
					<?php endwhile; ?>
				<?php else: ?>
					<li>現在お知らせはありません。</li>
				<?php endif; ?>
			</ul>
		</section>
	</main>

	<?php get_sidebar(); ?>
</div>
<?php get_footer();
