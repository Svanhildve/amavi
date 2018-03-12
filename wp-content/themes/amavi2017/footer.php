
		<footer class="footer">

			<div class="footer__content row wrapper">
			
				<div class="col-s-12 col-m-5 footer__about">
					<span class="h6">Avami Journal</span>
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

					<a href="http://facebook.com" target="_blank">

					<span class="facebook-icon">
						
						<svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						        <g id="Footer" transform="translate(-1022.000000, -91.000000)" fill="#FFFFFF">
						            <g id="facebook" transform="translate(1022.000000, 91.000000)">
						                <g id="Facebook">
						                    <path d="M16,0 L2,0 C0.9,0 0,0.9 0,2 L0,16 C0,17.101 0.9,18 2,18 L9,18 L9,11 L7,11 L7,8.525 L9,8.525 L9,6.475 C9,4.311 10.212,2.791 12.766,2.791 L14.569,2.793 L14.569,5.398 L13.372,5.398 C12.378,5.398 12,6.144 12,6.836 L12,8.526 L14.568,8.526 L14,11 L12,11 L12,18 L16,18 C17.1,18 18,17.101 18,16 L18,2 C18,0.9 17.1,0 16,0 L16,0 Z" id="Shape"></path>
						                </g>
						            </g>
						        </g>
						    </g>
						</svg>

					</span>

					<span class="facebook">Amavi Journal on facebook</span></a>

				</div>

			</div>

		</footer>

	</div>

</div>
			
	
<?php wp_footer(); ?> 

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

<script>

window.sr = ScrollReveal();
sr.reveal('.foo', { duration: 2000 }, 50);


</script>

</body>
</html>