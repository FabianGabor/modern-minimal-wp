<?php
/**
 * The template for displaying all single posts.
 *
 * @package Modern Minimal
 */

get_header(); ?>

	<div id="article" class="scene_element scene_element--fadein">
		

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php //the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) {
			?>
					<div class="row">
						<div class="large-8 large-centered columns">
							<?php comments_template(); ?>
						</div>
					</div>
			<?php
				}
			?>
			</div>

		<?php endwhile; // end of the loop. ?>

		
	</div><!-- #article -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
