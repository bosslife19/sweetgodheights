<?php

namespace App\Console\Commands;

use App\Models\ScratchCard;
use Illuminate\Console\Command;

class GenerateScratchPins extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:pins {count=10}';

   
    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'Command description';
     protected $description = 'Generate unique scratch card pins';

    /**
     * Execute the console command.
     */
   public function handle()
    {
        $count = $this->argument('count');

        for ($i = 0; $i < $count; $i++) {
            ScratchCard::create([
                'pin' => str_pad(random_int(0, 9999999999), 10, '0', STR_PAD_LEFT),

            ]);
        }

        $this->info("Generated $count scratch pins.");
    }
}
