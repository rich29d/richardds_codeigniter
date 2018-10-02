// JavaScript Document

var delayAviso;
var msg = "";
var status = "";

var grupo = {
	id:null,
	nome:null
}

var cursosArray = [];

var menu_desk = {
	chama_login: function(){
		$('nav .cont_login').addClass('aberto');
	},
	esconde_login: function(){
		$('nav .cont_login').removeClass('aberto');
	}
}

var util = {

	parseJSON : function (arr){
		
		var indexed_array = {};	
		$.map(arr, function(n, i){
			indexed_array[n['name']] = n['value'];
		});	
		return indexed_array;
		
	},
	aviso : function(msg, status){
		
		if(status == "erro") $('.aviso').addClass('erro');
		else $('.aviso').removeClass('erro');
		
		$('.aviso p').text(msg);
		
		$('.cont_aviso').css('bottom',0);
		
		clearTimeout(delayAviso);
		
		delayAviso = setTimeout(function(){
			$('.cont_aviso').css('bottom',"-60%");
		}, 8000);
		
	}
	
}

var menu_mob = {
	status : false,
	abrir: function(){
		$('.msn_sac').fadeOut();
		$('.cont_bullets').addClass('encolhido');
		$('article').css('left',"-80%");
		$('.menu_mob').css('right',0);
		$('.bt_menu_mob')
			.attr('onClick','menu_mob.fechar()')
			.removeClass('abrir')
			.addClass('fechar');
		menu_mob.status = true;
	},
	fechar: function(){
		$('.cont_bullets').removeClass('encolhido');
		$('article').css('left',0);	
		$('.menu_mob').css('right',"-85%");
		$('.bt_menu_mob')
			.attr('onClick','menu_mob.abrir()')
			.removeClass('fechar')
			.addClass('abrir');
		menu_mob.status = false;
		menu_mob.esconde_login();
	},
	chama_login: function(){
		$('.menu_mob ul').css('left',"-100%");
		$('.menu_mob .cont_login').css('left',"6%");	
	},
	esconde_login: function(){
		$('.menu_mob ul').css('left',0);
		$('.menu_mob .cont_login').css('left',"100%");	
	}
}


var mouse = {

	move_detalhes : function(det, frequencia, lado){
		var pos = $(det).offset();
		$( "section" ).mousemove(function( event ) {
			var pos_section = $(this).offset();
			$(this).find(det).css({
				top: (pos.top + (pos.top - event.clientY) / frequencia) - pos_section.top
			})
		});	
		
	}
	
}

var 
topo = 0,
scroll_window = {
	init: function(){		
		

		
	},
	entrada_form: function(){
		var
			form = $('.cont_form .form'),
			num_form = 4;
			
			
			if(!formVisible){
			
				var crono = setInterval(function(){
					
					form.eq(num_form-1).addClass('f' + num_form)	;
					num_form--;				
					if(num_form<1) clearInterval(crono);
				
				},300);	
				
				formVisible = !formVisible;
			
			}
	},
	para_inscricao: function(){
		$('body, html').animate({scrollTop:posForm-20},1500);
		menu_mob.fechar();
	}
}



var codigo_secreto = function(){
	                 // → ↑ L   O  O  P  ↓ ← 
	var codigo_array = [39,38,76,79,79,80,40,37];
	var index_code = 0;
	$(document).on('keydown',function(e){
		var keyCode = e.keyCode;
		if(keyCode == codigo_array[index_code]) index_code++;
		else index_code = 0;
		if(index_code == 8){
			index_code = 0;
			window.open('https://www.urionlinejudge.com.br', '_blank');
		}
		
	})
}

$(function(){ codigo_secreto(); });