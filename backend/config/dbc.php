<?php
if (!defined('DB_HOST'))
    define('DB_HOST', 'localhost');
if (!defined('DB_USER'))
    define('DB_USER', 'u523339939_donald');
if (!defined('DB_PASS'))
    define('DB_PASS', 'Cybertron@2026');
if (!defined('DB_NAME'))
    define('DB_NAME', 'u523339939_donald');

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
?>