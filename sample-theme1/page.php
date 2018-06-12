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
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article>
					<?php the_title( '<h1>', '</h1>' ); ?>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
	</main>

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
