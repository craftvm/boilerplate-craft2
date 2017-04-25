<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

    // All environments
    '*' => array(
        'server' => getenv('CRAFTVM_DB_HOST'),
        'database' => getenv('CRAFTVM_DB_NAME'),
        'user' => getenv('CRAFTVM_DB_USER'),
        'password' => getenv('CRAFTVM_DB_PASS'),
        'tablePrefix' => 'craft',
    ),

    // Live (production) environment
    'live'  => array(
    ),

    // Staging (pre-production) environment
    'staging'  => array(
    ),

    // Local (development) environment
    'local'  => array(
    ),
);
