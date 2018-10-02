<div class="view-work absolute zIndex14 none">

    <div class="seta-nav ante fixed zIndex4" onclick="anterior_work()"></div>
    <div class="seta-nav prox fixed zIndex4" onclick="proximo_work()"></div>
    <div class="x-close" onclick="hide_work()"></div>
    <img src="" title="">

</div>

<div class="bg-dark fixed zIndex12 none" onclick="hide_work()"></div>

<section class="sec-works">

  <div class="sec-tit ancora" data-page="works">works</div>

  <div class="cont-itens font-gothic">

    <?php $arr_tipo = ['web', 'logo', 'impresso']; ?>
    <?php $arr_work = [
            ['lindomar.jpg','Lindomar Centro Automotivo','http://www.lindomarcentroautomotivo.com.br/',0],
            ['loop.png','LOOP','http://loop.richardds.com.br/',0],
            ['monsalles.jpg','Monsalles',"",0],
            ['top_frango.jpg','Top Frango',"",0],
            ['logo_loop.jpg','LOOP',"",1],
            ['logo_sr_vegetariano.jpg','Senhor Vegetariano',"",1]
    ]; ?>

    <?php foreach($arr_work as $i=>$w) { ?>
      <?php $rand_color = $arr_tipo[rand(0,2)]; ?>
    <div class="item">

      <div class="item-work relative tabela">
        <div class="linha">
          <div class="item-img acessa-link" data-num="<?= $i ?>" style="background-image: url(<?= BASE_URL('assets/img/works/' . $w[0])?>)">

              <div class="item-tipo item-tipo-<?= $arr_tipo[$w[3]] ?> zIndex8">
                <span><?= $arr_tipo[$w[3]] ?></span>
                <div class="cont-seta absolute">
                  <div class="seta"></div>
                </div>
              </div>

          </div>
        </div>

        <div class="linha" style="display: none">

          <div class="item-pnl tabela">
            <div class="celula item-pnl-count-views">
              <span><i class="font-icon">&#xe802;</i></span>
              <span>5465</span>
            </div>
            <div class="celula item-pnl-count-likes">
              <span><i class="font-icon">&#xe801;</i></span>
              <span>4565</span>
            </div>
            <a class="celula item-pnl-link acessa-link" target="_blank" href="<?= $w[2] ?>">
              <span><i class="font-icon">&#xe804;</i></span>
              <span>view</span>
            </a>
          </div>

        </div>

        <div class="item-desc linha absolute zIndex4">

          <div class="item-desc-cont font-kenian">
            <div class="item-desc-tit animate"><?= $w[1] ?></div>
            <?php if(strlen($w[2])>0) {?><a class="item-desc-lnk acessa-link animate" target="_blank" href="<?= $w[2] ?>"><i class="font-icon">&#xe804;</i></a><?php } ?>
          </div>

        </div>

      </div>

    </div>

    <?php } ?>

  </div>

</section>

<script>

    var num_work = 0;
    var arr_works = <?= json_encode($arr_work) ?>

</script>
