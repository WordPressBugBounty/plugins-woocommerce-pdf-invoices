<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$theme_color = $this->template_options['bewpi_color_theme'];
$is_theme_text_black = $this->template_options['bewpi_theme_text_black'];
?>
<table class="foot border" style="border-top: 4px solid <?php echo ( $is_theme_text_black ) ? 'black' : sanitize_hex_color($theme_color); ?>;">
	<tr>
		<td class="company-details">
			<p><?php echo wp_kses_post( nl2br( WPI()->templater()->get_option( 'bewpi_left_footer_column' ) ) ); ?></p>
		</td>
		<td class="payment">
			<p><?php echo wp_kses_post( nl2br( WPI()->templater()->get_option( 'bewpi_right_footer_column' ) ) ); ?></p>
			<p><?php printf( esc_html__( '%1$s of %2$s', 'woocommerce-pdf-invoices' ), '{PAGENO}', '{nbpg}' ); ?></p>
		</td>
	</tr>
</table>