<?php

use Illuminate\Database\Seeder;
use App\Remis;
class RemisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         factory(App\Remis::class, 50)->create();
 
    }
}
