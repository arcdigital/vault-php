<?php

namespace Arcdigital\Vault\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Arcdigital\Vault\Vault
 */
class Vault extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Arcdigital\Vault\Vault::class;
    }
}
