<?php

/**
 * This file is included very early. See autoload.files in composer.json and
 * https://getcomposer.org/doc/04-schema.md#files
 */

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

/**
 * Load any .env file. See /.env.example.
 */
$dotenv = Dotenv::create(__DIR__);
try {
    $dotenv->load();
    $dotenv->required([
        'MYSQL_DATABASE',
        'MYSQL_USER',
        'REDIS_PREFIX',
        'DRUPAL_PUBLIC',
        'DRUPAL_PRIVATE',
        'DRUPAL_TEMP',
        'TRUSTED_HOSTS',
        'DRUPAL_SITE_MODE'
    ]);
    $dotenv->required('REDIS_ENABLED')->isBoolean();
    $dotenv->required('DRUPAL_SITE_MODE')->allowedValues(['dev', 'prod']);
}
catch (InvalidPathException $e) {
    // Do nothing. Production environments rarely use .env files.
}
