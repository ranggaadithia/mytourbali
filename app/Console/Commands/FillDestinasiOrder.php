<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use App\Models\Destination;

class FillDestinasiOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'destination:fill-order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fill order for destinasi that does not have an order';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Destination::fillOrder();
        $this->info('Destinasi order has been filled.');
        return 0;
    }
}
