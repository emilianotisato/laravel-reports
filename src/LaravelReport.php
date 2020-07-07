<?php

namespace Emilianotisato\LaravelReport;

use koolreport\widgets\koolphp\Table;

class LaravelReport
{
    public function create($component)
    {
        switch ($component) {
            case 'table':
                return new Table;

                break;

            default:
                throw new \Exception("No report compoent found", 1);

                break;
        }
    }
}
