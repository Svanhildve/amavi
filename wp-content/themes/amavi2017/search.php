<?php get_header(); ?>
		
		<div class="search">

			<div class="page-header page-header--search row wrapper">

				<?php if ( have_posts() ) : ?>
					<h1>Search Results for: <?php echo get_search_query(); ?></h1>

				<?php else : ?>
					<h1>Nothing found</h1>
				<?php endif; ?>

			</div>

			<?php get_template_part( 'listing' ); ?>

		</div>

<?php get_footer(); ?>