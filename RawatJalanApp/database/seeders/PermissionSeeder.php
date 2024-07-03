<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::updateOrCreate(['name' => 'admin']);
        $role_dokter = Role::updateOrCreate(['name' => 'dokter']);
        $role_apoteker = Role::updateOrCreate(['name' => 'apoteker']);

        $permission_dashboard = Permission::updateOrCreate(['name' => 'dashboard']);
        $permission_view_pasien = Permission::updateOrCreate(['name' => 'view_pasien']);
        $permission_apotik = Permission::updateOrCreate(['name' => 'apotik']);

        $role_admin->givePermissionTo($permission_dashboard);
        $role_admin->givePermissionTo($permission_view_pasien);
        $role_dokter->givePermissionTo($permission_view_pasien);
        $role_apoteker->givePermissionTo($permission_view_pasien);
        $role_apoteker->givePermissionTo($permission_apotik);
        $role_dokter->givePermissionTo($permission_apotik);
        $role_admin->givePermissionTo($permission_apotik);

        $user_admin = User::find(1);
        if ($user_admin) {
            $user_admin->assignRole('admin');
        }

        $user_dokter = User::find(2);
        if ($user_dokter) {
            $user_dokter->assignRole('dokter');
        }

        $user_apoteker = User::find(3);
        if ($user_apoteker) {
            $user_apoteker->assignRole('apoteker');
        }
    }
}
