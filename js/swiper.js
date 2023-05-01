$(document).ready(function() {
    var swiper = null;

    function activateSwiper() {
        var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        if (screenWidth < 1024) {
            $('.project-container').addClass('swiper-container');
            $('.projects').addClass('swiper-wrapper');
            $('.project-item').addClass('swiper-slide');

            swiper = new Swiper('.swiper-container', {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 5000,
                },
            });
        } else {
            $('.project-container').removeClass('swiper-container');
            $('.projects').removeClass('swiper-wrapper');
            $('.project-item').removeClass('swiper-slide');

            if (swiper) {
                swiper.destroy();
                swiper = null;
            }
        }
    }

    activateSwiper();

    $(window).resize(function() {
        activateSwiper();
    });
});
