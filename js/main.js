$(document).ready(function(){
    //start
    //Burger Menu
    $(".burger").on("click", function (){
        $("nav").slideToggle("fast")
    })
    let setMenu = function () {
        // variables
        let burgerMenu = document.querySelector(".burger");
        let navBar = document.querySelector("nav");
        let navBarStatus = false;
        if (navBar.style.left === "") {
            burgerMenu.addEventListener("click", () => {
            console.info(burgerMenu.classList);
            if (navBarStatus) {
                navBarStatus = false;
                navBar.removeAttribute("style");
                burgerMenu.setAttribute("class", "burger");
            } else {
                navBarStatus = true;
                navBar.style.left = "0px";
                burgerMenu.setAttribute("class", "burger changeBurger");
            }
            });
        } else {
            navBarStatus = false;
            navBar.removeAttribute("style");
        }
    };
    setMenu();
    // resize
    window.addEventListener("resize", () => setMenu());

    //Image Slider
    $("#lightSlider").lightSlider({
        item: 1,
        slideMargin: 0,
        loop: true,
    })

    //end
})
