<?php
/**
 * @package Modern Minimal
 */
?>



<?php 
if ( has_post_thumbnail() ) {
	$no_header = "";
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
?>
	<header class="article-header">
		<?php the_post_thumbnail( 'large', array( 'class' => 'article-header-img' )  ); ?>
		<span class="article-header-bg" style="background-image: url('<?php echo $large_image_url[0]; ?>');"></span>
	</header><!-- .article-header -->
<?php
}
else {
	$no_header = "no-header";
}
?>

	


<div class="row article-body <?php echo $no_header; ?>">
	<div class="large-8 large-centered columns">
		<?php the_content(); ?>
	<div class="entry-meta h5">
		<?php //modern_minimal_posted_on(); ?>		
		<time class="entry-date published" datetime="<?php echo get_the_date( 'c' ) ?>">
			<?php echo utf8_encode(strftime("%Y. %B %#d.",get_post_time())); ?>
		</time>
	</div><!-- .entry-meta -->
	<?php
	/*
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'modern-minimal' ),
			'after'  => '</div>',
		) );
	*/
	?>
	</div>
</div><!-- .article-body -->
