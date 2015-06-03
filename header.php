<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Modern Minimal
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<style>
	[data-src] { background-image: none !important; }
	[data-src]:after { background-image: none !important; }

	<?php $menu = wp_get_nav_menu_object("Primary Menu" ); ?>
	.menu-item {
		height: <?php echo 100 / $menu->count; ?>% !important;
	}
	
	@font-face {
	  font-family: 'Roboto';
	  font-style: normal;
	  font-weight: 100;
	  src: local('Roboto Thin'), local('Roboto-Thin'), url(https://fonts.gstatic.com/s/roboto/v15/e7MeVAyvogMqFwwl61PKhPesZW2xOQ-xsNqO47m55DA.woff2) format('woff2'), url(https://fonts.gstatic.com/s/roboto/v15/idLYXfFa1c7oAPILDl4z0fesZW2xOQ-xsNqO47m55DA.woff) format('woff');
	}
	@font-face {
	  font-family: 'Roboto';
	  font-style: normal;
	  font-weight: 400;
	  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v15/fIKu7GwZTy_12XzG_jt8eA.woff2) format('woff2'), url(https://fonts.gstatic.com/s/roboto/v15/Xyjz-jNkfiYuJf8UC3Lizw.woff) format('woff');
	}

	
	<?php
	if ( ! wp_is_mobile() ) {
		$menu_items = wp_get_nav_menu_items( $menu );
		
		/*
		$output = '';
		foreach ( $menu_items as $key => $menu_item ) {		
			$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $menu_item->object_id ), 'medium' );
			$thumb_url = $thumb_url[0];
			if ( $thumb_url !== null ) {
				$output .= "#menu-item-$menu_item->ID::after { background-image: url('$thumb_url'); } ";
			} else {				
				if (function_exists('category_image_src')) {
					$thumb_url = category_image_src( array( 'term_id' => $menu_item->object_id, 'size' => 'full' ) , false );
					$output .= "#menu-item-$menu_item->ID::after { background-image: url('$thumb_url'); } ";
				}
			}
		}
		echo $output;
		*/
		?>
			
		@media only screen and (min-width:64.063em) {
			<?php
			$output = '';
			foreach ( $menu_items as $key => $menu_item ) {		
				$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $menu_item->object_id ), 'full' );
				$thumb_url = $thumb_url[0];
				if ( $thumb_url !== null ) {
					$output .= "#menu-item-$menu_item->ID::after { background-image: url('$thumb_url'); } ";
				} else {				
					if (function_exists('category_image_src')) {
						$thumb_url = category_image_src( array( 'term_id' => $menu_item->object_id, 'size' => 'full' ) , false );
						$output .= "#menu-item-$menu_item->ID::after { background-image: url('$thumb_url'); } ";
					}
				}
			}
			echo $output;
			?>
		}
	<?php
	}
	?>
	
	<?php
	if (is_page( array( 'oneletrajz', 'Önéletrajz' ))) {
		$bg_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
		$bg_url = $bg_url[0];
	?>		
		@font-face {
		  font-family: 'Roboto';
		  font-style: normal;
		  font-weight: 900;
		  src: local('Roboto Black'), local('Roboto-Black'), url(https://fonts.gstatic.com/s/roboto/v15/9_7S_tWeGDh5Pq3u05RVkltXRa8TVwTICgirnJhmVJw.woff2) format('woff2'), url(https://fonts.gstatic.com/s/roboto/v15/9_7S_tWeGDh5Pq3u05RVkj8E0i7KZn-EPnyo3HZu7kw.woff) format('woff');
		}
		@font-face {
		  font-family: 'Roboto';
		  font-style: normal;
		  font-weight: 700;
		  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v15/97uahxiqZRoncBaCEI3aW1tXRa8TVwTICgirnJhmVJw.woff2) format('woff2'), url(https://fonts.gstatic.com/s/roboto/v15/97uahxiqZRoncBaCEI3aWz8E0i7KZn-EPnyo3HZu7kw.woff) format('woff');
		}
	
		body::after {
			background: url("<?php echo $bg_url; ?>") no-repeat fixed center center / cover transparent !important;
		}
	
		@media only screen and (min-width:64.063em) {
			<?php
			$bg_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			$bg_url = $bg_url[0];
			?>
			body::after {
				background: url("<?php echo $bg_url; ?>") no-repeat fixed center center / cover transparent !important;
			}
		}
	<?php
	}
	?>
	
	<?php
	if (is_page( array( 'kapcsolat', 'Kapcsolat' ))) {
		$bg_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
		$bg_url = $bg_url[0];
	?>
		body::after {
			background: url("<?php echo $bg_url; ?>") no-repeat fixed center center / cover transparent !important;			
		}
	
		@media only screen and (min-width:64.063em) {
			<?php
			$bg_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			$bg_url = $bg_url[0];
			?>
			body::after {
				background: url("<?php echo $bg_url; ?>") no-repeat fixed center center / cover transparent !important;
			}
		}
	<?php
	}
	?>
</style>

<script src="//cdnjs.cloudflare.com/ajax/libs/picturefill/2.3.1/picturefill.min.js" async></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="main">


	<header id="header" class="site-header" role="banner">
		<?php
		$attachment_id = 1289; // attachment ID
		$image_attributes = wp_get_attachment_image_src( $attachment_id ); 
		?>
	
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img id="logo" class="icon icon-circle icon-bordered" src="<?php echo $image_attributes[0]; ?>" width="50" height="50" alt="Fábián Gábor logo"></a>
		
		<?php //the_title( '<h1 id="title" class="title">', '</h1>' ); ?>
		<h1 id="title" class="title">
			<?php //echo rtrim( wp_title( '', false ), ' - Fábián Gábor' ); ?>
			<?php 
			if (is_category()) { single_cat_title(); }
			if (is_page()) { the_title(); }
			if (is_single()) { the_title(); }
			if (is_search()) {
				printf( __( 'Search Results for: %s', 'modern-minimal' ), '<span>' . get_search_query() . '</span>' );
			}
			?>			
		</h1>
		
		<div class="icon icon-circle icon-bordered icon-hamburger right">
			<svg width="100%" height="100%"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#hamburger"></use></svg>
		</div>
		
		<?php
		if ((is_category() || is_single()) || is_search()) {
			get_search_form(); 
		}
		?>
		
	</header><!-- #header -->
	
	
	

	<div id="menu" class="menu">
		<?php
		 $menuArgs = array(
			'menu_id' => 'primary-menu',			
			'container' => false,
			'items_wrap' => '%3$s',
			'walker' => new nolist_walker()
		);
		wp_nav_menu($menuArgs);		
		?>
	</div>