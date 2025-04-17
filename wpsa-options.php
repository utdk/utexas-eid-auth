<?php

/**
 * NOTE: options defined here in utexas_wpsax_filter_option are the defaults for UT sites on Pantheon. If for some reason you want to override anything set here, create your own mini-plugin -- utexas-wp-saml-auth-overrides.php.template
 */
function utexas_wpsax_filter_option( $value, $option_name ) {
	$defaults = array(
		'connection_type'        => 'internal',
		'auto_provision'         => false,
		'permit_wp_login'        => false, // Setting to 'true' is not currently supported.
		'get_user_by'            => 'login',
		'user_login_attribute'   => 'username',
		'user_email_attribute'   => 'Email',
		'display_name_attribute' => 'full_name',
		'first_name_attribute'   => 'full_name',
		'default_role'           => get_option( 'default_role' ),
		'internal_config'        => array(
			'strict'   => true,
			'debug'    => false,
			'baseurl'  => get_home_url(),
			'sp'       => array(
				'entityId'                 => get_home_url() . '/onelogin',
				'assertionConsumerService' => array(
					'url'     => get_home_url() . '/saml/login/',
					'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
				),
				'x509cert'                 => file_get_contents( ABSPATH . 'wp-content/uploads/private/saml/assets/cert/sp-cert.crt' ),
				'privateKey'               => file_get_contents( ABSPATH . 'wp-content/uploads/private/saml/assets/cert/sp-key.pem' ),
			),
			'idp'      => array(
				'entityId'                 => 'https://enterprise.login.utexas.edu/idp/shibboleth',
				'singleSignOnService'      => array(
					'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
					'url'     => 'https://enterprise.login.utexas.edu/idp/profile/SAML2/Redirect/SSO',
				),
				'singleLogoutService'      => array(
					'https://enterprise.login.utexas.edu/idp/profile/Logout',
				),
				'x509cert'                 => file_get_contents( ABSPATH . 'wp-content/uploads/private/saml/assets/cert/idp-cert-prod.crt' ),
				'certFingerprint'          => '',
				'certFingerprintAlgorithm' => '',
			),
			'security' => array(
				'allowRepeatAttributeName' => true,
			),
		),
	);
	$value    = isset( $defaults[ $option_name ] ) ? $defaults[ $option_name ] : $value;
	return $value;
}
