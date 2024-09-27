<?php

namespace App\Console\Commands;

use App\Repositories\UsersCsvRepository;
use Illuminate\Console\Command;

class ExportUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export users to CSV files';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Exporting users...');
        UsersCsvRepository::generateFiles();
        $this->info('Users exported successfully!');
    }
}
