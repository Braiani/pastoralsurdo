<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        /*$this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(UsersTableSeeder::class);*/
    }
}
