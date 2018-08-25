<?php
/**
 * @file
 * A Drush 8 configuration.
 */

// Debugging flags.
 #$options['cache'] = FALSE;
 #$options['v'] = 1;

// Command aliases.
$options['shell-aliases']['offline'] = 'variable-set -y --always-set maintenance_mode 1';
$options['shell-aliases']['online'] = 'variable-delete -y --exact maintenance_mode';
$options['shell-aliases']['rebuild-profile'] = 'make --working-copy --no-core --contrib-destination=. ./drupal-org.make.yml';
$options['shell-aliases']['sim'] = 'site-install minimal';
$options['shell-aliases']['stat'] = 'status';

// Store backups in ~/.drush/backups.
$options['backup-dir'] = "$_ENV[HOME]/.drush/backups/";

// Define a list of database tables that we might only want the structure for
// (i.e.: we do not want data from) when generating database dumps or
// synchronizing between environments.
$options['structure-tables']['common'] = array('cache', 'cache_*', 'history', 'search_dataset', 'search_index', 'search_node_links', 'search_total', 'sessions', 'watchdog');

// Define some command-specific defaults.
$command_specific['site-install'] = array(
  'site-mail' => 'example+test-site@example.localhost',
  'account-mail' => 'example+test-account@example.localhost',
  'account-name' => 'admin',
  'account-pass' => 'admin',
  'notify' => FALSE,
);
$command_specific['sql-dump'] = array('structure-tables-key' => 'common');
$command_specific['sql-sync'] = array(
  'structure-tables-key' => 'common',
  'sanitize' => TRUE,
  #'source-dump' => '/tmp/drush_sqlsync_source',
  #'target-dump' => '/tmp/drush_sqlsync_target',
);
$command_specific['sql-sync-pipe'] = array(
  'structure-tables-key' => 'common',
  'sanitize' => TRUE,
  #'source-dump' => '/tmp/drush_sqlsync_source',
  #'target-dump' => '/tmp/drush_sqlsync_target',
);
$command_specific['user-login'] = array('browser' => 0);
