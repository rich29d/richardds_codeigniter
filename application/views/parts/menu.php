<section class="sec-menu relative zIndex10">
  <div class="cont-menu desktop">

    <!--Logo Scroll-->
    <div class="logo-scroll absolute"></div>
    <!--Menu-->
    <nav>
      <ul>
        <li class="relative li-works">
          <a href="javascript:void(0);" data-page="works" class="relative zIndex4">works</a>
          <!--Barras que crescem ao dar hover-->
          <div class="effect-hover absolute">
            <div class="bar-effect bar-1"></div>
            <div class="bar-effect bar-2"></div>
            <div class="bar-effect bar-3"></div>
            <div class="bar-effect bar-4"></div>
            <div class="bar-effect bar-5"></div>
          </div>
        </li>
        <li class="relative li-skills">
          <a href="javascript:void(0);" data-page="skills" class="relative zIndex4">skills</a>
          <!--Barras que crescem ao dar hover-->
          <div class="effect-hover absolute">
            <div class="bar-effect bar-1"></div>
            <div class="bar-effect bar-2"></div>
            <div class="bar-effect bar-3"></div>
            <div class="bar-effect bar-4"></div>
            <div class="bar-effect bar-5"></div>
          </div>
        </li>
        <li class="relative li-contato">
          <a href="javascript:void(0);" data-page="contato" class="relative zIndex4">contato</a>
          <!--Barras que crescem ao dar hover-->
          <div class="effect-hover absolute">
            <div class="bar-effect bar-1"></div>
            <div class="bar-effect bar-2"></div>
            <div class="bar-effect bar-3"></div>
            <div class="bar-effect bar-4"></div>
            <div class="bar-effect bar-5"></div>
          </div>
        </li>
      </ul>
    </nav>

  </div>

    <div class="cont-menu-mob mobile fixed">
        <nav>
            <ul>
                <li class="relative li-works">
                    <a href="javascript:void(0);" data-page="works" class="relative zIndex4">works</a>
                </li>
                <li class="relative li-skills">
                    <a href="javascript:void(0);" data-page="skills" class="relative zIndex4">skills</a>
                </li>
                <li class="relative li-contato">
                    <a href="javascript:void(0);" data-page="contato" class="relative zIndex4">contato</a>
                </li>
            </ul>
        </nav>
    </div>

  <!--Celular ao lado do menu (Não deve ser exibido em telas menores que 700px)-->
  <div class="cont-cel absolute">
    <div class="txt-hey-cel">
      <img src="<?=BASE_URL('assets/img/txt-hey-cel.png')?>" alt="Hey,vams jogar?">
    </div>
    <div class="cel">
      <div class="box-cel qr-code-cel">
        <!--QR CODE da API do google (URL do código do game)-->
        <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=http://codigofonte.uol.com.br" alt="QR Code">
      </div>
      <div class="box-cel txt-acesse-cel font-gothic">
        <span class="esq"></span>
        ou acesse
        <span class="dir"></span>
      </div>
      <div class="box-cel link-cel font-gothic">
        <!--shorturl da API do google (URL do código do game)-->
        goo.gl/sdfosa
      </div>
    </div>
  </div>

</section>

<div class="cont-pedregulhos relative">
  <div class="pedregulhos frente absolute zIndex6"></div>
  <div class="pedregulhos tras absolute"></div>
</div>
