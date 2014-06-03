<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Ifttt_Instagram_Gallery_Admin
 * @author    Björn Weinbrenner <info@bjoerne.com>
 * @license   GPLv3
 * @link      http://bjoerne.com
 * @copyright 2014 bjoerne.com
 */
?>

<div class="wrap">
	<?php screen_icon(); ?>
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
	<form method="post" action="options.php">
<?php
	settings_fields( 'ifttt_instagram_gallery_options_group' );
	do_settings_sections( 'ifttt_instagram_gallery_options_group' );
?>
		<table class="form-table">
			<tbody>

				<tr>
					<th scope="row"><label for="ifttt_instagram_gallery_options_keep_max_images"><?php _ex( 'Maximum numbers of images to keep', $this->plugin_slug ); ?></label></th>
					<td><input name="ifttt_instagram_gallery_options[keep_max_images]" type="text" class="regular-text" id="ifttt_instagram_gallery_options_keep_max_images" value="<?php echo esc_attr( @$this->options['keep_max_images'] ); ?>">
						<p class="description"><?php _ex( 'If you configure a lower number than the current number of images the current images are removed accordingly', 'Form field description', $this->plugin_slug ); ?></p></td>
				</tr>
			</tbody>
		</table>
		<?php submit_button(); ?>
	</form>
</div>
