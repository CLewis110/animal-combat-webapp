<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Animal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Animal::truncate();


        $user = User::create([
            'username' => 'Charlie',
            'name' => 'Charlie',
            'email' => 'Charlie@admin.com',
            'password' => 'password',
        ]);

        User::create([
            'username' => 'Bob',
            'name' => 'Bob',
            'email' => 'Bob@notadmin.com',
            'password' => 'password',
        ]);

        $defensive = Category::create([
            'name' => 'Defensive'
        ]);

        $fast = Category::create([
            'name' => 'Fast'
        ]);

        $damage = Category::create([
            'name' => 'High Damage'
        ]);

        Animal::create([
            'name' => 'T-Rex',
            'category_id' => $damage->id,
            'movement_type' => 'walk',
            'attack_type' => 'tail swing',
            'description' => 'Blah blah dinosaur blah blah',
            'health' => '30',
            'strength' => '45',
            'defense' => '20',
            'speed' => '5',
            'user_id' => $user->id
        ]);

        Animal::create([
            'name' => 'Shark',
            'category_id' => $defensive->id,
            'movement_type' => 'swim',
            'attack_type' => 'bite',
            'description' => 'blah blah shark blah blah',
            'health' => '15',
            'strength' => '10',
            'defense' => '32',
            'speed' => '25',
            'user_id' => $user->id
        ]);

        Animal::create([
            'name' => 'Hawk',
            'category_id' => $fast->id,
            'movement_type' => 'fly',
            'attack_type' => 'peck',
            'description' => 'blah blah hawk blah blah',
            'health' => '5',
            'strength' => '8',
            'defense' => '9',
            'speed' => '24',
            'user_id' => $user->id
        ]);
    }
}
