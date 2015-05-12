<?php
/**
 * Template Name: Contact Page
 * @package Modern Minimal
 */
 
$bg_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
$bg_url = $bg_url[0];

get_header(); ?>

	<div id="container" class="scene_element scene_element--fadein" >
		

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
				/*
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				*/
				?>

			<?php endwhile; // end of the loop. ?>

		
	</div><!-- #primary -->


<?php get_footer(); ?>
