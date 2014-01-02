<div id='downloads-wrapper'>
    <?php if ($downloads = $woocommerce->customer->get_downloadable_products()) : ?>

        <h2><?php echo apply_filters('woocommerce_my_account_my_downloads_title', __('Available downloads', 'woocommerce')); ?></h2>

        <ul class="digital-downloads">
            <?php foreach ($downloads as $download) : ?>
            <?php 
                // Get order date
                $order = new WC_Order( $download['order_id'] );
                $items = $order->get_items();
                $downloadOrder = (array) $order;
            ?>
                <li>
                    <?php echo date('m/d/Y',strtotime($downloadOrder['order_date'])); ?> - 
                    <?php
                    do_action('woocommerce_available_download_start', $download);

                    if (is_numeric($download['downloads_remaining']))
                        echo apply_filters('woocommerce_available_download_count', '<span class="count">' . sprintf(_n('%s download remaining', '%s downloads remaining', $download['downloads_remaining'], 'woocommerce'), $download['downloads_remaining']) . '</span> ', $download);
                        echo apply_filters('woocommerce_available_download_link', '<a href="' . esc_url($download['download_url']) . '">' . $download['download_name'] . '</a>', $download);

                    do_action('woocommerce_available_download_end', $download);
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>

    <?php else: ?>	
        <p>You do not have any downloads available at the moment.  Please visit our <a href="/downloads/">Digital Store</a> to browse the selection of digital products.</p>
    <?php endif; ?>
</div>