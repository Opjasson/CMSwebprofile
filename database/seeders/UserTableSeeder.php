<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()->create([
            'name' => 'testing user',
            'username' => 'jasson@company.co.id',
            'email' => 'test@example.com',
            'alamat' => 'jalan mejasem baru 4 no 45',
            'kota' => 'kota Tegal',
            'telepon' => '087895031524',
        ]);
    }
}
