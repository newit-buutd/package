<?php

namespace OptionVendor\OptionPackage\Facades;

use Illuminate\Support\Facades\Facade;

class OptionPackage extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'optionpackage';
    }
}
