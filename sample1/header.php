<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="stylesheet" href="css/responsive.css" media="screen and (max-width:480px)">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/slide.js"></script>
<?php wp_head(); ?>
</head>
<body>
  <header>
    <h1>
      <a href="<?php home_url( '/' ); ?>">
				<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
				?>
        <img src="<?php echo $image[0]; ?>" width="244" height="76" alt="<?php bloginfo( 'name' ); ?>">
      </a>
    </h1>
  </header>

	<nav class="nav-global">
		<?php 
			wp_nav_menu(
				array(
					'theme_location' => 'global'
				)
			);
		?>
	</nav>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	