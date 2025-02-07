<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<aside class="bewpi-sidebar premium">
	<h3><?php esc_html_e( 'Invoices for WooCommerce Premium', 'woocommerce-pdf-invoices' ); ?></h3>
	<p>
		<?php esc_html_e( 'This plugin offers a premium version which comes with the following features:', 'woocommerce-pdf-invoices' ); ?><br/>
		- <?php esc_html_e( 'Attach PDF invoices to many more email types including third party plugins.', 'woocommerce-pdf-invoices' ); ?><br/>
		- <?php esc_html_e( 'Send credit notes and cancelled PDF invoices when refunding or cancelling order.', 'woocommerce-pdf-invoices' ); ?><br/>
		- <?php esc_html_e( 'Fully customize the table content by modifying line item columns and total rows.', 'woocommerce-pdf-invoices' ); ?><br/>
		- <?php esc_html_e( 'Automatically send PDF invoices as a reminder configurable within a specific period of time.', 'woocommerce-pdf-invoices' ); ?><br/>
		- <?php esc_html_e( 'Let customers decide if they would like to get a PDF invoice on checkout.', 'woocommerce-pdf-invoices' ); ?><br/>
		- <?php esc_html_e( 'Change the font of the PDF invoices.', 'woocommerce-pdf-invoices' ); ?><br/>

		- <?php esc_html_e( 'Generate PDF invoices in multiple languages (WPML and Polylang compatible).', 'woocommerce-pdf-invoices' ); ?><br/>
		- <?php esc_html_e( 'Bulk generate PDF invoices.', 'woocommerce-pdf-invoices' ); ?><br/>
		- <?php esc_html_e( 'Bulk export and/or download PDF invoices.', 'woocommerce-pdf-invoices' ); ?><br/>
		- <?php esc_html_e( 'Add additional PDF\'s to PDF invoices.', 'woocommerce-pdf-invoices' ); ?><br/>
		- <?php esc_html_e( 'Send PDF invoices to multiple recipients.', 'woocommerce-pdf-invoices' ); ?><br/>
		- <?php printf( esc_html__( 'Attach invoices to %sWooCommerce Subscriptions%s emails.', 'woocommerce-pdf-invoices' ), "<a href='http://www.woothemes.com/products/woocommerce-subscriptions/'>", '</a>' ); ?><br/>
	</p>
	<a class="bewpi-learn-more" href="http://wcpdfinvoices.com" target="_blank"><?php esc_html_e ( 'Learn more', 'woocommerce-pdf-invoices' ); ?></a>
</aside>

<aside class="bewpi-sidebar about">
	<h3><?php esc_html_e( 'About', 'woocommerce-pdf-invoices' ); ?></h3>
	<p>
		<?php echo wp_kses_post(__( 'This plugin is an open source project wich aims to fill the invoicing gap of <a href="http://www.woothemes.com/woocommerce">WooCommerce</a>.' , 'woocommerce-pdf-invoices' )); ?>
	</p>
	<?php
	echo '<b>' . sprintf( esc_html__( 'Version: %s', 'woocommerce-pdf-invoices' ), esc_html(WPI_VERSION) ) . '</b>';
	printf( '<br>' );
	echo '<b>' . sprintf( esc_html__( 'Author: %s', 'woocommerce-pdf-invoices' ), '<a href="https://github.com/baselbers">Bas Elbers</a>' ) . '</b>';
	?>
</aside>
<aside class="bewpi-sidebar support">
	<h3><?php esc_html_e( 'Support', 'woocommerce-pdf-invoices' ); ?></h3>
	<p>
		<?php printf( wp_kses_post(__( 'We will never ask for donations, but to guarantee future development, we do need your support. Please show us your appreciation by leaving a <a href="%1$s">★★★★★</a> rating and vote for <a href="%2$s">works</a>.', 'woocommerce-pdf-invoices' )), 'https://wordpress.org/support/view/plugin-reviews/woocommerce-pdf-invoices?rate=5#postform', 'https://wordpress.org/plugins/woocommerce-pdf-invoices/' );?>
	</p>
</aside>
<aside class="bewpi-sidebar need-help">
	<h3><?php esc_html_e( 'Need Help?', 'woocommerce-pdf-invoices' ); ?></h3>
	<ul>
		<li><a href="https://wordpress.org/plugins/woocommerce-pdf-invoices/faq/"><?php esc_html_e( 'Frequently Asked Questions', 'woocommerce-pdf-invoices' ); ?> </a></li>
		<li><a href="https://wordpress.org/support/plugin/woocommerce-pdf-invoices"><?php esc_html_e( 'Support forum', 'woocommerce-pdf-invoices' ); ?></a></li>
		<li><a href="https://wordpress.org/support/plugin/woocommerce-pdf-invoices"><?php esc_html_e( 'Request a feature', 'woocommerce-pdf-invoices' ); ?></a></li>
	</ul>
</aside>