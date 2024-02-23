<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        User::create([
            'name' => 'super admin',
            'email' => 'admin@admin.com',
            'role'      => '1',
            'password' => bcrypt('admin123'),
        ]);
        
      
    }
}
