





/*
$(".gif").hover(function(){
    $(this).attr("src", function(index, attr){
        return attr.replace(".gif", "../img/profile-animation-hover.gif");
    });
}, function(){
    $(this).attr("src", function(index, attr){
        return attr.replace("../img/profile-animation-hover.gif", ".gif");
    });
});
*/


$( document ).ready(function() {

    //animation in scroll
    AOS.init();

    //change gif  (img source) when hover
    $("img#gif").hover(function(){
        $(this).attr('src','img/animate-tongue.gif');
    }, function(){
        $(this).attr('src','img/animate.gif');
    });



    function updateClasses() {
        let i = 0;
        $("div.project-item").each(function () {
            if ($(window).width() < 1024) {
                $(this).removeClass("right").addClass("left");
                $(this).find(".grid-container, .overlay").removeClass("right").addClass("left")//.removeAttr('data-aos', 'fade-right').removeAttr('data-aos', 'fade-right').removeAttr('data-aos-duration', '1000');
            } else {
                i++;
                if (i % 2 == 0) {
                    $(this).addClass("right").removeClass("left");
                    $(this).find(".grid-container, .overlay").addClass("right").removeClass("left");//.attr('data-aos', 'fade-right').attr('data-aos-duration', '1000');
                } else {
                    $(this).addClass("left").removeClass("right");
                    $(this).find(".grid-container, .overlay").addClass("left").removeClass("right");//.attr('data-aos', 'fade-right').attr('data-aos-duration', '1000');
                }
            }
        });
    }

// Exécuter le code pour la première fois
    updateClasses();

// Exécuter le code à chaque fois que la fenêtre est redimensionnée
    $(window).on('resize', function() {
        updateClasses();
    });


});

