<div class="wrap">

	<?php screen_icon(); ?>
	<?php if ( $success ) : ?>
		<div class="updated message"><?php echo wpautop( $success ); ?></div>
	<?php endif; ?>
	<form action="options.php" method="post" id="<?php echo self::$prefix; ?>_options_form"
	      name="<?php echo self::$prefix; ?>_options_form">

		<?php
		settings_fields( self::$prefix . '_options' );

		?>
		<h2>WooCommerce My Downloads Settings</h2>

		<table class="widefat">
			<tr>
				<td>
					<label>Available Downloads Heading</label><br>
					<input type="text" name="<?php echo self::$prefix; ?>_downloads_heading" style="width:100%;"
					       value="<?php echo get_option( self::$prefix . '_downloads_heading' ); ?>"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Content if user has no downloads.</label><br>
					<textarea name="<?php echo self::$prefix; ?>_no_downloads"
					          style="width:100%; height:200px;"/><?php echo get_option( self::$prefix . '_no_downloads' ); ?></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<label>Show Downloads Remaining on Template: </label>
					<input type="checkbox" value="1"
					       name="<?php echo self::$prefix; ?>_show_downloads_remaining" <?php checked( get_option( self::$prefix . '_show_downloads_remaining' ), 1 ); ?>>
				</td>
			</tr>
			<tr>
				<td>
					<label>Show Available Download Count on Template: </label>
					<input type="checkbox" value="1"
					       name="<?php echo self::$prefix; ?>_show_download_count" <?php checked( get_option( self::$prefix . '_show_download_count' ), 1 ); ?>>
				</td>
			</tr>

			<tr>
				<td>
					<label>Show Date Purchased on Template: </label>
					<input type="checkbox" value="1"
					       name="<?php echo self::$prefix; ?>_show_date" <?php checked( get_option( self::$prefix . '_show_date' ), 1 ); ?>>
				</td>
			</tr>
			<tr>
				<td>
					<label>Download Button Label <br><small>If left blank it will default to "Download [Product Name]"</small></label><br>
					<input type="text" name="<?php echo self::$prefix; ?>_download_button_label" style="width:100%;"
					       value="<?php echo get_option( self::$prefix . '_download_button_label' ); ?>"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Download Button Classes </label><br>
					<input type="text" name="<?php echo self::$prefix; ?>_download_button_class" style="width:100%;"
					       value="<?php echo get_option( self::$prefix . '_download_button_class' ); ?>"/>
				</td>
			</tr>

		</table>
		<p>
			<input type="submit" class="button-primary" value="Save Settings">
		</p>
	</form>
	<h2>Usage</h2>

	<h3>Shortcodes</h3>
	<dl>
		<dt>All Downloads Shortcode:</dt>
		<dd>[woocommerce-my-downloads]</dd>
	</dl>
	<dl>
		<dt>Single Produt Download Button:</dt>
		<dd>[woocommerce-my-downloads-button id=PRODUCT_ID]</dd>
	</dl>

</div>