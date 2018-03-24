<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=[
            [
                'name' => 'role-read',
                'display_name' => 'Display Role Listing',
                'description' => 'See only Listing Of Role'
            ],
            [
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'Create New Role'
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Edit Role',
                'description' => 'Edit Role'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete Role'
            ],
            [
                'name' => 'card-application-list',
                'display_name' => 'Display Card Applications',
                'description' => 'See only Listing Of Card Applications'
            ],
            [
                'name' => 'product-list',
                'display_name' => 'Display Product Listing',
                'description' => 'See only Listing Of Product'
            ],
            [
                'name' => 'product-create',
                'display_name' => 'Create Product',
                'description' => 'Create New Product'
            ],
            [
                'name' => 'product-edit',
                'display_name' => 'Edit Product',
                'description' => 'Edit Product'
            ],
            [
                'name' => 'product-delete',
                'display_name' => 'Delete Product',
                'description' => 'Delete Product'
            ]
        ];

        foreach ($permissions as $key=>$value){
            Permission::create($value);
        }
    }
}
