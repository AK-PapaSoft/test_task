<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-contacts">
	<div class="contact">Call Us<span>:</span> <a href="tel:0987654321">0987654321</a></div>
	<div class="contact">Email<span>:</span> <a href="mailto:testdomain@mail.to">testdomain@mail.to</a></div>
	<a class="contact btn" href="#">Contact Us</a>
</div><!-- .site-contacts -->
<div class="site-info">
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ); ?></a>
</div><!-- .site-info -->