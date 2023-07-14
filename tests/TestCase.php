<?php

namespace Spatie\CollectionMacros\Test;

use Nham24\Macroable\MacroServiceProvider;
use PHPUnit\Framework\TestCase as BaseTestCase;
use ReflectionClass;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        $this->createDummyprovider()->register();

    }

    /**
     * @throws \ReflectionException
     */
    protected function createDummyprovider(): MacroServiceProvider
    {
        $reflectionClass = new ReflectionClass(MacroServiceProvider::class);

        return $reflectionClass->newInstanceWithoutConstructor();
    }
}
