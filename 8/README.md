# mparker17/drushrc/8

Drush 8 configuration.

# Install drush 8 with composer

    $ composer require 'drush/drush:^9'

# Install base drush configuration

1. Set up directories in your home folder:

        $ mkdir -p $HOME/.drush $HOME/.drush/backups

2. Copy base drush configuration:

        $ cp ./.drushrc.php $HOME/

# Install drush aliases

1. Copy `example.aliases.drushrc.php` to your drush configuration directory with your site name:

        $ cp aliases/example.aliases.drushrc.php $HOME/.drush/aliases/SITENAME.aliases.drushrc.php

2. Customize your `SITENAME.aliases.drushrc.php`:

        $ edit $HOME/.drush/aliases/SITENAME.aliases.drushrc.php

# Useful links:

* [Drush homepage](https://www.drush.org/)
* [Drush on Packagist](https://packagist.org/packages/drush/drush)
* [Drush 8 source code](https://github.com/drush-ops/drush/tree/8.x)
* [Drush 8 documentation](http://docs.drush.org/en/8.x/)
* [Drush 8 command reference](https://drushcommands.com/drush-8x/)
