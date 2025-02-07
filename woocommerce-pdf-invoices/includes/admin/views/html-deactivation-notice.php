<?php
/**
 * Deactivation admin notice
 *
 * Link to settings page.
 *
 * @author      Bas Elbers
 * @category    Admin
 * @package     BE_WooCommerce_PDF_Invoices/Admin
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$reason_deactivation_url = 'http://wcpdfinvoices.com/what-made-you-deactivate';
global $status, $page, $s;
$bewpi_plugin_file = basename( dirname( WPI_FILE ) ) . '/' . basename( WPI_FILE );
$deactivate_url = wp_nonce_url( 'plugins.php?action=deactivate&amp;plugin=' . $bewpi_plugin_file . '&amp;plugin_status=' . $status . '&amp;paged=' . $page . '&amp;s=' . $s, 'deactivate-plugin_' . $bewpi_plugin_file );
?>
<div class="notice inline notice-alt notice-warning">
	<p><?php printf( wp_kses_post(__( 'Before we deactivate Invoices for WooCommerce, would you care to <a href="%1$s" target="_blank">let us know why</a> so we can improve it for you? <a href="%2$s">No, deactivate now</a>.', 'woocommerce-pdf-invoices' )), esc_url($reason_deactivation_url), esc_url($deactivate_url) ); ?></p>
</div>
