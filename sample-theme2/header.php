<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ) ?>">
<meta charset="viewport" content="width=device-width, initial-scale=1">
<meta charset="theme-color" content="#444444">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<h1>
			<a href="index.html">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="266" height="52" alt="ソライロ病院">
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
