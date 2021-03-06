<?php 
/**
 * @Packge     : safariotravel
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

/**
 * Footer Area
 *
 * @Footer
 * @Back To Top Button
 *
 * @Hook safariotravel_footer
 *
 * @Hooked  safariotravel_footer_area 10
 * @Hooked  safariotravel_back_to_top 20
 *
 */

do_action( 'safariotravel_footer' );

wp_footer(); 
?>
</body>
</html>