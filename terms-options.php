<?php

function wtp_createAdminMenu() {
    add_options_page( __( 'WP Terms Popup', 'terms-popup-plugin' ), __( 'WP Terms Popup', 'terms-popup-plugin' ), 'administrator', __FILE__, 'wtp_popupSettingsPage' );
}
add_action( 'admin_menu', 'wtp_createAdminMenu' );


function wtp_popupSettingsPage() { ?>

<div class="wrap">
<h2>WP Terms Popup Plugin Settings</h2>

<form name="termsForm" method="post" action="options.php">
<?php wp_nonce_field('update-options') ?>

<h3>Popup General Settings</h3>

<p>&nbsp;</p>

<p style="font-weight:bold">Below are the GENERAL setting for ALL terms popups. You can override the setting below by editing individual terms popup.</p>

<p>&nbsp;</p>

<p>Enable popups for logged in users? :
	<input type="checkbox" name="termsopt_adminenabled" value="1" <?php checked( '1', get_option('termsopt_adminenabled') ); ?>>Yes
</p>

<p>Enable only one popup across the site (sitewide)? :
	<input type="checkbox" name="termsopt_sitewide" value="1" <?php checked( '1', get_option('termsopt_sitewide') ); ?>>Yes
</p>

<p>Select terms to be displayed as popup for the above choice (sitewide):

<?php if ((wp_dropdown_pages("name=termsopt_page&post_type=termpopup&echo=0")) == '' ) { ?>

<br /><br />
<span style="font-style:italic;">(Please create your first terms by going to Terms Popups > Add New. You will be able to select it after it has been created.)</span>

<?php } ?>

<?php wp_dropdown_pages("name=termsopt_page&post_type=termpopup&show_option_none=".__('- Select -')."&selected=" .get_option('termsopt_page')); ?>
</p>

<p>&nbsp;</p>

<p>Custom 'I Agree' button text :
<input type="text" name="termsopt_agreetxt" size="20" value="<?php echo get_option('termsopt_agreetxt'); ?>" />
</p>

<p>Custom 'I Do Not Agree' button text :
<input type="text" name="termsopt_disagreetxt" size="20" value="<?php echo get_option('termsopt_disagreetxt'); ?>" />
</p>

<p>URL to redirect to when 'I Do Not Agree' is clicked :
<input type="text" name="termsopt_redirecturl" size="45" value="<?php echo get_option('termsopt_redirecturl'); ?>" />
</p>

<p>Set the transparency/opacity level behind popup  :
<input type="number" name="termsopt_opac" min="1" max="10" size="5" value="<?php echo get_option('termsopt_opac'); ?>" /> (in the scale of 1-10, with 1 being the most transparent, 10 being solid black.)  
</p>

<p>&nbsp;</p>

<p style="font-weight:bold">Note: Expiry time below does NOT apply to popups displayed by shortcodes.</p>

<p>How long should it be until your visitors see the popup again after they agree? :
<input type="text" name="termsopt_expiry" size="10" value="<?php echo get_option('termsopt_expiry'); ?>" /> (in hours, leave blank if in doubt)
</p>

<p>&nbsp;<p>

<p><input class="button-primary" type="submit" name="Submit" value="Save Options" /></p>
<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="termsopt_adminenabled,termsopt_sitewide,termsopt_page,termsopt_agreetxt,termsopt_disagreetxt,termsopt_redirecturl,termsopt_opac,termsopt_expiry" />
</form>

<?php if( !is_plugin_active( 'wp-terms-popup-pro/index.php' ) ) { ?>
	<p>*Upgrade to our <a href="http://termsplugin.com">PRO version</a> to have more control over how your popups look to your visitors!</p>
<?php } ?>

</div>
<?php }

?>