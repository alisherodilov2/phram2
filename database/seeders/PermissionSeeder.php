<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $permissions = [
            [
                'name' => 'user_index',
                'guard_name' => 'web',
            ],
            [
                'name' => 'project_index',
                'guard_name' => 'web',
            ],
            [
                'name' => 'partner_index',
                'guard_name' => 'web',
            ],
            [
                'name' => 'fil_index',
                'guard_name' => 'web',
            ],
            [
                'name' => 'vacancy_index',
                'guard_name' => 'web',
            ],
            [
                'name' => 'product_index',
                'guard_name' => 'web',
            ],
            [
                'name' => 'doc_index',
                'guard_name' => 'web',
            ],
            [
                'name' => 'contact_index',
                'guard_name' => 'web',
            ],
            [
                'name' => 'news_index',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create_role',
                'guard_name' => 'web',
            ],
            [
                'name' => 'permissions_index',
                'guard_name' => 'web',
            ],
        ];
        Permission::insert($permissions);
        $roles = [
            [
                'name' => 'admin',
                'guard_name' => 'web',
            ],
        ];
        Role::insert($roles);
        $roles = Role::pluck('name')->toArray();
        $user = User::find(4);
        $user->syncRoles($roles);
        $permissions = Permission::pluck('name')->toArray();

        $role = Role::where('name', 'admin')->get()->first();
        $role->syncPermissions($permissions);
    }
}
