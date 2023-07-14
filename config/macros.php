<?php


use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Nham24\Macroable\Collection\Paginate;
use Nham24\Macroable\Request\IsApi;

return [
    Collection::class => [
        'paginate' => Paginate::class
    ],

    Request::class => [
        'isApi' => IsApi::class
    ]
];
