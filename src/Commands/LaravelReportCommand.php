<?php

namespace Emilianotisato\LaravelReport\Commands;

use Illuminate\Console\Command;

class LaravelReportCommand extends Command
{
    public $signature = 'laravel-reports';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
