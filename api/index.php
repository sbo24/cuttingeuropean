<?php

// Vercel serverless entry point for Laravel
// CRITICAL: Set PHP temp dir to /tmp (Vercel's only writable location)
// This fixes tempnam() E_NOTICE + UnexpectedValueException chain in BladeCompiler
putenv('TMPDIR=/tmp');
ini_set('sys_temp_dir', '/tmp');
ini_set('upload_tmp_dir', '/tmp');

// Catch ALL errors and output them for debugging
set_exception_handler(function($e) {
    error_log('VERCEL_BOOT_EXCEPTION: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
    error_log('TRACE: ' . $e->getTraceAsString());
    http_response_code(500);
    header('Content-Type: text/plain');
    echo "Boot Error: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . ":" . $e->getLine() . "\n";
    echo $e->getTraceAsString();
});

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

// Copy bootstrap cache files to /tmp so Laravel can use them
$bootstrapCacheDir = dirname(__DIR__) . '/bootstrap/cache';
if (is_dir($bootstrapCacheDir)) {
    foreach (glob($bootstrapCacheDir . '/*.php') as $file) {
        $dest = '/tmp/bootstrap/cache/' . basename($file);
        if (!file_exists($dest)) {
            copy($file, $dest);
        }
    }
}

// Copy pre-compiled Blade views to /tmp so BladeCompiler finds them already compiled
$viewsDir = dirname(__DIR__) . '/storage/framework/views';
if (is_dir($viewsDir)) {
    foreach (glob($viewsDir . '/*.php') as $file) {
        $dest = '/tmp/storage/framework/views/' . basename($file);
        if (!file_exists($dest)) {
            copy($file, $dest);
        }
    }
}

// Set the document root to the public directory
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';

// Include Laravel's public/index.php
require __DIR__ . '/../public/index.php';
