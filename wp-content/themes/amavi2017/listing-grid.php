<div class="listing listing--grid row wrapper">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



	<?php endwhile; else: ?>

	<div class="row wrapper category-page--empty">
		<div class="col-s-12">
			<p><?php _e('There are no featured posts'); ?></p>
		</div>
	</div>

	<?php endif; ?>
</div>