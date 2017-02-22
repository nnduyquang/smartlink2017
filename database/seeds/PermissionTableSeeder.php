<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
//            [
//                'name' => 'role-list',
//                'display_name' => 'Display Role Listing',
//                'description' => 'See only Listing Of Role'
//            ],
//            [
//                'name' => 'role-create',
//                'display_name' => 'Create Role',
//                'description' => 'Create New Role'
//            ],
//            [
//                'name' => 'role-edit',
//                'display_name' => 'Edit Role',
//                'description' => 'Edit Role'
//            ],
//            [
//                'name' => 'role-delete',
//                'display_name' => 'Delete Role',
//                'description' => 'Delete Role'
//            ]
//,
//            [
//                'name' => 'user-list',
//                'display_name' => 'Display User Listing',
//                'description' => 'See only Listing Of User'
//            ],
//            [
//                'name' => 'user-create',
//                'display_name' => 'Create User',
//                'description' => 'Create New User'
//            ],
//            [
//                'name' => 'user-edit',
//                'display_name' => 'Edit User',
//                'description' => 'Edit User'
//            ],
//            [
//                'name' => 'user-delete',
//                'display_name' => 'Delete User',
//                'description' => 'Delete User'
//            ]
            [
                'name' => 'tintuc-list',
                'display_name' => 'Display Tin Tức Listing',
                'description' => 'See only Listing Of Tin Tức'
            ],
            [
                'name' => 'tintuc-create',
                'display_name' => 'Create Tin Tức',
                'description' => 'Create Tin Tức'
            ],
            [
                'name' => 'tintuc-edit',
                'display_name' => 'Edit Tin Tức',
                'description' => 'Edit Tin Tức'
            ],
            [
                'name' => 'tintuc-delete',
                'display_name' => 'Delete Tin Tức',
                'description' => 'Delete Tin Tức'
            ]
        ];
        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
