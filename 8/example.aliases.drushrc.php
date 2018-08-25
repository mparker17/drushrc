<?php
/**
 * @file
 * Drush 8 aliases for the example website.
 */

$aliases['dev'] = array(
  'uri' => 'https://www.example.com',
  'root' => '/var/www/vhosts/example.com',
  'remote-host' => 'ssh.example.com',
  'remote-user' => 'example',
  'path-aliases' => array(
    '%drush-script' => '/var/www/vhosts/example.com/vendor/bin/drush',
  ),
);
