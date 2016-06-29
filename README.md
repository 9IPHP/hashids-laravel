Hashids for Laravel
=====================

A hashids (hashids) wrapper for Laravel.

[Hashids](https://github.com/ivanakimov/hashids.php) is a small PHP class to generate YouTube-like ids from one or many numbers. Use hashids when you do not want to expose your database ids to the user.

Installation
------------

require package in `composer.json`

```json
"require": {
    "specs/hashids-laravel": "^0.1"
},
```

add hashids’s service provider in `config/app.php`

```php
'providers' => array(

    Illuminate\Validation\ValidationServiceProvider::class,
    ...
    Illuminate\View\ViewServiceProvider::class,

    Specs\Hashids\HashidsServiceProvider::class,
),
```

and hashids’s facade (also in `config/app.php`)

```php
'aliases' => array(

    'App' => Illuminate\Support\Facades\App::class,
    ...
    'View' => Illuminate\Support\Facades\View::class,

    'Hashids' => Specs\Hashids\HashidsFacade::class,

),
```

You should also publish the config file.

```bash
php artisan vendor:publish --tag=config
```

And then reset the default values in `config/hashids.php`.

Example Usage
-------------

Use `Hashids` Facade:

```php
$id = Hashids::encode(1, 2, 3);
$numbers = Hashids::decode($id);

var_dump($id, $numbers);
```

```
string(5) "laHquq"
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
```

[More usage](http://hashids.org/php/)