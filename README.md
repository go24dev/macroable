# A set of useful Laravel macros

This repository contains some useful macros and extensible Macroable trait.

## Installation

You can pull in the package via composer:

``` bash
composer require nham24/macroable
```

The package will automatically register itself.

## Collections

- [`paginate`](#paginate)


### `paginate`

Create a `LengthAwarePaginator` instance for the items in the collection.

```php
collect($posts)->paginate(5);
```

This paginates the contents of `$posts` with 5 items per page. `paginate` accepts quite some options, head over to [the Laravel docs](https://laravel.com/docs/5.4/pagination) for an in-depth guide.

```
paginate(int $perPage = 15, string $pageName = 'page', int $page = null, int $total = null, array $options = [])
```

### Request

- [`isApi`](#isJson)

### `isApi`

Check if the request is an API request.

```php

$request = 

request()->isApi();
```
