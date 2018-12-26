<?php get_header(); ?>
  <nav class="nav-breadcrumb" id="graphic">
    <ul>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/graphic1.png" alt="「ペンギンのすみか」が4月25日にオープン！遊びに来てね！" class="image1"></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/graphic2.png" alt="ZOO LOGICALにパンダが登場！5月10日から6月29日まで" class="image2"></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/graphic3.png" alt="トラさんが「みんなの来場を待ってるよ！」と言っている。" class="image3"></li>
    </ul>
  </nav>

  <div class="contents">
    <main>
      <section>
        <h2>お知らせ</h2>
        <ul class="contents-news">
					<?php while( have_posts() ) : the_post(); ?>
						<li>
							<time datetime="<?php the_time( 'Y-m-d' ); ?>">
								<?php the_time( get_option( 'date_format' ) ); ?>
							</time>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
					<?php endwhile ?>
        </ul>
      </section>
    </main>
		<?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>