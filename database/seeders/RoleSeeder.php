<?php

namespace Database\Seeders;

use App\Models\Staf;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $role = Role::create(['guard_name' => 'staf','name' => 'staf']);
        // $permission = Permission::create(['guard_name' => 'staf' ,'name' => 'edit_job']);
        // $role->givePermissionTo($permission);
        // $role = Role::create(['guard_name' => 'staf','name' => 'admin']);
        // $permission = Permission::create(['guard_name' => 'staf' ,'name' => 'edit_job']);
        // $role->givePermissionTo($permission);

        // $user = Staf::find(1);
        // $user->givePermissionTo('edit_job');

        // $user->assignRole('admin');


        $role_agency = Role::create(['name' => 'agency']);
        $permission_agency = Permission::create(['name' => 'all']);
        $role_agency->givePermissionTo($permission_agency);

        $role_staf = Role::create(['guard_name' => 'staf', 'name' => 'staf']);
        $permission_staf_create = Permission::create(['guard_name' => 'staf' ,'name' => 'create']);
        $permission_staf_read = Permission::create(['guard_name' => 'staf' ,'name' => 'read']);
        $permission_staf_update = Permission::create(['guard_name' => 'staf' ,'name' => 'update']);
        $permission_staf_delete = Permission::create(['guard_name' => 'staf' ,'name' => 'delete']);

        $role_staf->givePermissionTo($permission_staf_create);
        $role_staf->givePermissionTo($permission_staf_read);
        $role_staf->givePermissionTo($permission_staf_update);
        $role_staf->givePermissionTo($permission_staf_delete);

    }
}
