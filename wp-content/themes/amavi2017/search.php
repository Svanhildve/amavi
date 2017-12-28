<?php get_header(); ?>
		
		<div class="search">
				
			<?php global $wp_query; $total_results = $wp_query->found_posts;?>

			<div class="search-page__heading row wrapper">

				<div class="col-s-12">
				
					<h1 class="h1--search">

						<? if ( have_posts() ) {
						   echo 'Search results';
						} 
						else {
							echo 'Nothing found';
						}
						?>
							
					</h1>

					<div class="search-intro">

						<? 
						if ( have_posts() && ($total_results > 1)) {
							echo 'Your search for "', get_search_query(), '" returned ', $total_results, ' results';
						}

						else if ( have_posts() && ($total_results == 1)) {
							echo 'Your search for "', get_search_query(), '" returned ', $total_results, ' result';
						} 

						else {
							echo 'There were no results matching your search. Try searching for something else.';
						}

						?>		

					</div>

					<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<label for="search-input" class="search-label visuallyhidden">Search for content</label>
						<input type="text" name="s" class="search-page-input" value="<?php the_search_query(); ?>">
						<button type="submit" class="button button--search">Search</button>
						<!--<button type="submit" class="button button--ghost">Search</button>-->
					</form> 

				</div>

			</div>

<!-- LIMT INN -->

			<div class="listing">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'listing' ); ?>

				<?php endwhile; ?>

			</div>

			<?php if ($wp_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>

				<?php get_template_part( 'pagination' ); ?>

			<?php } ?>

			<?php else: ?>

			
<!-- LIMT INN -->


			</div>

			<?php endif; ?>

			

		</div>

<?php get_footer(); ?>