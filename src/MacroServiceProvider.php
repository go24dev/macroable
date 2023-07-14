<?php

namespace Nham24\Macroable;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Traits\Macroable;

class MacroServiceProvider extends ServiceProvider
{
    public function register()
    {

        $this->mergeConfigFrom(__DIR__ . '/../config/macros.php', 'macros');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/macros.php' => config_path('macros.php'),
            ], 'macros');
        }

        foreach($this->macros() as $macroable => $macros) {

            if(in_array(Macroable::class, class_uses_recursive($macroable), true)) {

                Collection::make($macros)
                        ->reject(fn ($class, $macro) => $macroable::hasMacro($macro))
                        ->each(fn ($class, $macro) => $macroable::macro($macro, app($class)()));
            }
        }
    }

    public function macros(): array
    {
        return config('macros');
    }
}
