<?php

namespace Database\Seeders;

use App\Models\Registroempresa;
<<<<<<< HEAD
//use App\Models\Alumnosporcarreras;
=======
use App\Models\Alumnosporcarrera;
>>>>>>> 726dc1162723fd59babcf155479506b19d89ff35
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
<<<<<<< HEAD
        Registroempresa::factory(10)->create();
        //Alumnosporcarreras::factory(20)->create();
=======
        Registroempresa::factory(30)->create();
        Alumnosporcarrera::factory(20)->create();
>>>>>>> 726dc1162723fd59babcf155479506b19d89ff35
    }
        
    
}

