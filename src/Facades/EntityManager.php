<?php

namespace DigitalLab\Cycle\Facades;

use DigitalLab\Cycle\Contracts\EntityManager as EntityManagerContract;
use Illuminate\Support\Facades\Facade;

class EntityManager extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return EntityManagerContract::class;
    }
}

