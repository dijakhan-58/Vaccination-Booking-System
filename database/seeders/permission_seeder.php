<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class permission_seeder extends Seeder
{
  
    public function run(): void
    {
      $permissions = [
        'view dashboard',
        'create role',
        'fetch roles',
        'viewall roles',
        'edit roles',
        'delete roles',
        'create user',
        'fetch users',
        'viewall users',
        'edit users',
        'delete users',
        'create hospital',
        'fetch hospitals',
        'viewall hospitals',
        'edit hospitals',
        'delete hospitals',
        'create children',
        'fetch children',
        'viewall children',
        'edit children',
        'delete children',
        'create vaccines',
        'fetch vaccines',
        'viewall vaccines',
        'edit vaccines',
        'delete vaccines',
        'upcomming vaccines view',
        'vaccination report generate',
        'vaccination report view',
        'vaccination report viewsingle',
        'vaccination status view',
        'vaccination status edit',
        'vaccination status delete',
        'parent appointment request view',
        'parent appointment request edit',
        'parent appointment request delete',
        'upcomming vaccination status',
        'upcomming vaccination edit',
        'upcomming vaccination delete',
        'profile'

        
        
        ];
        
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission, 'guard_name' => 'web']);
        }
    }
}