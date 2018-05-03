<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 5,
                'author_id' => 1,
                'category_id' => 1,
                'title' => 'VIA SACRA DE SURDOS',
                'seo_title' => NULL,
                'excerpt' => 'A Via Sacra de Surdos de Brasilia, é um sucesso e estará completando sua 10ª edição esse ano de 2018.',
                'body' => '<p><span style="font-size: medium;">A Via Sacra de Surdos de Brasilia, &eacute; um sucesso e estar&aacute; completando sua 10&ordf; edi&ccedil;&atilde;o esse ano de 2018. Ser&aacute; uma linda encena&ccedil;&atilde;o da Paix&atilde;o e morte de Nosso Senhor.</span></p>
<p><span style="font-size: medium;">Todas as edi&ccedil;&otilde;es foram e s&atilde;o feitas na l&iacute;ngua Brasileira de Sinais (Libras) e traduzidas simultaneamente para a l&iacute;ngua portuguesa, assim todo o p&uacute;blico, seja ele surdo ou n&atilde;o pode assistir ao espet&aacute;culo, que tamb&eacute;m conta com acessibilidade para pessoas cegas, a audiodescri&ccedil;&atilde;o. Sendo assim, &eacute; uma encena&ccedil;&atilde;o toda acess&iacute;vel e preparada para todos os p&uacute;blicos.</span></p>
<p><span style="font-size: medium;">Os atores s&atilde;o pessoas surdas, e os ouvintes atuam apenas no apoio &agrave; produ&ccedil;&atilde;o e na tradu&ccedil;&atilde;o para o portugu&ecirc;s. A cada ano a encena&ccedil;&atilde;o &eacute; realizada em uma cidade diferente do Distrito Federal, com o objetivo de divulgar a todos a Libras e tamb&eacute;m evangelizar aos surdos e ouvintes dessas cidades sat&eacute;lites. <br />Parabenizamos &agrave; todos os envolvidos nessa grande tarefa realizada a 10 anos. Que o Senhor continue fortalecendo e aben&ccedil;oando esse grande projeto.</span></p>',
                'image' => 'posts/May2018/HkWZUhQMLGE2LIjkLFXQ.jpg',
                'slug' => 'via-sacra-de-surdos',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'status' => 'PUBLISHED',
                'featured' => 0,
                'created_at' => '2018-05-02 22:49:54',
                'updated_at' => '2018-05-02 22:49:54',
            ),
        ));
        
        
    }
}