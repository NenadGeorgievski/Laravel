<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Category;
use App\Models\User;
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
        $user = User::factory()->create([
            'name' => 'Nenad Georgievski'
        ]);

        
 
        Car::factory(20)->create([
            'user_id' => $user->id
        ]);
     
    }
}
