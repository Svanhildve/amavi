<?php get_header(); ?>
		
		<div class="category-page">
			
			<div class="category-page__heading row wrapper">
			
				<div class="category-page-label">Category</div>
				<h1 class="h1 h1--category"><?php single_cat_title(); ?></h1>

			</div>	

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'listing' ); ?>

			<?php endwhile; ?>

			<?php if ($wp_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>

				<?php get_template_part( 'pagination' ); ?>

			<?php } ?>

			<?php else: ?>
					
			<div class="row wrapper listing--empty">
				<div class="col-s-12">
					<p><?php _e('There are no posts in this category'); ?></p>
				</div>
			</div>
				
			<?php endif; ?>
			
		</div>

<?php get_footer(); ?>
