<?php
/**
 * PDF Invoice meta box information on order page.
 *
 * @author      Bas Elbers
 * @category    Admin
 * @package     BE_WooCommerce_PDF_Invoices/Admin
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<table class="order-page-meta-box pdf-invoice wpi">
	<?php
	foreach ( $details as $item ) {
		printf( '<tr>' );
		printf( '<td>%s</td>', esc_html($item['title']) );
		printf( '<td>%s</td>', wp_kses_post($item['value']) );
		printf( '</tr>' );
	}
	?>
</table>
