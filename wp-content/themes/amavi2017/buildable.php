<?php

// check if the flexible content field has rows of data
if( have_rows('single_blocks') ):

	// loop through the rows of data
	while ( have_rows('single_blocks') ) : the_row();

		if( get_row_layout() == 'wide_image' ): 

			// $img_id = get_post_thumbnail_id(get_the_ID()); 
			// $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); 
			// 

			

			$image = get_sub_field( 'wide_image_field' ); 
			$args = array( 'class' => 'picture-wide__image' );
			$alt_text = get_post_meta(get_sub_field( 'wide_image_field' ), '_wp_attachment_image_alt', true);

			if ( $image ) { ?>

				<div class="row wrapper">

					<div class="picture-wide col-s-12">

						<?php echo wp_get_attachment_image( $image, 'full', false, $args ); ?>

						<!--<img src="<?php echo esc_url( $image ); ?>" class="picture-wide__image" alt="<?php echo $alt_text; ?>" />-->

					</div>

				</div>

			<?php
			} ; // End if $image

		elseif( get_row_layout() == 'content' ): 

			$content = get_sub_field( 'content_field' ); 

			if ( $content ) { ?>

				<div class="row">

					<div class="single-post__article col-s-12 col-ml-8 col-ml-offset-2">			
										
						<?php echo $content; ?>		

					</div>

				</div>

			<?php
			} ; // End if $content


		elseif( get_row_layout() == 'blockquote' ): 

			$blockquote = get_sub_field( 'blockquote_field' ); 

			if ( $blockquote ) { ?>

				<div class="row">

					<div class="blockquote col-s-12 col-ml-10 col-ml-offset-1">

						<p><?php echo $blockquote; ?></p>

					</div>

				</div>

			<?php
			} ; // End if $content


		elseif( get_row_layout() == 'two_images' ): 

			$largeimage = get_sub_field( 'large_image_field' ); 
			$smallimage = get_sub_field( 'small_image_field' ); 

			$largeleft = get_sub_field('image_placement') == "large_image_left";
			$largeright = get_sub_field('image_placement') == "large_image_right";

			$alt_text = get_post_meta($largeimage , '_wp_attachment_image_alt', true);


			if ( $largeimage && $smallimage && $largeleft ) { ?>


				<div class="row wrapper">

					<div class="two-pictures">

						<div class="two-pictures-one col-s-12 col-ml-8">
							
							<img src="<?php echo esc_url( $largeimage ); ?>" class="two-pictures__image" alt="<?php echo $alt_text; ?>" />

						</div>

						<div class="two-pictures-two col-s-12 col-ml-4">

							<img src="<?php echo esc_url( $smallimage ); ?>" class="two-pictures__image" />

						</div>

					</div>

				</div>

			<?php
			} ; // End if $image

			if ( $largeimage && $smallimage && $largeright ) { ?>


				<div class="row wrapper">

					<div class="two-pictures">

						<div class="two-pictures-one col-s-12 col-ml-8">
							
							<img src="<?php echo esc_url( $smallimage ); ?>" class="two-pictures__image" />

						</div>

						<div class="two-pictures-two col-s-12 col-ml-4">

							<img src="<?php echo esc_url( $largeimage ); ?>" class="two-pictures__image" />

						</div>

					</div>

				</div>

			<?php
			} ; // End if $image


		endif;

	endwhile;

else :

// no layouts found

endif;

?>