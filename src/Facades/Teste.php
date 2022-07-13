<?php

namespace Dnl4\Teste\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dnl4\Teste\Teste
 */
class Teste extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'teste';
    }
}
