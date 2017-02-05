<?php get_header(); ?>
		
		<div class="category-page">
			
			<div class="category-page__heading row wrapper">
			
				<div class="category-page-label">Category</div>
				<h1 class="h1 h1--category"><?php single_cat_title(); ?></h1>

			</div>

			<?php get_template_part( 'listing' ); ?>
			
		</div>
<?php get_footer(); ?>
