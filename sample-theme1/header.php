<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php wp_head(); ?>
</head>
<body>
	<header>
		<h1>
			<?php
			if ( has_custom_logo() ) {
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image   = wp_get_attachment_image_src( $custom_logo_id, 'full' );
				$format  = '<a href="'  . esc_url( home_url( '/' ) ) . '">';
				$format .= '<img src="' . $image[0] . '"';
				$format .= ' width="'   . $image[1] . '"';
				$format .= ' height="'  . $image[2] . '"';
				$format .= ' alt="'     . esc_attr( get_bloginfo( 'name' )) . '">';
				$format .= '</a>';
				echo $format;
			}
			?>
		</h1>
	</header>

	<?php if ( has_nav_menu( 'global' ) ) : ?>
		<nav class="nav-global">
			<?php
			$args = array(
				'container'      => '',
				'theme_location' => 'global',
				'items_wrap'      => '<ul>%3$s</ul>'
			);
			wp_nav_menu( $args );
			?>
		</nav>
	<?php endif;
