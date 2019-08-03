<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2018-03-17 03:21:57',
                'updated_at' => '2018-03-17 03:21:57',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2018-03-17 03:21:57',
                'updated_at' => '2018-03-17 03:21:57',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2018-03-17 03:21:57',
                'updated_at' => '2018-03-17 03:21:57',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-03-17 03:21:58',
                'updated_at' => '2018-03-17 03:21:58',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-03-17 03:21:59',
                'updated_at' => '2018-03-17 03:21:59',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-03-17 03:22:04',
                'updated_at' => '2018-03-17 03:22:04',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_contato',
                'table_name' => 'contato',
                'created_at' => '2018-03-18 16:30:06',
                'updated_at' => '2018-03-18 16:30:06',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_contato',
                'table_name' => 'contato',
                'created_at' => '2018-03-18 16:30:06',
                'updated_at' => '2018-03-18 16:30:06',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_contato',
                'table_name' => 'contato',
                'created_at' => '2018-03-18 16:30:06',
                'updated_at' => '2018-03-18 16:30:06',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_contato',
                'table_name' => 'contato',
                'created_at' => '2018-03-18 16:30:06',
                'updated_at' => '2018-03-18 16:30:06',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_contato',
                'table_name' => 'contato',
                'created_at' => '2018-03-18 16:30:06',
                'updated_at' => '2018-03-18 16:30:06',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_archives',
                'table_name' => 'archives',
                'created_at' => '2019-06-15 12:27:59',
                'updated_at' => '2019-06-15 12:27:59',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_archives',
                'table_name' => 'archives',
                'created_at' => '2019-06-15 12:27:59',
                'updated_at' => '2019-06-15 12:27:59',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_archives',
                'table_name' => 'archives',
                'created_at' => '2019-06-15 12:27:59',
                'updated_at' => '2019-06-15 12:27:59',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_archives',
                'table_name' => 'archives',
                'created_at' => '2019-06-15 12:27:59',
                'updated_at' => '2019-06-15 12:27:59',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_archives',
                'table_name' => 'archives',
                'created_at' => '2019-06-15 12:27:59',
                'updated_at' => '2019-06-15 12:27:59',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_galleries',
                'table_name' => 'galleries',
                'created_at' => '2019-06-15 13:20:38',
                'updated_at' => '2019-06-15 13:20:38',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_galleries',
                'table_name' => 'galleries',
                'created_at' => '2019-06-15 13:20:38',
                'updated_at' => '2019-06-15 13:20:38',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_galleries',
                'table_name' => 'galleries',
                'created_at' => '2019-06-15 13:20:38',
                'updated_at' => '2019-06-15 13:20:38',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_galleries',
                'table_name' => 'galleries',
                'created_at' => '2019-06-15 13:20:38',
                'updated_at' => '2019-06-15 13:20:38',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_galleries',
                'table_name' => 'galleries',
                'created_at' => '2019-06-15 13:20:38',
                'updated_at' => '2019-06-15 13:20:38',
            ),
        ));
        
        
    }
}