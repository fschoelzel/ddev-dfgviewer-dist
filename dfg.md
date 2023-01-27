# Manual Installation

## Setup

```bash
mkdir ddev-dfgviewer-dist
cd ddev-dfgviewer-dist

WEB_ENV=''
WEB_ENV+='PATH=/var/www/html/vendor/bin:$PATH,'
WEB_ENV+='TYPO3_CONTEXT=Development,'
WEB_ENV+='TYPO3_INSTALL_DB_DRIVER=mysqli,'
WEB_ENV+='TYPO3_INSTALL_DB_USER=db,'
WEB_ENV+='TYPO3_INSTALL_DB_PASSWORD=db,'
WEB_ENV+='TYPO3_INSTALL_DB_HOST=db,'
WEB_ENV+='TYPO3_INSTALL_DB_DBNAME=db,'
WEB_ENV+='TYPO3_INSTALL_ADMIN_USER=admin,'
WEB_ENV+='TYPO3_INSTALL_ADMIN_PASSWORD=adminslub,'
WEB_ENV+='TYPO3_INSTALL_SITE_NAME=DFG-Viewer,'
WEB_ENV+='TYPO3_INSTALL_SITE_SETUP_TYPE=no,'  # Don't create home page, so that PIDs from distribution work
WEB_ENV+='TYPO3_INSTALL_WEB_SERVER_CONFIG=apache'  # Create public/.htaccess

ddev config \
    --project-name=dfgviewer-dist \
    --project-type=typo3 \
    --docroot=public \
    --create-docroot \
    --php-version=7.4 \
    --webserver-type=apache-fpm \
    --mariadb-version=10.1 \
    "--web-environment=$WEB_ENV"

ddev start

ddev composer create -y "typo3/cms-base-distribution:^9.5" --prefer-dist
ddev composer config platform.php "7.4"

# Install typo3-console for CLI setup
# Version 5.8.6 is the latest that supports TYPO3 9.5
ddev composer require helhum/typo3-console "^5.8.6"

ddev typo3cms install:setup

ddev composer require slub/dfgviewer:^5

ddev typo3 extension:activate dlf
ddev typo3 extension:activate dfgviewer

# Tolerate cHash errors, which is necessary when URLs containing a `tx_dlf[id]`
# parameter are generated on the client.
ddev typo3cms configuration:set FE/pageNotFoundOnCHashError 0
```

## Manual

- Have `public/`, `var/`, `composer.lock` in gitignore
- Add `config/sites/dfg-viewer/config.yaml`
- Pre-start hook in DDEV
- GPL 3.0 license

## Notes

- `.gitignore` is automatically created
