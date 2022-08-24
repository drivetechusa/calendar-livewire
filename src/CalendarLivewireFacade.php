<?php

namespace Drivetechusa\CalendarLivewire;

use Illuminate\Support\Facades\Facade;

class CalendarLivewireFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'livewire-calendar';
    }
}
