<?php get_header(); ?>

		
		<div class="search">

			<div class="page-header page-header--search row wrapper">
				
				<?php global $wp_query; $total_results = $wp_query->found_posts;?>

				<?php $query = new WP_Query( array( 'posts_per_page' => 2 ) );?>



				<?php if ( have_posts() ) : ?>
					<h1>Search Results for <?php echo get_search_query(); ?></h1>

					<div>Your search for <?php echo get_search_query(); ?> returned <?php echo $total_results ?> results.</div>

					<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<label for="search-input" class="h2 h2--listing search-label">Search for content</label>
						<input type="text" name="s" class="search-input" value="<?php the_search_query(); ?>">
						<button type="submit" class="button button--search">Search</button>
					</form> 

					<?php get_template_part( 'listing' ); ?>


					<?php get_template_part( 'pagination' ); ?>

				<?php else : ?>
					<h1>Nothing found</h1>

					<div>There were no results matching your search. Try searching for something else.</div>

					<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<label for="search-input" class="h2 h2--listing search-label">Search for content</label>
						<input type="text" name="s" class="search-input" value="<?php the_search_query(); ?>">
						<button type="submit" class="button button--search">Search</button>
					</form> 
				<?php endif; ?>

			</div>

		</div>

<?php get_footer(); ?>