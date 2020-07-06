<?php

namespace Emilianotisato\LaravelReport;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Emilianotisato\LaravelReport\LaravelReport
 */
class LaravelReportFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-reports';
    }
}
