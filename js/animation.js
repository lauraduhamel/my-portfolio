



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
        $(this).attr('src','img/profile-animation-hover.gif');
    }, function(){
        $(this).attr('src','img/profile-animation.gif');
    });


});
