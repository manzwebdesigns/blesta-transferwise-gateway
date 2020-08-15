# TransferWise Gateway

[![Build Status](https://travis-ci.org/manzwebdesigns/transferwise.svg?branch=master)](https://travis-ci.org/manzwebdesigns/transferwise) [![Coverage Status](https://coveralls.io/repos/github/manzwebdesigns/transferwise/badge.svg?branch=master)](https://coveralls.io/github/manzwebdesigns/transferwise?branch=master)

This is a non-merchant gateway for Blesta that integrates with [TransferWise](https://www.transferwise.com/).

## Install the Gateway

1. You can install the gateway via composer:

    ```
    composer require manzwebdesigns/transferwise
    ```

2. Upload the source code to a /components/gateways/nonmerchant/transfer_wise/ directory within
your Blesta installation path.

    For example:

    ```
    /var/www/html/blesta/components/nonmerchant/transfer_wise/
    ```

3. Log in to your admin Blesta account and navigate to
> Settings > Payment Gateways

4. Find the TransferWise gateway and click the "Install" button to install it

5. You're done!

### Blesta Compatibility

|Blesta Version|Module Version|
|--------------|--------------|
|>= v4.11.0|v1.0.0|
