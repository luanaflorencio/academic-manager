<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Professor;
use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        foreach ($users as $user) {
            Professor::factory(2)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
