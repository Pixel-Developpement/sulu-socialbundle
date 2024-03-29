# Sulu social bundle


## Requirements

* PHP >= 7.4
* Sulu >= 2.4.*
* Symfony >= 5.4


## Installation

### Install the bundle

Execute the following [composer](https://getcomposer.org/) command to add the bundle to the dependencies of your
project:

```bash

composer require pixeldev/sulu-socialbundle --with-all-dependencies

```

### Enable the bundle

Enable the bundle by adding it to the list of registered bundles in the `config/bundles.php` file of your project:

 ```php
 return [
     /* ... */
     Pixel\SocialBundle\SocialBundle::class => ['all' => true],
 ];
 ```

### Update schema
```shell script
bin/console do:sch:up --force
```

## Bundle Config

Define the Admin Api Route in `routes_admin.yaml`
```yaml
social.settings_api:
  type: rest
  prefix: /admin/api
  resource: pixel_social.settings_route_controller
  name_prefix: social.
```

