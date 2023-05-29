<?php
// mt_settings_page() displays the page content for the Test Settings submenu
function jweb_text_snipper_options_page() {
    //must check that the user has the required capability 
    if (!current_user_can('manage_options'))
    {
      wp_die( __('You do not have sufficient permissions to access this page.') );
    }

    $nonce = 'jweb_nonce';
    $html_class_input = 'jweb_text_snipper_class';

    // Read in existing option value from database
    $html_class_val = sanitize_html_class(get_option( $html_class_input ));

    // Check Nonce
    if( isset($_POST[ $nonce ]) ) :
        $class_check = sanitize_html_class($_POST[ $html_class_input ]);
        if ( wp_verify_nonce($_POST[$nonce], $nonce) && strlen( $class_check <= 20 ) ) :
            // Read their posted value
            $html_class_val = $class_check;

            // Save the posted value in the database
            update_option( $html_class_input, $html_class_val );
?>
            <!-- Settings Saved message -->
            <div class="updated"><p><strong><?php _e('Settings Saved.', 'text-snipper' ); ?></strong></p></div>
<?php   else : ?>
            <div class="error"><p><strong><?php _e('Sorry, there was an issue.', 'text-snipper' ); ?></strong></p></div>
<?php   endif; 
    endif; ?>

    <!--Now display the settings editing screen-->
<div class="wrap">

    <h2><?php echo __( 'Text Snipper Settings', 'text-snipper' ); ?></h2>

    <form name="jweb-text-snipper-form" method="post" action="">
        <input type="hidden" name="<?php echo $nonce; ?>" value="<?php echo wp_create_nonce($nonce) ?>">

        <p><?php _e("HTML class:", 'text-snipper' ); ?> 
            <input type="text" name="<?php echo $html_class_input; ?>" value="<?php echo esc_attr($html_class_val); ?>" size="20" maxlength="20">
        </p><hr />

        <p class="submit">
            <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes', 'text-snipper') ?>" />
        </p>
    </form>

</div>

<?php
    
}