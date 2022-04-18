<?php
include_once __DIR__ . '/../../../../configure.php';

if (ENABLE_SSL == true) {
    $link = HTTPS_SERVER . DIR_WS_HTTPS_CATALOG;
} else {
    $link = HTTP_SERVER . DIR_WS_HTTP_CATALOG;
}

define('MODULE_PAYMENT_PRIVACYGATE_TEXT_TITLE', 'PrivacyGate  - Bitcoin/Bitcoin Cash/DAI/Litecoin/Ethereum/USD Coin Payments <a href="https://dash.privacygate.io/" target=“_blank" rel="noopener">(Learn more)</a>');
define('MODULE_PAYMENT_PRIVACYGATE_TEXT_DESCRIPTION', 'PrivacyGate is a service that enables merchants to accept multiple cryptocurrencies directly into a user-controlled wallet. </br>'
    . 'For instant privacygate\'s payment notificatins please copy/paste <b>' . $link . tep_output_string('ipn_privacygate.php') . '</b> url to Settings/Webhook subscription <a href="https://dash.privacygate.io/settings" target="_blank">https://dash.privacygate.io/settings</a>');
define('MODULE_PAYMENT_PRIVACYGATE_TEXT_CATALOG_TITLE', 'PrivacyGate  - Bitcoin/Bitcoin Cash/DAI/Litecoin/Ethereum/USD Coin Payments');
