<?php

use Illuminate\Http\Request;

beforeEach(function () {

});

it('provides isApi macro', function () {
    expect(Request::hasMacro('isApi'))->toBeTrue();
});

it('can check if request is api', function () {
    expect(resolve(Request::class)->create('http://website.com/api/users')->isApi())->toBeTrue();
});


it('can check if request is not api', function () {
    expect(resolve(Request::class)->create('http://website.com/no/users')->isApi())->toBeFalse();
});
