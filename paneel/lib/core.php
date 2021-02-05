<?php
// (A) ERROR REPORTING
error_reporting(E_ALL & ~E_NOTICE);

// (B) DATABASE SETTINGS
define('DB_HOST', 'localhost');
define('DB_NAME', 'samensoc_wiki');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'samensoc_wiki');
define('DB_PASSWORD', 'H15ndlZWLL');

// (C) FILE PATHS
define("PATH_LIB", __DIR__ . DIRECTORY_SEPARATOR);

// (D) START SESSION
session_start();