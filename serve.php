<?php
/**
 * Aligator - A minimilize PHP Framework For Web workers
 *
 * @package  Aligator
 * @author   Alex TONDOH <alextondoh@gmail.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
$_SERVER['SCRIPT_NAME'] = '/index.php';
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
