<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'App\\Post',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null}',
                'created_at' => '2018-03-17 03:21:53',
                'updated_at' => '2019-05-21 21:30:55',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Página',
                'display_name_plural' => 'Páginas',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Page',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null}',
                'created_at' => '2018-03-17 03:21:53',
                'updated_at' => '2019-05-21 21:33:26',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-03-17 03:21:53',
                'updated_at' => '2018-03-17 03:21:53',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-03-17 03:21:53',
                'updated_at' => '2018-03-17 03:21:53',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-03-17 03:21:53',
                'updated_at' => '2018-03-17 03:21:53',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-03-17 03:21:54',
                'updated_at' => '2018-03-17 03:21:54',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'contato',
                'slug' => 'contato',
                'display_name_singular' => 'Contato',
                'display_name_plural' => 'Contatos',
                'icon' => 'voyager-chat',
                'model_name' => 'App\\Contato',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-03-18 16:30:06',
                'updated_at' => '2018-03-18 16:30:06',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'archives',
                'slug' => 'archives',
                'display_name_singular' => 'Archive',
                'display_name_plural' => 'Archives',
                'icon' => 'voyager-upload',
                'model_name' => 'App\\Archive',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-06-15 12:27:58',
                'updated_at' => '2019-06-15 12:42:25',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'galleries',
                'slug' => 'galleries',
                'display_name_singular' => 'Gallery',
                'display_name_plural' => 'Galleries',
                'icon' => 'voyager-photos',
                'model_name' => 'App\\Gallery',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-06-15 13:20:38',
                'updated_at' => '2019-06-15 16:48:36',
            ),
        ));
        
        
    }
}