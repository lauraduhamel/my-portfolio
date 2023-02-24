





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
    //change gif  (img source) when hover
    $("img#gif").hover(function(){
        $(this).attr('src','img/animate-tongue.gif');
    }, function(){
        $(this).attr('src','img/animate.gif');
    });

    //add class left or right one out of two
    let i = 0;
    $("div.project-container").each(function () {
        i++;
       if (i % 2 ==0) {
           $(this).addClass("right");
           $(this).find(".grid-container, .overlay").addClass("right").attr('data-aos', 'fade-right').attr('data-aos-duration', '1000');
       }

       else {
           $(this).addClass("left");
           $(this).find(".grid-container, .overlay").addClass("left").attr('data-aos', 'fade-left').attr('data-aos-duration', '1000');


       }

    })

    AOS.init();


});

