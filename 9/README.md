# mparker17/drushrc/9

Drush 9 configuration.

# Install drush 9 with composer

    $ composer require 'drush/drush:^8'

# Install base drush configuration

1. Set up directories in your home folder:

        $ mkdir -p $HOME/.drush $HOME/.drush/aliases $HOME/.drush/backups

2. Copy base drush configuration:

        $ cp ./drush.yml $HOME/.drush/

# Install drush aliases

1. Copy `aliases/example.yml` to your drush configuration directory with your site name:

        $ cp aliases/example.yml $HOME/.drush/aliases/SITENAME.yml

2. Customize your `SITENAME.yml`:

        $ edit $HOME/.drush/aliases/SITENAME.yml

# Useful links:

* [Drush homepage](https://www.drush.org/)
* [Drush on Packagist](https://packagist.org/packages/drush/drush)
* [Drush 9 source code](https://github.com/drush-ops/drush/tree/master)
* [Drush 9 documentation](http://docs.drush.org/en/master/)
* [Drush 9 command reference](https://drushcommands.com/drush-9x/)
