$(document).ready(function(){
    //start
    //Burger Menu
    $(".burger").on("click", function (){
        $("nav").slideToggle("fast")
    })

    //Image Slider
    $("#lightSlider").lightSlider({
        item: 1,
        slideMargin: 0,
        loop: true,
    })
    //end
})
