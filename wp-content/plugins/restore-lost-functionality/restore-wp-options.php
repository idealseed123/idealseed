<?php
/**
* Options Page
*
* Screen for allowing users to specify which functionality to restore
*
* @package	Restore-lost-Functionality
* @since	1.0
*/
?>
<div class="wrap">
<?php
global $wp_version;
if ( ( float ) $wp_version >= 4.3 ) { $heading = '1'; } else { $heading = '2'; }
?>
<h<?php echo $heading; ?>><?php _e( 'Restore Lost Functionality', 'restore-lost-functionality' ); ?></h<?php echo $heading; ?>>

<?php

// If options have been updated on screen, update the database

if ( ( !empty( $_POST ) ) && ( check_admin_referer( 'restore-wp-options', 'restore_wp_options_nonce' ) ) ) {

	if ( isset( $_POST[ 'restore_wp_shortlink' ] ) ) { $options[ 'shortlink' ] = sanitize_text_field( $_POST[ 'restore_wp_shortlink' ] ); } else { $options[ 'shortlink' ] = ''; }
	if ( isset( $_POST[ 'restore_wp_links' ] ) ) { $options[ 'links' ] = sanitize_text_field( $_POST[ 'restore_wp_links' ] ); } else { $options[ 'links' ] = ''; }
	if ( isset( $_POST[ 'restore_wp_toolbar' ] ) ) { $options[ 'toolbar' ] = sanitize_text_field( $_POST[ 'restore_wp_toolbar' ] ); } else { $options[ 'toolbar' ] = ''; }
	if ( isset( $_POST[ 'restore_wp_comment' ] ) ) { $options[ 'comment' ] = sanitize_text_field( $_POST[ 'restore_wp_comment' ] ); } else { $options[ 'comment' ] = ''; }
	if ( isset( $_POST[ 'restore_wp_responsive' ] ) ) { $options[ 'responsive' ] = sanitize_text_field( $_POST[ 'restore_wp_responsive' ] ); } else { $options[ 'responsive' ] = ''; }

	// Update the options

	update_option( 'restore_wp_options', $options );
	$update_message = __( 'Settings Saved.', 'restore-lost-functionality' );
	echo '<div class="updated fade"><p><strong>' . $update_message . "</strong></p></div>\n";
}

// Get options

$options = get_option( 'restore_wp_options' );
if ( !is_array( $options ) ) { $options = array(); }
?>

<form method="post" action="<?php echo get_bloginfo( 'wpurl' ).'/wp-admin/options-general.php?page=restore-wp-options' ?>">

<table class="form-table">

<?php if ( ( float ) $wp_version >= 4.4 ) { ?>

<tr>
<th scope="row"><label for="restore_wp_comment"><?php _e( 'Comment text field', 'restore-lost-functionality' ); ?></th>
<td><input type="checkbox" name="restore_wp_comment" value="1"<?php if ( isset( $options[ 'comment' ] ) && $options[ 'comment' ] == "1" ) { echo ' checked="checked"'; } ?>/><?php _e( 'Move the comment field to the bottom', 'restore-lost-functionality' ); ?></label>
<p class="description"><?php _e( 'In WordPress 4.4 the comment text field was moved to after the other fields (name, etc). This was because, when users clicked on the reply button, they were taken to the comment text area. If a user was on mobile, they may not even see the comment name and email fields and may write and submit a comment only to return back with an error. Therefore this change addressed usability and accessibility issues.', 'restore-lost-functionality' ); ?></p>
</td></tr>

<?php } ?>

<?php if ( ( float ) $wp_version >= 4.4 ) { ?>

<tr>
<th scope="row"><label for="restore_wp_shortlink"><?php _e( 'Get Shortlink button', 'restore-lost-functionality' ); ?></th>
<td><input type="checkbox" name="restore_wp_shortlink" value="1"<?php if ( isset( $options[ 'shortlink' ] ) && $options[ 'shortlink' ] == "1" ) { echo ' checked="checked"'; } ?>/><?php _e( 'Restore the button to the post editor', 'restore-lost-functionality' ); ?></label>
<p class="description"><?php _e( 'The Get Shortlink button was removed in WordPress 4.4 in an effort to clean the interface.', 'restore-lost-functionality' ); ?></p>
</td></tr>

<?php } ?>

<?php if ( ( float ) $wp_version >= 3.9 ) {

$status = restore_wp_check_plugin( 'advanced-image-styles' );
?>

<tr>
<th scope="row"><label for="restore_wp_image_prop"><?php _e( 'Image properties', 'restore-lost-functionality' ); ?></th>
<td><input disabled="disabled" type="checkbox" name="restore_wp_image_prop" value="1"<?php if ( $status == 2) { echo ' checked="checked"'; } ?>/>

<?php
if ( $status == 0 ) {
	$text = __( 'Install the plugin', 'restore-lost-functionality' );
} else {
	if ( $status == 1 ) {
		$text = __( 'Plugin installed but not active', 'restore-lost-functionality' );
	} else {
		$text = __( 'Plugin installed and active', 'restore-lost-functionality' );
	}
}
echo '<a href="' . admin_url( 'plugin-install.php?tab=plugin-information&plugin=advanced-image-styles&TB_iframe=true&width=772&height=565' ) . '" class="thickbox">' . $text . '</a>';
?>
</label><p class="description"><?php _e( 'In WordPress 3.9 the ability to easily add a border, vertical, and horizontal padding to images was removed. This was done to simply to clean up the UI as these changes can be easily made via CSS.', 'restore-lost-functionality' ); ?></p></td></tr>

<?php } ?>

<?php if ( ( float ) $wp_version >= 3.5 ) { ?>

<tr>
<th scope="row"><label for="restore_wp_links"><?php _e( 'Link Manager', 'restore-lost-functionality' ); ?></th>
<td><input type="checkbox" name="restore_wp_links" value="1"<?php if ( isset( $options[ 'links' ] ) && $options[ 'links' ] == "1" ) { echo ' checked="checked"'; } ?>/>
<?php _e( 'Restore the Links administration option', 'restore-lost-functionality' ); ?></label>
<p class="description"><?php _e( 'Removed in WordPress 3.5, the Link Manager (which some use to build blogrolls) is disabled by default.', 'restore-lost-functionality' ); ?></p>
</td></tr>

<?php } ?>

<?php if ( ( float ) $wp_version >= 2.5 ) { ?>

<tr>
<th scope="row"><label for="restore_wp_linkthis"><?php _e( 'Link This Bookmarklet', 'restore-lost-functionality' ); ?></th>
<td><?php echo sprintf( __( 'Drag this <a href=%s>Link This Bookmarklet</a> link to your bookmarks bar. Then, when you\'re on a page you want to add your links manager, simply select that bookmark.', 'restore-lost-functionality' ), "javascript:void(linkmanpopup=window.open('" . get_admin_url() . "link-add.php?action=popup&linkurl='+escape(location.href)+'&name='+escape(document.title),'LinkManager','scrollbars=yes,width=750,height=550,left=15,top=15,status=yes,resizable=yes'));linkmanpopup.focus();window.focus();linkmanpopup.focus();
" ); ?></label>
<p class="description"><?php _e( 'This was removed in WordPress 2.5.', 'restore-lost-functionality' ); ?></p>
</td></tr>

<?php } ?>

<?php if ( ( float ) $wp_version >= 3.3 ) { ?>

<tr>
<th scope="row"><label for="restore_wp_toolbar"><?php _e( 'Shortlink in Admin Toolbar', 'restore-lost-functionality' ); ?></th>
<td><input type="checkbox" name="restore_wp_toolbar" value="1"<?php if ( isset( $options[ 'toolbar' ] ) && $options[ 'toolbar' ] == "1" ) { echo ' checked="checked"'; } ?>/>
<?php _e( 'Restore the shortlink option in the admin. toolbar', 'restore-lost-functionality' ); ?></label>
<p class="description"><?php _e( 'This was removed in version 3.3 because it was felt it was no longer required.', 'restore-lost-functionality' ); ?></p>
</td></tr>

<?php } ?>

<?php if ( ( float ) $wp_version >= 4.4 ) { ?>

<tr>
<th scope="row"><label for="restore_wp_responsive"><?php _e( 'SRCSET attribute', 'restore-lost-functionality' ); ?></th>
<td><input type="checkbox" name="restore_wp_responsive" value="1"<?php if ( isset( $options[ 'responsive' ] ) && $options[ 'responsive' ] == "1" ) { echo ' checked="checked"'; } ?>/>
<?php _e( 'Remove the SRCSET attribute from images', 'restore-lost-functionality' ); ?></label>
<p class="description"><?php _e( 'This parameter was added in WordPress 4.4 to improve responsive image output. However, it\'s known to cause issues with some plugins and themes.', 'restore-lost-functionality' ); ?></p>
</td></tr>

<?php } ?>

<?php if ( ( float ) $wp_version >= 4.2 ) {

$status = restore_wp_check_plugin( 'restore-link-title-field' );
?>

<tr>
<th scope="row"><label for="restore_wp_link_title"><?php _e( 'Title for links', 'restore-lost-functionality' ); ?></th>
<td><input disabled="disabled" type="checkbox" name="restore_wp_link_title" value="1"<?php if ( $status == 2) { echo ' checked="checked"'; } ?>/>

<?php
if ( $status == 0 ) {
	$text = __( 'Install the plugin', 'restore-lost-functionality' );
} else {
	if ( $status == 1 ) {
		$text = __( 'Plugin installed but not active', 'restore-lost-functionality' );
	} else {
		$text = __( 'Plugin installed and active', 'restore-lost-functionality' );
	}
}
echo '<a href="' . admin_url( 'plugin-install.php?tab=plugin-information&plugin=restore-link-title-field&TB_iframe=true&width=772&height=565' ) . '" class="thickbox">' . $text . '</a>';
?>
</label><p class="description"><?php _e( 'Removed in version 4.2, WordPress actively discourages the use of title attributes in links as they are largely useless outside of providing the "hover tooltip" many visual users enjoy, and more importantly, they don\'t promote good accessibility.', 'restore-lost-functionality' ); ?>&nbsp;<a href="https://silktide.com/i-thought-title-text-improved-accessibility-i-was-wrong/"><?php _e('Read more about the accessibility issues', 'restore-lost-functionality' ); ?></a>.</p></td></tr>

<?php } ?>

</table>

<?php wp_nonce_field( 'restore-wp-options', 'restore_wp_options_nonce', true, true ); ?>

<p class="submit"><input type="submit" name="Submit" class="button-primary" value="<?php _e( 'Save Changes', 'restore-lost-functionality' ); ?>"/></p>

</form>

</div>