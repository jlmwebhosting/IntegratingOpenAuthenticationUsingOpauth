<?php

$config['opauth'] = array(
    /**
     * Path where Opauth is accessed.
     *  - Begins and ends with /
     *  - eg. if Opauth is reached via http://example.org/auth/, path is '/auth/'
     *  - if Opauth is reached via http://auth.example.org/, path is '/'
     */
    'path' => '/auth/login/',
    /**
     * Callback URL: redirected to after authentication, successful or otherwise
     */
    'callback_url' => 'http://localhost/auth/authenticate/',
    'callback_transport' => 'post',
    /**
     * A random string used for signing of $auth response.
     */
    'security_salt' => 'random string',
    /**
     * Strategy
     * Refer to individual strategy's documentation on configuration requirements.
     *
     * eg.
     * 'Strategy' => array(
     *
     *   'Facebook' => array(
     *      'app_id' => 'APP ID',
     *      'app_secret' => 'APP_SECRET'
     *    ),
     *
     * )
     *
     */
    'Strategy' => array(
        // Define strategies and their respective configs here
        'Twitter' => array(
            'key' => 'twitter app key',
            'secret' => 'twitter app secret'
        ),
	'LinkedIn' => array(
            'api_key' => 'linkedin app key',
            'secret_key' => 'linkedin app secret'
        )
    ),
);

?>
