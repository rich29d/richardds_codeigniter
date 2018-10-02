
//Cria objeto pedregulho
/*
* @param el Seletor
* @param rot Rotação (Max: rot, Min: -rot)
* @param des Deslocamento (Max: des, Min: -des)
*/
function rotateMouseMove(el,rot, des){

  this.el = $(el);
  this.rot = rot;
  this.des = des;
  this.mouse();

  this.el.css({ 'top':'auto' });

}

//Ao mover o mouse a página 'Texto' se movimentara de acordo com o 'rot'
rotateMouseMove.prototype.mouse = function(){

  var self = this;

  $('.perspectiva')
  .mousemove(function(e){

    var posMouseX = e.pageX - $(this).offset().left;
    var posMouseY = e.pageY - $(this).offset().top;

    var largEl = $(this).width();
    var altEl = $(this).height();

    var percX = (posMouseX/largEl)*100;
    var percY = (posMouseY/altEl)*100;

    var newRotX = ((percX/50)*self.rot)-self.rot;
    var newRotY = ((percY/50)*self.rot)-self.rot;

    var newBottom = ((percY/50)*self.des)-self.des;
    var newLeft = ((percX/50)*self.des)-self.des;

    self.el.css({
      'transition': 'none',
      'transform': 'rotateY(' + newRotX + 'deg) rotateX(' + (newRotY*-1) + 'deg)',
      'bottom': newBottom*-1,
      'left': newLeft
    });

    $('.cont-menu').find('li').removeClass('selected')

  })
  .mouseleave(function(){

    self.el.css({
      'transition': 'all .5s ease',
      'transform': 'none',
      'bottom': 0,
      'left': 0
    });

  });

}

$(function(){

  //Texto
  new rotateMouseMove('.pers-1',6,0);
  new rotateMouseMove('.pers-2',6,10);
  new rotateMouseMove('.pers-3',6,25);

})
