<?php

// Redirect all requests to Laravel's public/index.php
// This is the Vercel serverless entry point for Laravel

// Fix writable paths for Vercel's read-only filesystem
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_SERVER['APP_STORAGE'] = '/tmp/storage';

// Create necessary directories in /tmp
$dirs = [
    '/tmp/storage',
    '/tmp/storage/app',
    '/tmp/storage/app/public',
    '/tmp/storage/framework',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/testing',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Set the document root to the public directory
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';

// Include Laravel's public/index.php
require __DIR__ . '/../public/index.php';
