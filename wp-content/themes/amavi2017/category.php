<?php get_header(); ?>
		
		<div class="category-page">
			
			<div class="category-page__heading row wrapper">
			
				<div class="category-page-label">Category</div>
				<h1 class="h1 h1--category"><?php single_cat_title(); ?></h1>

			</div>	

			<?php query_posts('posts_per_page=2'); ?>

			<?php get_template_part( 'listing' ); ?>

			<div class="pagination row wrapper">

				<div class="pagination__body col-s-12">

					<div class="pagination__previous"><?php next_posts_link( 'Previous page' ); ?></div>
					<div class="pagination__current">page 1 of 4</div>
					<div class="pagination__next"><?php previous_posts_link( 'Next page' ); ?></div>

				</div>

			</div>
			
		</div>
<?php get_footer(); ?>
