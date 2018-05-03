<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2018-03-17 03:21:56',
                'updated_at' => '2018-03-17 03:21:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'front-end',
                'created_at' => '2018-05-02 20:28:04',
                'updated_at' => '2018-05-02 20:28:04',
            ),
        ));
        
        
    }
}