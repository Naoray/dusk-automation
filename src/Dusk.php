<?php

namespace Naoray\DuskAutomation;

use Illuminate\Support\Facades\Facade;

class Dusk extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DuskAutomation::class;
    }
}