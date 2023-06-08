<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']); 
        $auditeerRole = Role::create(['name' => 'auditee']);
        $leadAudtiorRole = Role::create(['name' => 'lead-auditor']);
        $teamMemberRole = Role::create(['name' => 'team-member']);
     
        $admin = User::create([ 
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'center_id' => '1',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $admin->assignRole('admin');
    }
}
