
	<footer class="footer">

		<div class="footer__content row wrapper">
		
			<div class="col-s-12 col-m-5 footer__about">
				<span class="h5">Avami Journal</span>
				<p>This website is a blog made by and for young creative professionals. Quisque eget mauris ut orci semper ornare. Maecenas et cursus tellus, quis ultrices turpis. Vivamus aliquam arcu vitae ligula convallis, ullamcorper vestibulum nisl varius.</p>
			</div>

			<div class="col-s-12 col-m-3 col-m-offset-1 footer__nav">

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