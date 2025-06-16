<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class UserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            // user menu
            [
                'name'=>'User List',
                'guard_name'=>'web',
                'group_name'=>'User',
            ],
            [
                'name'=>'User Create',
                'guard_name'=>'web',
                'group_name'=>'User',
            ],
            [
                'name'=>'User Edit',
                'guard_name'=>'web',
                'group_name'=>'User',
            ],
            [
                'name'=>'User Delete',
                'guard_name'=>'web',
                'group_name'=>'User',
            ],
            [
                'name'=>'User Notification Status',
                'guard_name'=>'web',
                'group_name'=>'User',
            ],
            [
                'name'=>'User Login As',
                'guard_name'=>'web',
                'group_name'=>'User',
            ],

            // Role Menu
            [
                'name'=>'User Role List',
                'guard_name'=>'web',
                'group_name'=>'User Role',
            ],
            [
                'name'=>'User Role Create',
                'guard_name'=>'web',
                'group_name'=>'User Role',
            ],
            [
                'name'=>'User Role Edit',
                'guard_name'=>'web',
                'group_name'=>'User Role',
            ],
            [
                'name'=>'User Role Delete',
                'guard_name'=>'web',
                'group_name'=>'User Role',
            ],
            [
                'name'=>'User Role Manage Permission',
                'guard_name'=>'web',
                'group_name'=>'User Role',
            ],

            // Note Menu
            [
                'name'=>'User Note List',
                'guard_name'=>'web',
                'group_name'=>'User Note',
            ],
            [
                'name'=>'User Note Create',
                'guard_name'=>'web',
                'group_name'=>'User Note',
            ],
            [
                'name'=>'User Note Edit',
                'guard_name'=>'web',
                'group_name'=>'User Note',
            ],
            [
                'name'=>'User Note Delete',
                'guard_name'=>'web',
                'group_name'=>'User Note',
            ],

            // Blog Category Menu
            [
                'name'=>'User Blog Category List',
                'guard_name'=>'web',
                'group_name'=>'User Blog Category',
            ],
            [
                'name'=>'User Blog Category Create',
                'guard_name'=>'web',
                'group_name'=>'User Blog Category',
            ],
            [
                'name'=>'User Blog Category Edit',
                'guard_name'=>'web',
                'group_name'=>'User Blog Category',
            ],
            [
                'name'=>'User Blog Category Delete',
                'guard_name'=>'web',
                'group_name'=>'User Blog Category',
            ],
            [
                'name'=>'User Blog Category Status',
                'guard_name'=>'web',
                'group_name'=>'User Blog Category',
            ],

            // Blog Category Sub Menu
            [
                'name'=>'User Blog Category Sub List',
                'guard_name'=>'web',
                'group_name'=>'User Blog Category',
            ],
            [
                'name'=>'User Blog Category Sub Create',
                'guard_name'=>'web',
                'group_name'=>'User Blog Category',
            ],
            [
                'name'=>'User Blog Category Sub Edit',
                'guard_name'=>'web',
                'group_name'=>'User Blog Category',
            ],
            [
                'name'=>'User Blog Category Sub Delete',
                'guard_name'=>'web',
                'group_name'=>'User Blog Category',
            ],
            [
                'name'=>'User Blog Category Sub Status',
                'guard_name'=>'web',
                'group_name'=>'User Blog Category',
            ],

            // Role Menu
            [
                'name'=>'User Trafic Email List',
                'guard_name'=>'web',
                'group_name'=>'User Trafic Email',
            ],
            [
                'name'=>'User Trafic Email Create',
                'guard_name'=>'web',
                'group_name'=>'User Trafic Email',
            ],
            [
                'name'=>'User Trafic Email Edit',
                'guard_name'=>'web',
                'group_name'=>'User Trafic Email',
            ],
            [
                'name'=>'User Trafic Email Delete',
                'guard_name'=>'web',
                'group_name'=>'User Trafic Email',
            ],
            [
                'name'=>'User Trafic Email Import',
                'guard_name'=>'web',
                'group_name'=>'User Trafic Email',
            ],

            // Slider Menu
            [
                'name'=>'Slider List',
                'guard_name'=>'web',
                'group_name'=>'Slider',
            ],
            [
                'name'=>'Slider Create',
                'guard_name'=>'web',
                'group_name'=>'Slider',
            ],
            [
                'name'=>'Slider Edit',
                'guard_name'=>'web',
                'group_name'=>'Slider',
            ],
            [
                'name'=>'Slider Delete',
                'guard_name'=>'web',
                'group_name'=>'Slider',
            ],

            // Our Team Menu
            [
                'name'=>'Our Team List',
                'guard_name'=>'web',
                'group_name'=>'Our Team',
            ],
            [
                'name'=>'Our Team Create',
                'guard_name'=>'web',
                'group_name'=>'Our Team',
            ],
            [
                'name'=>'Our Team Edit',
                'guard_name'=>'web',
                'group_name'=>'Our Team',
            ],
            [
                'name'=>'Our Team Delete',
                'guard_name'=>'web',
                'group_name'=>'Our Team',
            ],

            // Client Says Menu
            [
                'name'=>'Client Says List',
                'guard_name'=>'web',
                'group_name'=>'Client Says',
            ],
            [
                'name'=>'Client Says Create',
                'guard_name'=>'web',
                'group_name'=>'Client Says',
            ],
            [
                'name'=>'Client Says Edit',
                'guard_name'=>'web',
                'group_name'=>'Client Says',
            ],
            [
                'name'=>'Client Says Delete',
                'guard_name'=>'web',
                'group_name'=>'Client Says',
            ],

            // Slider Menu
            [
                'name'=>'About Us Slider List',
                'guard_name'=>'web',
                'group_name'=>'About Us Slider',
            ],
            [
                'name'=>'About Us Slider Create',
                'guard_name'=>'web',
                'group_name'=>'About Us Slider',
            ],
            [
                'name'=>'About Us Slider Edit',
                'guard_name'=>'web',
                'group_name'=>'About Us Slider',
            ],
            [
                'name'=>'About Us Slider Delete',
                'guard_name'=>'web',
                'group_name'=>'About Us Slider',
            ],

            // Front setting menu
            [
                'name'=>'Front Setting Menu',
                'guard_name'=>'web',
                'group_name'=>'Front Setting Menu',
            ],
            
        ];

        foreach ($data as $key => $value) {
            $find = Permission::where('name', $value['name'])->where('guard_name',$value['guard_name'])->first();
            
            if((!empty($find))) {
                $find->update($value);
            }

            if (is_null($find)) {
                Permission::create($value);
            }
        }
    }
}
