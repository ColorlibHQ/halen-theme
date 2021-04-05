<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Halen
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$halen_reservation_title     = !empty( halen_opt( 'halen_reservation_title' ) ) ? halen_opt( 'halen_reservation_title' ) : '';
	$halen_reservation_sub_title = !empty( halen_opt( 'halen_reservation_sub_title' ) ) ? halen_opt( 'halen_reservation_sub_title' ) : '';
	$halen_reservation_btn_text  = !empty( halen_opt( 'halen_reservation_btn_text' ) ) ? halen_opt( 'halen_reservation_btn_text' ) : '';
	$halen_reservation_btn_url	  = !empty( halen_opt( 'halen_reservation_btn_url' ) ) ? halen_opt( 'halen_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $halen_reservation_title )?></h3>
			<p><?php echo esc_html( $halen_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $halen_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $halen_reservation_btn_text )?></a>
		</div>
	</div>