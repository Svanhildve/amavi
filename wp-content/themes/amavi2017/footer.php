
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
			
	
<?php wp_footer(); ?> 

</body>
</html>