# desec-php

This is a PHP library for interacting with the [deSEC](https://desec.io/) API. deSEC is a free DNS anycast hosting service designed with security in mind. With this library, you can easily manage your domains, DNS records, and more.

## Installation

Use [Composer](https://getcomposer.org/) to install the deSEC PHP library.

```bash
composer require pinga/desec-php
```

## Usage

```php
<?php

require 'vendor/autoload.php';

$api = new \deSEC\deSEC("your-api-token");  // Replace with your actual API token

try {
    $response = $api->getDomain('example.com');
    print_r($response);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
```

## Available Methods

Here are some of the available methods in this library:

* getDomain($name)
* createDomain($name)
* deleteDomain($name)
* exportZonefile($name)
* createRRset($name, $subname, $type, $ttl, $records)
* getRRsets($name)
* getRRset($name, $subname, $type)
* modifyRRset($name, $subname, $type, $ttl, $records)
* deleteRRset($name, $subname, $type)

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License - see the LICENSE file for details.
