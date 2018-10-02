<!--Banner de altura do tamanho da janela-->
<section class="sec-contato">

    <div class="tabela w100">

        <div class="celula contato-img coluna-contato">
            <div class="logo-rs-black"></div>
        </div>

        <div class="celula info coluna-contato">

            <img class="foto-info ancora" data-page="contato" src="<?= base_url('assets/img/foto_perfil_color.jpg') ?>">

            <div class="box-info">
                <div class="tit-info">info</div>
                <div class="txt-info">29/02/1992 (<spam class="idade">xx</spam> anos)</div>
                <div class="txt-info">talk@richardds.com.br</div>
            </div>

            <div class="box-info">
                <div class="tit-info">experiência</div>
                <div class="txt-info">
                    web design
                    <small>ligue site (2012 - 2015)</small>
                </div>
                <div class="txt-info">
                    front/back-end
                    <small>e9mídia (2015 - 2016)</small>
                </div>
                <div class="txt-info">
                    front-end
                    <small>vitta (2017 - atual)</small>
                </div>
            </div>

            <div class="box-info">
                <div class="tit-info">formação</div>
                <div class="txt-info">
                    análise e desenvolvimento de sistemas
                    <small>cruzeiro do sul (término em 2017)</small>
                </div>
            </div>

        </div>

        <div class="celula cont-form relative coluna-contato">

            <form class="campos w75 font-gothic">

                <div class="sended-ok absolute"></div>

                <div class="tit-contato relative sended-element">
                    Envie me uma mensagem!
                </div>

                <div class="campo tabela cmp_nome sended-element">
                    <div class="icone_campo celula"><i class="fa fa-user"></i></div>
                    <div class="celula"><input type="text" name="nome" placeholder="Nome"  maxlength="50"></div>
                    <div class="status_campo celula">
                        <img src="comum/imgs/ajax-loader.gif" class="loading">
                        <i class="fa fa-check ok" aria-hidden="true"></i>
                        <i class="fa fa-times erro" aria-hidden="true"></i>
                    </div>
                    <div class="msg_erro">
                        <p>Texto</p>
                    </div>
                </div>

                <div class="campo tabela cmp_email sended-element">
                    <div class="icone_campo celula"><i class="fa fa-envelope"></i></div>
                    <div class="celula"><input type="text" name="email" placeholder="Email"  maxlength="100"></div>
                    <div class="status_campo celula">
                        <img src="comum/imgs/ajax-loader.gif" class="loading">
                        <i class="fa fa-check ok" aria-hidden="true"></i>
                        <i class="fa fa-times erro" aria-hidden="true"></i>
                    </div>
                    <div class="msg_erro">
                        <p>Texto</p>
                    </div>
                </div>

                <div class="campo tabela cmp_msg sended-element">
                    <div class="icone_campo celula"><i class="fa fa-pencil"></i></div>
                    <div class="celula"><textarea name="msg"></textarea></div>
                    <div class="status_campo celula">
                        <img src="comum/imgs/ajax-loader.gif" class="loading">
                        <i class="fa fa-check ok" aria-hidden="true"></i>
                        <i class="fa fa-times erro" aria-hidden="true"></i>
                    </div>
                    <div class="msg_erro">
                        <p>Texto</p>
                    </div>
                </div>

                <div style="text-align: right; width: 92%;margin: 35px 0 0 4%; position: relative" class="sended-element cont-btn-submit">
                    <button type="submit" class="btn-enviar"> <i class="fa fa-paper-plane" aria-hidden="true" style="margin-right: 10px;"></i> Enviar</button>
                </div>

            </form>


        </div>

    </div>

</section>