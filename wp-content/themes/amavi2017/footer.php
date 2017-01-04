
	<footer class="row footer">

		<div class="footer__content wrapper">
		
			<div class="col-s-12 col-m-6 footer__about">
				<em>Avami Journal</em>
				<p>This website is a blog made by and for young creative professionals. Quisque eget mauris ut orci semper ornare. Maecenas et cursus tellus, quis ultrices turpis. Vivamus aliquam arcu vitae ligula convallis, ullamcorper vestibulum nisl varius.</p>
			</div>

			<div class="col-s-12 col-m-3 footer__nav">

				<nav>
					<ul>

						<?php wp_nav_menu( array( 'theme_location' => 'secondary-nav' ) ); ?>

					</ul>
				</nav>	

			</div>

			<div class="col-s-12 col-m-3 footer__some">

				<a href="#">Amavi Journal on facebook</a>

			</div>

		</div>

	</footer>

</div>

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

		// Toggle with hitting of ESC
		$(document).keyup(function(e) {
		    if (e.keyCode == 27) {
		        $('body').toggleClass('show-nav');
		        // $('body').removeClass('show-nav');
		    }
		});

	</script>
			
	
<?php wp_footer(); ?> 

</body>
</html>