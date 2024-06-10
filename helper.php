<?php
// Define PATH_ASSET only if not defined
if (!defined('PATH_ASSET')) {
    define('PATH_ASSET', __DIR__ . '/');
}

if (!function_exists('asset')) {
    function asset($path)
    {
        return $_ENV['BASE_URL'] . $path;
    }
}

if (!function_exists('url')) {
    function url($uri)
    {
        return $_ENV['BASE_URL'] . $uri;
    }
}
?>
