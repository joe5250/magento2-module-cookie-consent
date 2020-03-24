# Magento 2 Module - Cookie Consent

![https://www.augustash.com](http://augustash.s3.amazonaws.com/logos/ash-inline-color-500.png)

**This is a private module and is not currently aimed at public consumption.**

## Overview

The `Augustash_CookieConsent` module enabled using the popular [Osano Cookie Consent](https://www.osano.com/cookieconsent) Javascript plugin for handling cookie usage disclosure.

## Installation

### Via Local Module

Install the extension files directly into the project source:

```bash
mkdir -p app/code/Augustash/CookieConsent/
curl -Ss https://github.com/augustash/magento2-module-cookie-consent/archive/1.0.2.tar.gz | tar xf - --strip 1 -C app/code/Augustash/CookieConsent/
bin/magento module:enable --clear-static-content Augustash_CookieConsent
bin/magento setup:upgrade
bin/magento cache:flush
```

### Via Composer

Install the extension using Composer using our development package repository:

```bash
composer config repositories.augustash composer https://packages.augustash.com/repo/private
composer require augustash/module-cookie-consent:~1.0.2
bin/magento module:enable --clear-static-content Augustash_CookieConsent
bin/magento setup:upgrade
bin/magento cache:flush
```

## Uninstall

After all dependent modules have also been disabled or uninstalled, you can finally remove this module:

```bash
bin/magento module:disable --clear-static-content Augustash_CookieConsent
rm -rf app/code/Augustash/CookieConsent/
composer remove augustash/module-cookie-consent
bin/magento setup:upgrade
bin/magento cache:flush
```

## Structure

[Typical file structure for a Magento 2 module](http://devdocs.magento.com/guides/v2.3/extension-dev-guide/build/module-file-structure.html).
