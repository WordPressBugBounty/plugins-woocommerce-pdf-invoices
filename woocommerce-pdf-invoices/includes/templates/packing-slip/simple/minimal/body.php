<?php
/**
 * PDF packing slip template body.
 *
 * This template can be overridden by copying it to youruploadsfolder/woocommerce-pdf-invoices/templates/packing-slip/simple/yourtemplatename/body.php.
 *
 * HOWEVER, on occasion Invoices for WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @author  Bas Elbers
 * @package WooCommerce_PDF_Invoices/Templates
 * @version 0.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$templater                  = WPI()->templater();
$order                      = $templater->order;
$packing_slip               = $templater->packing_slip;
$formatted_shipping_address = $order->get_formatted_shipping_address();
$formatted_billing_address  = $order->get_formatted_billing_address();
$line_items                 = $order->get_items( 'line_item' );
$color                      = $templater->get_option( 'bewpi_color_theme' );
?>

<table>
	<tr class="title">
		<td colspan="3">
			<h2><?php esc_html_e( 'Packing Slip', 'woocommerce-pdf-invoices' ); ?></h2>
		</td>
	</tr>
	<tr class="information">
		<td width="50%">
			<?php
			printf( esc_html__( 'Order Date: %s', 'woocommerce-pdf-invoices' ), wp_kses_post($packing_slip->get_formatted_order_date()) );
			printf( '<br />' );
			printf( esc_html__( 'Order Number: %s', 'woocommerce-pdf-invoices' ), wp_kses_post($order->get_order_number()) );

			$shipping_method = $order->get_shipping_method();
			if ( $shipping_method ) {
				printf( '<br />' );
				printf( esc_html__( 'Shipping Method: %s', 'woocommerce-pdf-invoices' ), esc_html($shipping_method) );
			}

			$payment_method = $order->get_payment_method_title();
			if ( $payment_method ) {
				printf( '<br />' );
				printf( esc_html__( 'Payment Method: %s', 'woocommerce-pdf-invoices' ), esc_html($payment_method) );
			}
			?>
		</td>

		<td>
			<?php
			printf( '<strong>%s</strong><br />', esc_html__( 'Bill to:', 'woocommerce-pdf-invoices' ) );
			echo wp_kses_post($formatted_billing_address);

			do_action( 'wpi_after_formatted_billing_address', $packing_slip );
			?>
		</td>

		<td>
			<?php
			printf( '<strong>%s</strong><br />', esc_html__( 'Ship to:', 'woocommerce-pdf-invoices' ) );
			echo wp_kses_post($formatted_shipping_address);

			do_action( 'wpi_after_formatted_shipping_address', $packing_slip );
			?>
		</td>
	</tr>
</table>
<table>
	<thead>
	<tr class="heading" bgcolor="<?php echo sanitize_hex_color($color); ?>;">
		<th>
			<?php esc_html_e( 'SKU', 'woocommerce-pdf-invoices' ); ?>
		</th>

		<th>
			<?php esc_html_e( 'Product', 'woocommerce-pdf-invoices' ); ?>
		</th>

		<th>
			<?php esc_html_e( 'Qty', 'woocommerce-pdf-invoices' ); ?>
		</th>
	</tr>
	</thead>
	<tbody>
	<?php
	foreach ( $line_items as $item_id => $item ) {
		$product = BEWPI_WC_Order_Compatibility::get_product( $order, $item );
		?>

		<tr class="item">
			<td width="10%">
				<?php echo $product && $product->get_sku() ? esc_html($product->get_sku()) : '-'; ?>
			</td>

			<td width="65%">
				<?php
				echo esc_html( $item['name'] );

				do_action( 'wpi_order_item_meta_start', $item, $this->order );
				do_action( 'woocommerce_order_item_meta_start', $item_id, $item, $this->order, false );

				WPI()->templater()->display_item_meta( $item );

				do_action( 'woocommerce_order_item_meta_end', $item_id, $item, $this->order );
				?>
			</td>

			<td width="25%">
				<?php echo esc_html($item['qty']); ?>
			</td>
		</tr>

	<?php } ?>
	</tbody>
</table>

<table class="notes">
	<tr>
		<td>
			<?php
			// Customer notes.
			if ( $templater->get_option( 'bewpi_show_customer_notes' ) ) {
				// Note added by customer.
				$customer_note = BEWPI_WC_Order_Compatibility::get_customer_note( $order );
				if ( $customer_note ) {
					printf( '<strong>' . esc_html__( 'Note from customer: %s', 'woocommerce-pdf-invoices' ) . '</strong><br />', wp_kses_post(nl2br( $customer_note )) );
				}

				// Notes added by administrator on 'Edit Order' page.
				foreach ( $order->get_customer_order_notes() as $custom_order_note ) {
					printf( '<strong>' . esc_html__( 'Note to customer: %s', 'woocommerce-pdf-invoices' ) . '</strong><br />', wp_kses_post(nl2br( $custom_order_note->comment_content )) );
				}
			}
			?>
		</td>
	</tr>
</table>
