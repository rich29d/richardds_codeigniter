<section class="sec-skills">

  <div class="sec-tit ancora" data-page="skills">skills</div>

  <div class="cont-itens font-gothic">

  <?php

    $array_skills = array(
        array("html5-logo.svg","html 5",1,5,"HTML5 (Hypertext Markup Language, versão 5) é uma linguagem para estruturação e apresentação de conteúdo para a World Wide Web e é uma tecnologia chave da Internet originalmente proposto por Opera Software.<br>É a quinta versão da linguagem HTML. Esta nova versão traz consigo importantes mudanças quanto ao papel do HTML no mundo da Web, através de novas funcionalidades como semântica e acessibilidade."),
        array("css3-logo.svg", "css 3",1,5,"CSS3 é a segunda mais nova versão das famosas Cascading Style Sheets (ou simplesmente CSS), onde se define estilos para páginas web com efeitos de transição, imagem, e outros, que dão um estilo novo às páginas Web 2.0 em todos os aspectos de design do layout."),
        array("jQuery-logo.svg", "jQuery",1,5,"JQuery é uma biblioteca de JavaScript rápida, pequena e rica em recursos. Faz coisas como travessia e manipulação de documentos HTML, manipulação de eventos, animação e Ajax muito mais simples com uma API fácil de usar que funciona em uma infinidade de navegadores. Com uma combinação de versatilidade e extensibilidade, jQuery mudou a forma como milhões de pessoas escrevem JavaScript."),
        array("php-logo.svg", "php",1,3,"O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma linguagem de script open source de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento web e que pode ser embutida dentro do HTML."),
        array("codeigniter-logo.svg", "codeigniter",1,3,"CodeIgniter é um poderoso framework PHP com uma pegada muito pequena, construída para desenvolvedores que precisam de um conjunto de ferramentas simples e elegante para criar aplicativos da Web completos."),
        array("laravel-logo.svg", "laravel",1,2,"Laravel é um framework PHP livre e open-source criado por Taylor B. Otwell para o desenvolvimento de sistemas web que utilizam o padrão MVC (model, view, controller). Algumas características proeminentes do Laravel são sua sintaxe simples e concisa, um sistema modular com gerenciador de dependencias dedicado, várias formas de acesso a banco de dados relacionais e vários utilitários indispensáveis no auxílio ao desenvolvimento e manutenção de sistemas.  "),
        array("wordpress-logo.svg", "wordpress",1,3,"O WordPress é uma plataforma semântica de vanguarda para publicação pessoal, com foco na estética, nos Padrões Web e na usabilidade. Ao mesmo tempo é um software livre, gratuito e feito por você. Em outras palavras, o WordPress é o que você usa quando quer trabalhar e não lutar com seu software de publicação de conteúdo, sendo hoje a maior plataforma de Gerenciamento de Conteúdo do mundo, com aproximadamente 59% do mercado de CMS e 27.5% de toda web."),
        array("java-logo.svg", "java",1,3,"Java é uma linguagem de programação interpretada orientada a objetos desenvolvida na década de 90 por uma equipe de programadores chefiada por James Gosling, na empresa Sun Microsystems. Diferente das linguagens de programação convencionais, que são compiladas para código nativo, a linguagem Java é compilada para um bytecode que é interpretado por uma máquina virtual (Java Virtual Machine, mais conhecida pela sua abreviação JVM)."),
        array("photoshop-logo.svg", "photoshop",1,3,"Adobe Photoshop é um software caracterizado como editor de imagens bidimensionais do tipo raster (possuindo ainda algumas capacidades de edição típicas dos editores vectoriais) desenvolvido pela Adobe Systems. É considerado o líder no mercado dos editores de imagem profissionais, assim como o programa de facto para edição profissional de imagens digitais e trabalhos de pré-impressão."),
        array("Illustrator-logo.svg", "illustrator",1,3,"Adobe Illustrator é um editor de imagens vetoriais desenvolvido e comercializado pela Adobe Systems. Foi criado inicialmente para o Apple Macintosh em 1985, e, foi comercializado para todo o público em 1995 como complemento comercial de software de fontes da Adobe e da tecnologia PostScript desenvolvida pela empresa."),
        array("coreldraw-logo.svg", "coreldraw",1,3,"O CorelDRAW é um programa de desenho vetorial bidimensional para design gráfico desenvolvido pela Corel Corporation, Canadá. É um aplicativo de ilustração vetorial e layout de página que possibilita a criação e a manipulação de vários produtos, como por exemplo: desenhos artísticos, publicitários, logotipos, capas de revistas, livros, etc."),
        array("nodejs-logo.png", "node",0,10,"Node.js é uma plataforma construída sobre o motor JavaScript do Google Chrome para facilmente construir aplicações de rede rápidas e escaláveis. Node.js usa um modelo de I/O direcionada a evento não bloqueante que o torna leve e eficiente, ideal para aplicações em tempo real com troca intensa de dados através de dispositivos distribuídos.")
    );



  ?>

      <?php for($i=0 ; $i<count($array_skills); $i++) {?>

      <?php $item = $array_skills[$i]; ?>

      <?php if($item[2]===1){ ?>

        <div class="item">

          <div class="skill relative" onclick="show_desc(<?=$i?>)">

            <div class="skill-capa absolute zIndex2">

              <div class="skill-logo-img relative" style="background-image:url(<?= BASE_URL('assets/img/' . $item[0]) ?>)">

              </div>

              <div class="skill-logo-txt relative tabela">
                <div class="celula">
                  <?= $item[1] ?>
                </div>
              </div>

            </div>

            <div class="skill-level absolute zIndex4">

              <div class="levels absolute">
                <div class="tabela">

                  <?php
                    $levels = ['nebs','noob','tá manjando','zika','das galaxias'];
                  ?>

                  <?php for($l=1; $l<=5; $l++ ){ ?>
                    <div class="celula">
                      <div
                        class="lvl lvl-<?=$l?><?= $l<=$item[3] ? ' active' : '' ?> relative"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="<?=$levels[$l-1]?>"
                      ></div>
                    </div>
                  <?php } ?>

                </div>
              </div>

            </div>

          </div>

        </div>

      <?php } ?>

  <?php } ?>

</div>

</section>

<script>

    var arr_skills = <?= json_encode($array_skills) ?>

</script>

<div class="desc-skill fixed">

    <div class="desc-skill-logo zIndex2"></div>

    <div class="desc-skill-fundo-txt absolute zIndex4"></div>

    <div class="x-close zIndex4" onclick="hide_desc()"></div>

    <div class="desc-skill-cont tabela relative zIndex6">
        <div class="celula">

            <div class="desc-skill-tit"></div>

            <div class="desc-skill-txt font-gothic"></div>

            <div class="desc-skill-itens">

            <?php for($i=0 ; $i<count($array_skills); $i++) {?>

                <?php if($array_skills[$i][2]===1){ ?>

                <div
                    class="desc-skill-item"
                    style="background-image:url(<?= BASE_URL('assets/img/' . $array_skills[$i][0]) ?>)"
                    data-toggle="tooltip"
                    data-placement="top"
                    onclick="sel_skill(<?=$i?>)"
                    title="<?=$array_skills[$i][1]?>"
                >
                </div>

                <?php } ?>

            <?php } ?>

            </div>

        </div>
    </div>

</div>
