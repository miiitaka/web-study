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
		<article>
			<h1>404 Not Found</h1>
			<p>お探しのページが見つかりませんでした。</p>
		</article>
	</main>

	<?php get_sidebar(); ?>
</div>
<?php get_footer();
