<?php

namespace Yevhenii\Deploy\Facades;

use Illuminate\Support\Facades\Facade;

class Deploy extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'deploy';
    }
}
