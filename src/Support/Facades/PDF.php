<?php

namespace Wowpack\LaravelMPdf\Support\Facades;

use Illuminate\Support\Facades\Facade;
use Wowpack\LaravelMPdf\MPdfWrapper;

final class PDF extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return MPdfWrapper::class;
    }
}
