<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

  '*' => array(
    'omitScriptNameInUrls' => true,
    'preventUserEnumeration' => true,
    'usePathInfo' => true,
    'cacheDuration' => false,
    'useEmailAsUsername' => true,
    'autoLoginAfterAccountActivation' => true,
    'enableCsrfProtection' => false,
    'cpTrigger' => 'admin',
    'pageTrigger' => 'page/',
    'siteUrl' => getenv('CRAFTVM_SITE_URL'),
    'env' => getenv('CRAFTVM_ENVIRONMENT'),
    //
    'environmentVariables' => array(
        'baseUrl' => getenv('CRAFTVM_BASE_URL'),
        'basePath' => getenv('CRAFTVM_BASE_PATH'),
    ),
  ),

  // Production environment
  'live'  => array(
    'devMode' => false,
    'enableTemplateCaching' => true,
    'allowAutoUpdates' => false,
  ),

  // Staging environment
  'staging'  => array(
    'devMode' => false,
    'enableTemplateCaching' => true,
    'allowAutoUpdates' => false,
  ),

  // Local (development) environment
  'local'  => array(
    'devMode' => true,
    'enableTemplateCaching' => false,
    'allowAutoUpdates' => false,
  ),
);
