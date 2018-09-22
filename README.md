# Lumen Console

A Lumen package for missing Laravel console commands.

## Installation

```
composer require albertcht/lumen-console:dev-master
```

* Add service provider
```
$app->register(AlbertCht\Lumen\Console\ConsoleServiceProvider::class);
```

## Available Artisan Commands

* `env`
* `serve`
* `event:generate`
* `make:event`
* `make:job`
* `make:mail`
* `make:model`
* `make:notification`
* `make:policy`
* `make:provider`
* `make:request`
* `make:resource`
* `make:rule`
* `make:test`
* `storage:link`
