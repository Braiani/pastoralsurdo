<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Administrador',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$ls5KZDxTd7Jq0jqnOWpEl.xKhiVCSprxgVN8dtBLT3IzyoJAQI8tu',
                'remember_token' => 'QrIupOQTxHP8ejKYNb8W2jVriZOHWDthEVGGVJowT6r383i0DIv2qCEN4ENo',
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2018-03-17 03:22:02',
                'updated_at' => '2018-05-02 22:03:38',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Usuário',
                'email' => 'user@user.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$4Ml21g9v5duMlfJwPiE26u9lNkh/3ijPGY.GFVYEi0pbY85nYAWeq',
                'remember_token' => 'YYJZNsqDe2GR8pde9kEKYHLFtCLmoTV15ln5hXIKsB5e4Rhi7IyUhHxose3O',
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2018-03-18 06:48:30',
                'updated_at' => '2018-05-02 22:04:44',
            ),
        ));
        
        
    }
}