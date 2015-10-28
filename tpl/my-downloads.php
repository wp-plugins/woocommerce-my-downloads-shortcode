<div id='downloads-wrapper'>
	<?php if ( $downloads = $woocommerce->customer->get_downloadable_products() ) : ?>

		<h2><?php echo apply_filters( 'woocommerce_my_account_my_downloads_title', __( $heading, 'woocommerce' ) ); ?></h2>
		<?php echo $has_downloads; ?>

		<ul class="wc-my-downloads-digital-downloads">
			<?php foreach ( $downloads as $download ) : ?>
				<?php
				// Get order date
				$order              = new WC_Order( $download['order_id'] );
				$items              = $order->get_items();
				$downloadLimit      = get_post_meta( $download['product_id'], '_download_limit', true );
				$downloadsRemaining = ( $downloadLimit - $download['downloads_remaining'] );
				$downloadOrder      = (array) $order;
				?>
				<li>
					<?php
					if ( $showDate ) {
						echo date( 'm/d/Y', strtotime( $downloadOrder['order_date'] ) ) . ' - ';
					}

					do_action( 'woocommerce_available_download_start', $download );

					if ( is_numeric( $download['downloads_remaining'] ) ) {
						if ( $showDownloads ) {
							echo 'Downloaded ' . $downloadsRemaining . ' time. ';
						}
					}

					if ( $showDownloadCount ) {
						echo apply_filters( 'woocommerce_available_download_count', '<span class="wc-my-downloads-count">' . $download['downloads_remaining'] . '</span> / ', $download );
						echo apply_filters( 'woocommerce_available_available_download_count', '<span class="wc-my-downloads-available-count">' . $downloadLimit . ' downloads remaining. </span>', $download );
					}

					echo apply_filters( 'woocommerce_available_download_link', '<a href="' . esc_url( $download['download_url'] ) . '" class="wc-my-downloads-download-link">' . $download['download_name'] . '</a>', $download );

					do_action( 'woocommerce_available_download_end', $download );
					?>
				</li>
			<?php endforeach; ?>
		</ul>

	<?php else: ?>
		<?php echo $no_downloads; ?>
	<?php endif; ?>
</div>