function sel_skill(num){
    $('.desc-skill-tit').text( arr_skills[ num ][1] );
    $('.desc-skill-txt').html( arr_skills[ num ][4] );
    $('.desc-skill-logo')
        .css({
            'background-image': 'url(' + baseURL + 'assets/img/' + arr_skills[ num ][0] + ')',
            'left':'15%',
            'opacity':0
        })
        .animate({ 'left':'8%', 'opacity':1 },500);
}

function show_desc(num){
    if($(window).width() > 650) {
        $('section, header').addClass('blur');
        $('.desc-skill-fundo-txt').css('width', '65%');
        $('.desc-skill').fadeIn();
        sel_skill(num);
    }
}

function hide_desc(){
    $('section, header').removeClass('blur');
    $('.desc-skill-logo').animate({'left':'15%'});
    $('.desc-skill').fadeOut();
}