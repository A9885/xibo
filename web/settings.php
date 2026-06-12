<?php
$dbhost = 'localhost';
$dbuser = 'xibo';
$dbpass = 'Signtral@DB@2026';
$dbname = 'xibo';
$dbport = '3306';
$dbssl = false;
$dbsslverify = false;

// Optional: Legacy constants for compatibility
define('DBHOST', $dbhost);
define('DBUSER', $dbuser);
define('DBPASS', $dbpass);
define('DBNAME', $dbname);
define('DBPORT', $dbport);
define('SECRET_KEY', '323246d05ebd62a0426c15d7921d580b');
define('LIBRARY_LOCATION', '/var/www/xibo/library/');
define('CACHE_PATH', '/var/www/xibo/cache/');

// OAuth2 API Key Paths
$apiKeyPaths = [
    'publicKeyPath' => LIBRARY_LOCATION . 'certs/public.key',
    'privateKeyPath' => LIBRARY_LOCATION . 'certs/private.key',
    'encryptionKey' => 'zwI6svbC7VFTvpTkz5a1EZXNnt6QB8bmE0dcl6l7smA='
];
