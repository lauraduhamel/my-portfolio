



const button = $('button.hamburger');
const backdrop = $('.cover');


function overlay() {
    $('div.overlay').addClass('open');
    $('body').css('overflow-y', 'hidden');
}

function background() {
    $('div.overlay').removeClass('open');
    $('body').css('overflow-y', 'auto');
}

$( document ).ready(function() {

    if (window.matchMedia('(max-width: 767px)').matches)  {
        function overflow() {
            $('body').css('overflow-y', 'auto');
        }
    }

});

$(document).ready(function() {
    $(window).resize(function() {
        if ($(window).width() > 1024) {
            $('body').css('overflow-y', 'auto');
        }
    });
});


//transition





//menu script

/*
    let count = 0;

    function menu() {
        if (count%2 == 0) {
            $('header .close').css('display', 'none');
            $('header .menu').css('display', 'block');
            $('body').css('overflow-y', 'hidden');
            $('.menu').css('display', 'block');
            console.log("croix");
        }
        else {
            $('header .menu').css('display', 'none');
            $('header .close').css('display', 'block');
            $('body').css('overflow-y', 'auto');
            $('.menu').css('display', 'none');
            console.log("menu");
        }
        count=count+1;
    }



*/
