<!DOCTYPE HTML>



<html>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>


	<!-- må erstatte faviconet -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	

	<script>

		// Wait for the DOM to be ready (all elements printed on page regardless if loaded or not)
		$(function() {

		    // Bind a click event to anything with the class "hamburger"
		    $('.hamburger').click(function() {
		        
		          // Toggle the Body Class "show-nav"
		          $('body').toggleClass(.'show-nav');

		          // Deactivate the default behavior of going to the next page on click 
		          return false;

		    });
		});


	</script>

<?php wp_head(); ?>

</head>



<body>

<section class="grid-container">

	<div class="row header">

		<div class="header__logo col-s-6 col-ml-3">
			Amavi Journal
		</div>

		<nav class="header__nav col-s-6 col-ml-6">

			<div class="hamburger">

				<div class="hamburger__line"></div>

			</div>

			<div class="header__nav__list">

				<ul>

					<?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>

				</ul>

			</div>

		</nav>

		<div class="header__search col-ml-3">
			Search
		</div>

	</div>
