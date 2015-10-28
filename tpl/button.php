<?php
if ( $downloads = $woocommerce->customer->get_downloadable_products() ) {

	foreach ( $downloads as $download ) {

		if ( $download['product_id'] == $id ) {

			if ( empty($downloadButtonLabel) ) {
				$downloadButtonLabel = 'Download ' . $download['download_name'];
			} else {
				$downloadButtonLabel = $downloadButtonLabel;
			}

			echo apply_filters( 'woocommerce_available_download_link', '<a href="' . esc_url( $download['download_url'] ) . '" class="' . $downloadButtonClass . '">' . $downloadButtonLabel . '</a>', $download );
		}
	}
} else {
	echo '<div class="woocommerce-my-downloads-button-no-downloads">' . $no_downloads . '</div>';
}