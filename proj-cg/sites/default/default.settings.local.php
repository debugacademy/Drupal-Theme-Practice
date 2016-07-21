<?php

/**
 * For local or shared development, copy this file to settings.local.php,
 * then populate the copied file with your website's database information and base_url.
 *
 * This file will not be committed to the repository, which allows multiple
 * instances of the website to share the same codebase.
 */

$databases['default']['default'] = array(
   'driver' => 'mysql',
   'database' => '', // Choose & write a name for this site's db in-between
                     //   the single quotation marks. DB name must contain only
                     //   lowercase letters, numbers, and underscores.

   'username' => 'root', // root is the academyvm mysql username
   'password' => 'root', // root is the academyvm mysql password
   'host' => 'localhost',
   'collation' => 'utf8_general_ci',
 );


/**
 * Base URL
 *   
 * Examples:
 *   $base_url = 'http://dev-1.academyvm.dev/proj-arcs';
 *   $base_url = 'http://dev-2.academyvm.dev/proj-debugacademy';
 *   $base_url = 'http://stage-1.academyvm.dev/proj-arcs';
 */
$base_url = '';  // Write the site's URL in-between the single quotations

