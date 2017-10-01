<!DOCTYPE HTML>



<html>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon-16x16.png">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	

	<script>

		// Wait for the DOM to be ready (all elements printed on page regardless if loaded or not)
		$(function() {

		    // Bind a click event to anything with the class "hamburger"
		    $('.hamburger').click(function() {
		        
		          // Toggle the Body Class "show-nav"
		          $('body').toggleClass('show-nav');

		          // Deactivate the default behavior of going to the next page on click 
		          return false;

		    });
		});

		// Wait for the DOM to be ready (all elements printed on page regardless if loaded or not)
		$(function() {

		    // Bind a click event to anything with the class "search-link"
		    $('.search-link').click(function() {
		        
		          // Toggle the Body Class "show-search"
		          $('body').toggleClass('show-search');

		      //    $('.search-input').focus();

		      		setTimeout( function(){ $( '.search-input' ).focus(); }, 200 );

		        	document.body.scrollTop = document.documentElement.scrollTop = 0;


		          


		          // Deactivate the default behavior of going to the next page on click 
		          return false;

		    });


		    $( document ).on( 'keydown', function ( e ) {

			    if ( e.keyCode === 27 ) {

			    	if($('.show-search').is(':visible')) {

			      	  $('body').toggleClass('show-search');

			      	}
			    }
			})

		});

		


	</script>

<?php wp_head(); ?>

</head>



<body>

<section class="grid-container">

	<div class="row header large-wrapper">

		<div class="header__logo col-s-6 col-m-3">
			<a href="<?php echo get_home_url(); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100.11 26.04" class="header__logo__svg"><defs><style>.cls-1{fill:#231f20;}.cls-2{fill:#c2f9f1;}.cls-2,.cls-3{stroke:#000;stroke-miterlimit:10;}.cls-3{fill:#87d8d0;}</style></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M37.84,14.45H36.08l-.36.88H34.6l1.88-4.67h1l1.84,4.67H38.2Zm-.29-.83L37,12l-.58,1.57Z"/><path class="cls-1" d="M40.94,15.33l.75-4.67h.9l1.16,2.79,1.16-2.79h.9l.75,4.67H45.48l-.37-2.79-1.17,2.79h-.38l-1.17-2.79L42,15.33Z"/><path class="cls-1" d="M51.43,14.45H49.66l-.36.88H48.19l1.88-4.67h1l1.84,4.67H51.78Zm-.29-.83L50.56,12,50,13.62Z"/><path class="cls-1" d="M55,10.66l1.18,3,1.18-3h1.16l-2,4.67h-.73l-2-4.67Z"/><path class="cls-1" d="M61.34,10.66v4.67H60.26V10.66Z"/><path class="cls-1" d="M64.74,14.77l.23-.25a.12.12,0,0,1,.2,0,.71.71,0,0,0,.52.27c.31,0,.64-.18.64-.74V11a.12.12,0,0,1,.12-.12h.42A.12.12,0,0,1,67,11v3.07a1.28,1.28,0,0,1-2.27.86A.13.13,0,0,1,64.74,14.77Z"/><path class="cls-1" d="M71.22,10.81a2.29,2.29,0,1,1-2.28,2.3A2.29,2.29,0,0,1,71.22,10.81Zm0,4a1.67,1.67,0,1,0-1.65-1.67A1.67,1.67,0,0,0,71.22,14.77Z"/><path class="cls-1" d="M75.43,11a.12.12,0,0,1,.12-.12H76a.12.12,0,0,1,.12.12v2.68a1.06,1.06,0,1,0,2.12,0V11a.12.12,0,0,1,.12-.12h.43a.12.12,0,0,1,.12.12v2.72a1.73,1.73,0,0,1-3.46,0Z"/><path class="cls-1" d="M81.09,11a.12.12,0,0,1,.12-.12h1.73a1.37,1.37,0,0,1,1.39,1.36,1.41,1.41,0,0,1-.94,1.29l.87,1.62a.12.12,0,0,1-.11.18h-.48a.14.14,0,0,1-.13-.08l-.83-1.66h-1V15.2a.12.12,0,0,1-.12.12h-.41a.12.12,0,0,1-.12-.12Zm1.8,2a.79.79,0,0,0,.78-.79.78.78,0,0,0-.78-.76H81.76V13Z"/><path class="cls-1" d="M86.34,10.92a.12.12,0,0,1,.12-.11h.05a.2.2,0,0,1,.19.1L89.37,14h0V11a.12.12,0,0,1,.12-.12h.41A.12.12,0,0,1,90,11v4.28a.12.12,0,0,1-.12.11h-.06a.2.2,0,0,1-.19-.09L87,12.11h0v3.1a.12.12,0,0,1-.12.12h-.4a.12.12,0,0,1-.12-.12Z"/><path class="cls-1" d="M91.73,15.16l2-4.28a.15.15,0,0,1,.11-.07h.06a.15.15,0,0,1,.11.07l1.94,4.28a.11.11,0,0,1-.11.17h-.4a.15.15,0,0,1-.15-.1l-.39-.87H92.77l-.39.87a.16.16,0,0,1-.15.1h-.4A.11.11,0,0,1,91.73,15.16Zm2.88-1.35-.78-1.74h0L93,13.81Z"/><path class="cls-1" d="M97.6,11a.12.12,0,0,1,.12-.12h.42a.12.12,0,0,1,.12.12v3.74H100a.12.12,0,0,1,.12.12v.35a.12.12,0,0,1-.12.12H97.73a.12.12,0,0,1-.12-.12Z"/><rect class="cls-2" x="4.69" y="4.14" width="16.57" height="16.57" transform="translate(12.57 -5.54) rotate(44.94)"/><polygon class="cls-2" points="18.52 10.8 12.99 16.35 9.75 13.12 7.44 10.81 9.74 8.51 12.98 11.73 16.21 8.5 18.52 10.8"/><polygon class="cls-3" points="22.98 10.71 12.99 20.72 2.98 10.74 5.2 8.51 12.98 16.28 20.76 8.49 22.98 10.71"/><polygon class="cls-3" points="25.21 13.01 20.68 8.49 18.38 10.81 20.72 13.14 12.99 20.89 5.22 13.13 7.53 10.81 5.22 8.51 0.71 13.03 0.73 13.06 0.71 13.08 12.99 25.33 25.21 13.1 25.16 13.05 25.21 13.01"/></g></g></svg></a>
		</div>

		<nav class="header__nav col-s-6 col-m-6">

			<div class="hamburger">

				<div class="hamburger__line"></div>

			</div>

			<div class="header__nav__list">

				<ul>

					<?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>

				</ul>

			</div>

		</nav>

		<div class="header__search col-m-3">
			
			<div class="header__search__link">
				<a href="#" class="search-link">
					<div class="search-link__icon"></div>Search</a>
			</div>


		</div>

	</div>

	<div class="search-overlay">
		
		<div class="row">
			<div class="search-overlay__content col-s-12">
				<div class="search-overlay__form row wrapper">
					<div class="col-m-offset-2 col-m-8">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="search-overlay__close">
			<a href="#" class="search-link">
				<div class="search-overlay__close-lines"></div>Close
			</a>
		</div>
		
	</div>



	<div class="inner-page">
