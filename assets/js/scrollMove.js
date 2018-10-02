
//Cria objeto pedregulho
/*
* @param el Seletor
* @param at Atributo
* @param sp Velocidade
*/
function scrollMove(el,at,sp){

  this.el = $(el);
  this.at = at;
  this.el_top = Number(this.el.css(at).replace('px','')) || 0;
  this.speed = sp;
  this.scroll();

}

//Ao rolar a página 'pedregulho' se movimentara de acordo com o 'speed'
scrollMove.prototype.scroll = function(){

  var self = this;


  $('.ss-content').on('scroll',function(){

    var sTop = $('.ss-content').scrollTop();
    var newTop = self.el_top + ((sTop/50) * self.speed);
    self.el.css(self.at, newTop);

  });

}

function scroll_banner(){

  var alt_banner = $('.banner-img').height();

  $('.ss-content').on('scroll',function(){

    var sTop = $('.ss-content').scrollTop()
    var newHeight = (alt_banner - sTop) + 50;
    if(newHeight>=0) $('.banner-img').css('height', newHeight);



  });

}

$(function(){
  //Works
  new scrollMove('.sec-works','background-position-y',4);
  new scrollMove('.sec-skills','background-position-y',6);

  $('.ss-content').scroll(function(){
      var sTop = $(this).scrollTop();
      if(sTop > $(window).height()) $('.cont-menu').addClass('fixed');
      else $('.cont-menu').removeClass('fixed');

      $('.cont-menu nav li').removeClass('selected');

      $('.ancora').each(function(){
          var page = $(this).data('page');
          if(
              sTop > $(this).offset().top + $('.ss-content').scrollTop() - 200 &&
              sTop < $('.sec-' + page).offset().top + $('.sec-' + page).height() + $('.ss-content').scrollTop() + 200
          )$('.li-' + page).addClass('selected');
      });


  });

  $('.cont-menu nav a, .cont-menu-mob nav a').on('click',function(){
      var page = $(this).data('page');
      $('.ss-content').animate({scrollTop: $('.sec-' + page + ' .ancora').offset().top + $('.ss-content').scrollTop() - 100 });
      $('.cont-menu nav li, .cont-menu-mob nav li').removeClass('selected');
      $(this).parent('li').addClass('selected');

  });

})
