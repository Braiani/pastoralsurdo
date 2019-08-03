<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Pastoral do Surdo Nacional',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Site da pastoral do surdo - Desenvolvido por BR tech Sistemas',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => 'settings/October2018/Orvpeoxuqu19gbrTANLk.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => 'settings/October2018/39QGYF9gfe0BMTVYvzYC.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'Pastoral do Surdo',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Bem vindo ao painel administrativo da Pastoral do Surdo Nacional',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'social.facebook',
                'display_name' => 'Facebook',
                'value' => 'https://www.facebook.com/BraianiTech/',
                'details' => NULL,
                'type' => 'text',
                'order' => 6,
                'group' => 'Social',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'social.twitter',
                'display_name' => 'Twitter',
                'value' => '#',
                'details' => NULL,
                'type' => 'text',
                'order' => 7,
                'group' => 'Social',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'social.instagram',
                'display_name' => 'Instagram',
                'value' => '#',
                'details' => NULL,
                'type' => 'text',
                'order' => 8,
                'group' => 'Social',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'contato.email',
                'display_name' => 'E-mail',
                'value' => 'contato@pastoral.local',
                'details' => NULL,
                'type' => 'text',
                'order' => 9,
                'group' => 'Contato',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'contato.tel',
                'display_name' => 'Telefone',
            'value' => '(67) 1234-5678',
                'details' => NULL,
                'type' => 'text',
                'order' => 10,
                'group' => 'Contato',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'contato.endereco',
                'display_name' => 'Endereço',
                'value' => 'Rua Taquari, 831, Santo Antônio, Campo Grande - MS',
                'details' => NULL,
                'type' => 'text',
                'order' => 11,
                'group' => 'Contato',
            ),
        ));
        
        
    }
}