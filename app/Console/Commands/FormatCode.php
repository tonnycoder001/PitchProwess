<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class FormatCode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:fmt';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Format the codebase using PHP-CS-Fixer and other formatters';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Formatting PHP code with PHP-CS-Fixer...');
        $this->runProcess(['vendor/bin/php-cs-fixer', 'fix', '/Users/anthonykahihia/Herd']);


        $this->info('Code formatting completed.');
    }
    protected function runProcess(array $command)
    {
        $process = new Process($command);
        $process->setTimeout(null);
        $process->run(function ($type, $buffer) {
            echo $buffer;
        });

        if (!$process->isSuccessful()) {
            $this->error('The command did not run successfully.');
        }
    }
}
