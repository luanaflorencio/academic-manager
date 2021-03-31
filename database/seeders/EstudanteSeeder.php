<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Estudante;
use Illuminate\Database\Seeder;

class EstudanteSeeder extends Seeder
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
            Estudante::factory(5)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
