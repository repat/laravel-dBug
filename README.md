### Work done by repat
* Update PSR-4 compliance
* Facade, ServiceProvider, DBugHelper for Laravel 5.1.x
* Update README

### Work done by sunra
* Updated for PSR-4 compliance
* created composer package
* Updated to version from August 6th, 2012 of Ospinto's code
* move to psr-4

### Install via Composer 
https://packagist.org/packages/repat/laravel-dbug

`composer require repat/laravel-dbug`

Then install Facade and ServiceProvider in `config/app.php`:

```php
'providers' => [
// ...
repat\LaravelDBug\DBugServiceProvider::class,
// ...
```

```php
'aliases' => [
// ...
'dBug'       => repat\LaravelDBug\DBugFacade::class,
// ...
```

#### Usage

```php
   dBug::dump($var);

```
---

### Original README

#### Class arguments:

    __construct ($var, $forceType="", $bCollapsed=false, $var_name='')

    $var - variable to dump,
    $bCollapsed - view collapsed
    $var_name - name of variable - displayed in dump header



More examples at http://dbug.ospinto.com/examples.php

## Features

PHP version of ColdFusion’s cfdump.

Outputs colored and structured tabular variable information.

Variable types supported are: Arrays, Classes/Objects, Database and XML Resources.

Ability to force certain types of output. Example: You can force an
object variable to be outputted as an array type variable.

Stylesheet can be easily edited.

Table cells can be expanded and collapsed.

It’s FREE!!!
