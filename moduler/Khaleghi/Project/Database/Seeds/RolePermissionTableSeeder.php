<?php
namespace Khaleghi\Project\Database\Seeds;

use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as ModelsRole;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Permission::findOrCreate('manage role_permissions');
        Permission::findOrCreate('manage categories');
        Permission::findOrCreate('auther');


        Role::findOrCreate('operator')->givePermissionTo(['auther']);

        //User::permission('auther')->get()
    }
}
