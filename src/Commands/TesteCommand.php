<?php

namespace Dnl4\Teste\Commands;

use Illuminate\Console\Command;

class TesteCommand extends Command
{
    public $signature = 'teste';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
