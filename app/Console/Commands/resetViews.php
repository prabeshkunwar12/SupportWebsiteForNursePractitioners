<?php

namespace App\Console\Commands;

use App\Models\Posts;
use Illuminate\Console\Command;

class resetViews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'resetViews';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        

        Posts::select('view_count')
            ->update(['view_count' => 0]);

        
        return Command::SUCCESS;
    }
}
