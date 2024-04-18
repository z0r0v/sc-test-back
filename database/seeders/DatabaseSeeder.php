<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use App\Models\Item;
use App\Models\Player;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Editor_1',
            'email' => 'Editor_1@example.com',
            'password' => '123456',
            'role' => RolesEnum::Editor->value,
        ]);
        User::factory()->create([
            'name' => 'Editor_2',
            'email' => 'Editor_2@example.com',
            'password' => '123456',
            'role' => RolesEnum::Editor->value,
        ]);

        User::factory()->create([
            'name' => 'User_1',
            'email' => 'User_1@example.com',
            'password' => '123456',
            'role' => RolesEnum::User->value,
        ]);
        User::factory()->create([
            'name' => 'User_2',
            'email' => 'User_2@example.com',
            'password' => '123456',
            'role' => RolesEnum::User->value,
        ]);
        User::factory()->create([
            'name' => 'User_3',
            'email' => 'User_4@example.com',
            'password' => '123456',
            'role' => RolesEnum::User->value,
        ]);

        (new Player(['name' => 'player #1']))->save();
        (new Player(['name' => 'player #2']))->save();
        (new Player(['name' => 'player #3']))->save();

        (new Item(['name' => 'item #1']))->save();
        (new Item(['name' => 'item #2']))->save();
        (new Item(['name' => 'item #3']))->save();
    }
}
