<?php
/**
 * Parameter to uses for Soap and Rest call.
 * Go in the Magento BackOffice to generate a soap token (in system > integration)
 *
 * @author    Laurent Minguet <lamin@smile.fr>
 * @copyright 2016 Smile
 */
$params = [
    'main_url' => 'http://magento2.lxc/',
    'rest_account' => [
        'username' => 'admin',
        'password' => 'magent0',
    ],
    'soap_token' => 'noh8ey72g703gqi0uk7kf9basem68294',
    'exception_on_error' => false,
];
