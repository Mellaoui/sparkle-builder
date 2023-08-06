<?php

namespace Mellaoui\SparkleBuilder\Facades;

class SparkleBuilder extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'sparkle-builder';
    }
}