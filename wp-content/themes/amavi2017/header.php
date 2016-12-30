<!DOCTYPE HTML>



<html>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>


	<!-- må erstatte faviconet -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">	

<?php wp_head(); ?>

</head>



<body>

<section class="grid-container">

	<div class="row header">

		<div class="header__logo">
			Logo
		</div>

		<nav class="header__nav">

			<ul>

				<?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>

			</ul>

		</nav>

		<div class="header__search">
			Search
		</div>

	</div>
