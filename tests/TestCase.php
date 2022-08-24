<?php

namespace Drivetechusa\CalendarLivewire\Tests;

use Drivetechusa\CalendarLivewire\CalendarLivewireServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as BaseCase;

class TestCase extends BaseCase
{
    protected function getPackageProviders($app)
    {
        return [
            LivewireServiceProvider::class,
            CalendarLivewireServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('app.key', 'base64:Hupx3yAySikrM2/edkZQNQHslgDWYfiBfCuSThJ5SK8=');
    }
}
