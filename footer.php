<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Modern Minimal
 */
?>



</div><!-- #main -->

<?php wp_footer(); ?>

<?php
if(is_archive()) {
?>
<script>
$(window).load( function() {
	$( document.body ).on( 'post-load', function () {
			console.log('post-load');
    });
});
</script>
<?php	
}

if(is_single() || is_page( array( 'oneletrajz', 'Önéletrajz' ) ) ) {
?>
	<script>
		var lastScrollY     = 0,
			ticking         = false,
			bg				= $(".article-header-bg"),
			title			= $("#title");


		/**
		 * Callback for our scroll event - just
		 * keeps track of the last scroll value
		 */
		function onScroll() {
			lastScrollY = window.scrollY;
			requestTick();
		}

		/**
		 * Calls rAF if it's not already
		 * been done already
		 */
		function requestTick() {
			if(!ticking) {
				requestAnimationFrame(update);
				ticking = true;
			}
		}

		/**
		 * Our animation callback
		 */
		function update() {
			var windowHeight    = window.innerHeight;

			if (lastScrollY <= windowHeight) {
				blur = lastScrollY / windowHeight * 25 + 10;
				
				$(bg).css( "-webkit-filter", "blur(" + blur + "px)" );	
				$(bg).css( "filter", "blur(" + blur + "px)" );	
			}
			
		<?php
		if(is_page( array( 'oneletrajz', 'Önéletrajz' ) ) ) {
		?>
			opacity = (windowHeight - lastScrollY * 10) / (windowHeight * 1);
		<?php
		}
		else {
		?>
			opacity = (windowHeight - lastScrollY * 10) / windowHeight;
		<?php
		}
		?>
			$(title).css("opacity", opacity);
			

			// allow further rAFs to be called
			ticking = false;
		}

		// only listen for scroll events
		window.addEventListener('scroll', onScroll, false);
	</script>
<?php
}
?>

</body>
</html>
