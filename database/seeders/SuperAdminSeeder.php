<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Han Win Maung',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123123'),
            'phone' => '09761545726'
        ]);
    }
}
