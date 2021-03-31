<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Disciplina;
use Illuminate\Database\Seeder;

class DisciplinaSeeder extends Seeder
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
            Disciplina::factory(1)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
