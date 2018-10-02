/**
 * Created by Richard on 13/05/2017.
 */

var formulario = {

    init : function(){},
    validacao : function(form){

        var data = util.parseJSON($(form).serializeArray());

        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        var retorno = true;

        $(form).find(".campo")
            .removeClass("erro")
            .removeClass("ok");

        if(data.nome == ""){
            retorno = false;
            $(form).find(".cmp_nome").addClass("erro");
            $(form).find(".cmp_nome .msg_erro p").text("Insira o seu nome");
        }else $(form).find(".cmp_nome").addClass("ok");


        if(data.email == "" || !re.test(data.email)){
            retorno = false;
            $(form).find(".cmp_email").addClass("erro");
            $(form).find(".cmp_email .msg_erro p").text(
                data.email == "" ? "Insira o seu email" : "Email inválido"
            );
        }else $(form).find(".cmp_email").addClass("ok");

        if(data.msg == ""){
            retorno = false;
            $(form).find(".cmp_msg").addClass("erro");
            $(form).find(".cmp_msg .msg_erro p").text("Insira uma mensagem");
        }else $(form).find(".cmp_msg").addClass("ok");

        $(form).find("input, textarea").focus(function(){
            $(this).parent().parent().removeClass("erro");
        })

        return retorno;

    },
    cadastrar : function(form){

       $.post(baseURL + "email/send_email.php", $(form).serializeArray())
            .done(function(response){

                var respJSON = JSON.parse(response.trim());

                console.log(respJSON);

                if(respJSON.sucesso){

                    $(form).removeClass('back-form').addClass('sended');
                    setTimeout(function(){
                        $(form).removeClass('sended').addClass('back-form');
                        $(form).find('input, textarea').val("");
                        $(form).find('.campo').removeClass('ok');
                    },2500);

                }

            })
            .fail(function(response){
                msg = "Erro de cadastro, tente mais tarde, por favor!";
                status = "erro";
                console.log(response);
                util.aviso(msg, status);
            });

    }

}

$(function(){

    //calcula idade
    var d     = new Date(),
        hoje   = d.getFullYear() + '-' + (d.getMonth()<10 ? '0' : '') + d.getMonth() + '-' + (d.getDate()<10 ? '0' : '') + d.getDate(),
        diff  = new Date(new Date(hoje) - new Date("1992-02-29"));
     $(".idade").text(String(diff/1000/60/60/24/30/12).split('.')[0]);

    $('.sec-contato form').on("submit",function(e){
        e.preventDefault();

        var form = this;

        $(form).find('.cont_enviar .enviar').addClass("loading").attr("disabled", true);

        if(formulario.validacao(form)){
            formulario.cadastrar(form);
        }else{
            msg = "Ops! algo esta errado, preencha os campos destacados corretamente, por favor!";
            util.aviso(msg, "erro");
            $(form).find('.cont_enviar .enviar').removeClass("loading").removeAttr("disabled");
        }

    });

    formulario.init();

});
