<?php
/**
 * Move "My Social Profiles" to "edit account" section instead of "my account"
 */
function sv_wc_social_login_move_social_profiles() {

	if ( function_exists( 'wc_social_login' ) ) {
		remove_action( 'woocommerce_before_my_account',  array( wc_social_login()->frontend, 'render_social_login_profile' ) );
		add_action( 'woocommerce_edit_account_form_end', array( wc_social_login()->frontend, 'render_social_login_profile' ) );
	}

}
add_action( 'init', 'sv_wc_social_login_move_social_profiles', 11 );