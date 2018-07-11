<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ) ?>">
<meta charset="viewport" content="width=device-width, initial-scale=1">
<meta charset="theme-color" content="#444444">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<h1>
			<a href="<?php home_url(); ?>">
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id, 'full');
					$format = '<img'
					$format .= 'src="' . $image[0] . '"';
					$format .= 'width="' . $image[1] . '"';
					$format .= 'height="' . $iamge[2] . '"';
					$format .= 'alt="' . bloginfo( 'name' ). '">';
					echo $format;
				?>
			</a>
		</h1>
	</header>

	<nav>
		<ul>
			<li><a href="policy.html">当病院について</a></li>
			<li><a href="service.html">診療科のご案内</a></li>
			<li><a href="facility.html">施設紹介</a></li>
			<li><a href="inquiry.html">お問い合わせ</a></li>
		</ul>
	</nav>
