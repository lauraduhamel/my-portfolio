



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
        $(this).attr('src','img/profile-animation-hover-2.gif');
    }, function(){
        $(this).attr('src','img/profile-animation-2.gif');
    });

    //add class left or right one out of two
    let i = 0;
    $("div.project-container").each(function () {
        i++;
       if (i % 2 ==0) {
           $(this).addClass("right");
           $(this).find(".grid-container, .overlay").addClass("right");
       }

       else {
           $(this).addClass("left");
           $(this).find(".grid-container, .overlay").addClass("left");
       }

    })

    $("li::selection").$(this).html("je suis lolilol");



});
