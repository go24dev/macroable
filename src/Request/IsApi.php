<?php

namespace Nham24\Macroable\Request;

use Closure;

class IsApi
{
    public function __invoke(): Closure
    {
        return fn () => $this->is('api/*');
    }
}
