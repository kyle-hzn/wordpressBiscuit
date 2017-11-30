
var menu = document.querySelector(".menu-wrapper");
var menuButton = document.querySelector(".menu-icon");

var menuState = 0;

menuButton.addEventListener("click", function(){
    if(menuState == 0){
        menuState = 1;
        console.log(menuState);
        menu.classList.remove("menu-hidden");
    }
    else {
        menuState = 0;
        console.log(menuState);
        menu.classList.add("menu-hidden");
    }
});