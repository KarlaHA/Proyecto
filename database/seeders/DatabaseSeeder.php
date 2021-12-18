<?php

namespace Database\Seeders;

use App\Models\Registroempresa;
use App\Models\Alumnosporcarrera;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Registroempresa::factory(10)->create();
        //Alumnosporcarreras::factory(20)->create();
    }
        
    
}

