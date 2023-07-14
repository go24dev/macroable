<?php

namespace Nham24\Macroable\Test;

use Nham24\Macroable\MacroServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class IntegrationTestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [MacroServiceProvider::class];
    }

    public function avoidTestMarkedAsRisky(): void
    {
        $this->assertTrue(true);
    }
}
