function work(el){

  this.wrk = $(el);
  this.wrk_img = this.wrk.find('.item-img');
  this.view();

}

work.prototype.view = function(){
  var self = this;
  self.wrk.on('click', function() {
      $('.bg-dark').fadeIn()
      $('section, header').addClass('blur');
      mostra_work(Number(self.wrk_img.data('num')));
  });
}

function hide_work() {
  $('.view-work, .bg-dark').fadeOut();
  $('section, header').removeClass('blur');
}

function anterior_work(){ if(num_work > 0)mostra_work(--num_work); }

function proximo_work(){ if(num_work < arr_works.length-1) mostra_work(++num_work); }

function mostra_work(num){
    $('.view-work')
        .fadeIn()
        .find('img')
        .css({'margin-top': $('.ss-content').scrollTop() + 70 });
    $('.view-work img').attr('src', assets + 'img/works/' + arr_works[num][0]);
    $('.view-work .seta-nav').show();
    if(num == 0) $('.view-work .ante').hide();
    if(num == arr_works.length-1) $('.view-work .prox').hide();
    num_work=num;
}

$(function(){

  $('.item-work').each(function(){
    new work(this);
  });

});

