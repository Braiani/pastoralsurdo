<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 2,
                'author_id' => 1,
                'title' => 'A Pastoral',
                'excerpt' => 'Essa é uma pequena história da pastoral do surdo nacional.',
                'body' => '<h3>Nossa hist&oacute;ria</h3>
<p>Relatar a funda&ccedil;&atilde;o da Pastoral do Surdo &eacute; uma tarefa imensa, pois s&atilde;o muitos: institui&ccedil;&otilde;es e congrega&ccedil;&otilde;es religiosas, padres, bispos, religiosas, leigos que contribu&iacute;ram, conforme o momento hist&oacute;rico e as possibilidades do momento.</p>
<p>Contudo podemos destacar duas personalidades marcantes nas origens da pastoral: Monsenhor Vicente de Paulo Penido Burnier, 1&ordm; sacerdote surdo brasileiro, de Juiz de Fora (MG) e padre Eugenio Oates, (ouvinte) sacerdote redentorista, nascido nos Estados Unidos.</p>
<p>Desde a d&eacute;cada de 40, a pastoral buscou espa&ccedil;o na caminhada da Igreja, ambos foram os grandes disc&iacute;pulos mission&aacute;rios atrav&eacute;s das visitas &agrave;s escolas, associa&ccedil;&otilde;es e igrejas onde existiam surdos.</p>
<p>Mais tarde, padre Volmir Francisco Guiso, deficiente auditivo de Porto Alegre se junta a eles para colaborar no an&uacute;ncio do Evangelho. Hoje mais dois sacerdotes, H&eacute;lio de Jesus, deficiente auditivo de S&atilde;o Lu&iacute;s (MA) e Wilson Czaia, surdo de Curitiba (PR) s&atilde;o testemunhas vivas de que a surdez n&atilde;o &eacute; obst&aacute;culo para viver o sacerd&oacute;cio e dedicar-se integralmente aos surdos, mas sinal de supera&ccedil;&atilde;o dos desafios e p&ocirc;r em pr&aacute;tica os talentos, como dons de Deus.</p>
<p>Atualmente a Pastoral do Surdo est&aacute; presente na maioria dos Regionais e atrav&eacute;s de um trabalho silencioso e eficaz. Os surdos t&ecirc;m a oportunidade de conhecer, celebrar e testemunhar Jesus Cristo na sociedade de hoje.</p>
<h3>OBJETIVOS</h3>
<p>A Pastoral tem como objetivo atuar em diversas &aacute;reas:</p>
<ul>
<li>Prepara celebra&ccedil;&otilde;es e encontros de car&aacute;ter espiritual.</li>
<li>Catequese: atuam na forma&ccedil;&atilde;o do surdo, buscado um maior conhecimento da palavra de Deus, pela prepara&ccedil;&atilde;o do batismo, eucaristia, crisma e curso de noivos.</li>
<li>Juventude: aten&ccedil;&atilde;o especial &eacute; dada aos jovens, por meio de encontros, caminhadas e momentos de lazer.</li>
<li>Cultura: como Pastoral do Surdo, ela est&aacute; presente em eventos, exposi&ccedil;&otilde;es, dan&ccedil;as e datas comemorativas.</li>
<li>A&ccedil;&atilde;o Social: atua na forma&ccedil;&atilde;o pol&iacute;tica.</li>
</ul>',
                'image' => 'pages/March2018/rrJELkGutvNKLKGnfeys.jpg',
                'slug' => 'a-pastoral',
                'meta_description' => 'A pastoral',
                'meta_keywords' => 'pastoral;surdo',
                'status' => 'ACTIVE',
                'created_at' => '2018-03-18 05:59:27',
                'updated_at' => '2018-03-18 06:13:30',
            ),
            1 => 
            array (
                'id' => 3,
                'author_id' => 1,
                'title' => 'Intérpretes',
                'excerpt' => 'Coordenação nacional dos interpretes católicos',
                'body' => '<div class="container-fluid text-justify">
<div class="col-md-5 text-left"><span style="font-size: large;"><img class="img-responsive img-thumbnail" src="http://www.pastoraldosurdo.org.br/imagem/img_interprete/WA0003.jpg" width="406" height="444" /></span></div>
<span style="font-size: large;">Estamos iniciando mais um servi&ccedil;o para a nossa articula&ccedil;&atilde;o dentro da din&acirc;mica de a&ccedil;&atilde;o evangelizadora junto aos surdos, no Effata. N&atilde;o existe int&eacute;rprete cat&oacute;lico sem a efetiva participa&ccedil;&atilde;o eclesial, lit&uacute;rgica, catequ&eacute;tica e testemunhal. O processo de a&ccedil;&atilde;o do int&eacute;rprete cat&oacute;lico dentro da vida crist&atilde; faz dele um verdadeiro mission&aacute;rio e ao mesmo tempo disc&iacute;pulo do Senhor. Da&iacute; o bin&ocirc;mio DISC&Iacute;PULO-MISSION&Aacute;RIO. Acreditamos que nunca estamos prontos e acabados; desta afirma&ccedil;&atilde;o decorre a nossa constante inquietude crist&atilde; em atualizarmos dentro da caminhada da Igreja do Brasil, a partir das Diretrizes Gerais da CNBB e junto &agrave; Igreja Universal, em plena comunh&atilde;o com o Papa Bento XVI. Do macro contigente de irm&atilde;os na f&eacute; em Cristo, nos leva a um vida engajada dentro de nossas c&eacute;lulas eclesiais, nossas par&oacute;quias e comunidades, ali onde vivem e est&atilde;o os nossos fraternos surdos. Por Cristo e Nele, fazemo-nos servidores em cada surdo, com toda a sua hist&oacute;ria, sua cultura e com o seu jeito peculiar de ser e de conviver. Sabemos disso, de convivermos com os surdos... O Int&eacute;rprete cat&oacute;lico, pois, &eacute; sempre chamado para estar a caminho, no Caminho, pois Nele encontramos esperan&ccedil;a e alegria no Servi&ccedil;o. Toda atividade iniciada pela comunidade local (cursos, atualiza&ccedil;&otilde;es, retiros, passeios, dias de aprofundamento) dos surdos e/ou dentro dos Regionais &eacute; sempre louv&aacute;vel e incentivado. Essa a&ccedil;&atilde;o &eacute; um sinal e uma garantia para melhorar a qualidade da interpreta&ccedil;&atilde;o e da comunica&ccedil;&atilde;o em nossas liturgias e servi&ccedil;os de evangeliza&ccedil;&atilde;o. O objetivo &eacute; sempre de apresentar uma mensagem clara, f&aacute;cil, compreensiva e que de verdade se faz Vida no cora&ccedil;&atilde;o dos surdos. Um mensagem plena e cheia de vigor e for&ccedil;a que os sustentam na caminhada da f&eacute;. </span></div>
<div class="container-fluid text-justify">
<div align="justify">&nbsp;</div>
<div align="justify">Est&aacute; &eacute; a nossa miss&atilde;o e nosso labor! Saibamos acolher com coragem os desafios, os entraves, as contradi&ccedil;&otilde;es e os percal&ccedil;os das sendas, pois a porta &eacute; estreita. A todos, chamados &agrave; evangeliza&ccedil;&atilde;o e &agrave; miss&atilde;o junto aos surdos, convocamos para uma caminhada serena, firme, com objetivos claros e compartilhados. Somos uma verdadeira rede de generosos int&eacute;rpretes, pois estamos presentes em 17 Regionais do Brasil. Aguardamos de todos, a comunica&ccedil;&atilde;o que nos faz mais fraternos e mais fam&iacute;lia. Fraterno abra&ccedil;o, &Aacute;lvaro Ferreira- Secret&aacute;rio da Pastoral dos Surdos e dos Int&eacute;rpretes Cat&oacute;licos do Brasil</div>
<div align="justify">&nbsp;</div>
<div align="justify">COORDENA&Ccedil;&Atilde;O NACIONAL DOS INT&Eacute;RPRETES CAT&Oacute;LICOS: MARCELO DIAS SANTANA --- E-MAIL: diasturbh@gmail.com - Belo Horizonte - MG VICE COORDENADORA NACIONAL DOS INT&Eacute;RPRETES CAT&Oacute;LICOS: CASSIA SOUZA CARVALHO --- E-MAIL: cassia_pj@hotmail.com - Bras&iacute;lia - DF.</div>
</div>',
                'image' => 'pages/May2018/sjmz9y8H3J1lUPlLvdi6.jpg',
                'slug' => 'interpretes',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2018-05-02 22:19:50',
                'updated_at' => '2018-05-02 22:19:50',
            ),
            2 => 
            array (
                'id' => 6,
                'author_id' => 1,
                'title' => 'Coordenação nacional',
                'excerpt' => 'Coordenação pastoral',
                'body' => '<div class="section">
<div class="container">
<ul>
<li><span style="font-size: medium;"><span style="font-size: medium;"><strong>Coordenadores da pastoral</strong> <br />Carlos Andr&eacute; Rodrigues Carvalho (Coord) - Brasilia/DF <br />Lucas Ferreira da Silva (vice) - S&atilde;o Paulo/SP <br /><span style="color: blue;">psurdonacional@gmail.com</span></span></span></li>
<li><span style="font-size: medium;"><span style="font-size: medium;"><span style="font-size: medium;"><strong>Coordenadores dos int&eacute;rpretes</strong> <br />Rafael Ferreira da Rocha (Coord) - Palmas/TO <br />Carlene da Penha Santos(vice) - Jo&atilde;o Pessoa/PB</span></span></span></li>
<li><span style="font-size: medium;"><span style="font-size: medium;"><span style="font-size: medium;"><span style="font-size: medium;"><strong>Secret&aacute;rias </strong> <br />Jocimara Paiva Grillo (Ouvinte) - Campo Grande/MS <br />Ivonne Azevedo Makhoul (Surda) - Belo Horizonte/MG</span></span></span></span></li>
<li><span style="font-size: medium;"><span style="font-size: medium;"><span style="font-size: medium;"><strong>Tesoureiros</strong> <br />Carlos Alberto Franco (Surdo) - Campo Mour&atilde;o PR <br />Marcelo Dias Santana (Ouvinte) - Belo Horizonte/MG </span></span></span></li>
<li><span style="font-size: medium;"><span style="font-size: medium;"><strong>Auxiliar Eclesiastico dos int&eacute;rpretes </strong> <br />Pe.Fagner Wellington Graciano da Silva - Campina Grande/PB</span></span></li>
<li><span style="font-size: medium;"><span style="font-size: medium;"><span style="font-size: medium;"><strong>Auxiliar Eclesiastico da pastoral do surdo</strong> <br />Ir. Maria Aparecida de Siqueira <br />Pequena Miss&atilde;o para Surdos - Londrina/PR</span></span></span></li>
<li><span style="font-size: medium;"><span style="font-size: medium;"><span style="font-size: medium;"><span style="font-size: medium;"><strong>Bispo referencial</strong> <br />Dom Celso Ant&ocirc;nio Marchiori</span></span></span></span></li>
<li><span style="font-size: medium;"><span style="font-size: medium;"><span style="font-size: medium;"><strong>Assessor do bispo</strong> <br />Ant&ocirc;nio C&eacute;sar Bacchim</span></span></span></li>
</ul>
</div>
<p><strong>BISPO REFERENCIAL PARA A PASTORAL DO SURDO DO BRASIL (<span style="color: red;">DOM CELSO ANTONIO MARCHIORI</span>)</strong></p>
<p>Regional Centro Oeste (Goi&aacute;s, Parte de Tocantins e Distrito Federal ( Bras&iacute;lia))</p>
<p>Regional Leste 1 (Rio de Janeiro - LESTE 1 )</p>
<p>Regional Leste 2 (Minas Gerais e Esp&iacute;rito Santo)</p>
<p>Regional Nordeste 1 (Cear&aacute; )</p>
<p>Regional Nordeste 2 (Rio Grande do Norte, Pernambuco, Para&iacute;ba, Alagoas e Fernando de Noronha)</p>
<p>Regional Nordeste 3 (Bahia e Sergipe - surdosfsaba.50webs.com)</p>
<p>Regional Nordeste 4 (Piau&iacute;)</p>
<p>Regional Nordeste 5 (Maranh&atilde;o )</p>
<p>Regional Noroeste (parte do Amazonas, Acre e Rond&ocirc;nia)</p>
<p>Regional Norte 1 (Amazonas e Roraima)</p>
<p>Regional Norte 2 (Par&aacute;/Amap&aacute;)</p>
<p>Regional Oeste 1 (Mato Grosso do Sul)</p>
<p>Regional Oeste 2 (Parte do Mato Grosso e parte de Tocantins)</p>
<p>Regional Sul 1 (S&atilde;o Paulo - http://pastoraldossurdossp.blogspot.com/)</p>
<p>Regional Sul 2 (Paran&aacute; )</p>
<p>Regional Sul 3 (Rio Grande do Sul - pastoraldosurdopoa.blogspot.com)</p>
<p>Regional Sul 4 (Santa Catarina)</p>
</div>',
                'image' => 'pages/May2018/xbVdwgzjRFBZrPEgVsev.jpg',
                'slug' => 'coordenacao-nacional',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'status' => 'ACTIVE',
                'created_at' => '2018-05-02 22:25:59',
                'updated_at' => '2018-05-02 22:30:45',
            ),
        ));
        
        
    }
}