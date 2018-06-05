<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php wp_head(); ?>
</head>
<body>
  <header>
    <h1>
      <a href="index.html">
				<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
				$format = '<img src="' . $image[0] . '"';
				$format .= ' width="' . $image[1] . '"';
				$format .= ' height="' . $image[2] . '"';
				$format .= ' alt="' . esc_attr( get_bloginfo( 'name' )) . '">';
				echo $format;
				?>
      </a>
    </h1>
  </header>

  <nav class="nav-global">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary'
		) );
		?>
  </nav>
