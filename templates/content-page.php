<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Halen
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */



?>
<div class="col-sm-12">
	<div id="page_<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php 

		/**
		 * page content 
		 * Comments Template
		 * @Hook  halen_page_content
		 *
		 * @Hooked halen_page_content_cb
		 * 
		 *
		 */
		do_action( 'halen_page_content' );

		?>
	</div>
</div>