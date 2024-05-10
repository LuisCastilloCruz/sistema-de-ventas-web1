<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Printer;

class PrinterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Printer::create([
            'name'=>'Su impresora...',
        ]);
    }
}
