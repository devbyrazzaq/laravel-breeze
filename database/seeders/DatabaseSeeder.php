<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test  User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->hasStatuses(5)->count(10)->create();

        $user1 = User::find(1);
        $user2 = User::find(2);
        $user3 = User::find(3);
        $user4 = User::find(4);
        $user5 = User::find(5);
        $user6 = User::find(6);
        $user7 = User::find(7);
        $user8 = User::find(8);
        $user9 = User::find(9);
        $user10 = User::find(10);

        $user1->follows()->save($user2);
        $user1->follows()->save($user3);
        $user1->follows()->save($user4);
        $user1->follows()->save($user5);
        $user1->follows()->save($user6);
        $user1->follows()->save($user7);
        $user1->follows()->save($user8);
        $user1->follows()->save($user9);
        



    }
}
