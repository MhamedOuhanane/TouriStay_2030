<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission as ModelsPermission;

class Permission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Admine = Role::firstOrCreate(['id' => 1, 'name' => 'admine', 'guard_name' => 'admin']);
        $Owner = Role::firstOrCreate(['id' => 2, 'name' => 'proprietaire', 'guard_name' => 'owner']);
        $Touriste = Role::firstOrCreate(['id' => 3, 'name' => 'touriste', 'guard_name' => 'web']);

        $permissions = [
            ['name' => 'view dashbord admin', 'guard_name' => 'admin'],
            ['name' => 'view dashbord owner', 'guard_name' => 'owner'],
            ['name' => 'view profile owner', 'guard_name' => 'owner'],
            ['name' => 'view profile web', 'guard_name' => 'web'],
            ['name' => 'edit profile owner', 'guard_name' => 'owner'],
            ['name' => 'edit profile web', 'guard_name' => 'web'],
            ['name' => 'view annonces', 'guard_name' => 'web'],
            ['name' => 'favorite annonces', 'guard_name' => 'web'],
            ['name' => 'valide annonce', 'guard_name' => 'admin'],
            ['name' => 'edit annonce', 'guard_name' => 'owner'],
            ['name' => 'add annonce', 'guard_name' => 'owner'],
            ['name' => 'delete annonce', 'guard_name' => 'admin'],
            ['name' => 'Soft delete annonce', 'guard_name' => 'owner'],
        ];

        foreach ($permissions as  $value) {
            ModelsPermission::firstOrCreate($value);
        }

        $permissionAdmine = [
            'view dashbord admin',
            'valide annonce',
            'delete annonce',
        ];

        $permissionOwner = [
            'view dashbord owner',
            'view profile owner',
            'edit profile owner',
            'edit annonce',
            'add annonce',
            'Soft delete annonce',
        ];

        $permissionTouriste = [
            'view profile web',
            'edit profile web',
            'view annonces',
            'favorite annonces',
        ];

        foreach ($permissionAdmine as  $value) {
            $Admine->givePermissionTo($value);
        }

        foreach ($permissionOwner as  $value) {
            $Owner->givePermissionTo($value);
        }

        foreach ($permissionTouriste as  $value) {
            $Touriste->givePermissionTo($value);
        }
    }
}
