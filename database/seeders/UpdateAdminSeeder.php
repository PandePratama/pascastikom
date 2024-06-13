<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class UpdateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cari admin berdasarkan email lama
        $admin = Admin::where('email', 'admin@gmail.com')->first();

        // Jika admin ditemukan, update email dan password
        if ($admin) {
            $admin->update([
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
            ]);
        }
    }
}
