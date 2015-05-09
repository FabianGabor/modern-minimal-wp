<?php
/**
 * The template for displaying search results pages.
 *
 * @package Modern Minimal
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	
	
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
		
	<div class="icon icon-circle icon-bordered right search-icon">
		<svg width="100%" height="100%"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#search"></use></svg>
	</div>
		
	
	
</form>