<?php

namespace MarcHampson\LaravelAdp\Commands;

use Illuminate\Console\Command;

class LaravelAdpCommand extends Command
{
    public $signature = 'laravel-adp';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
