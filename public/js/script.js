function toggleNavOn(){
    document.querySelector("header").style.display = "block";
    document.querySelector("main").style.marginLeft = "22%";
}

function toggleNavOff(){
    document.querySelector("header").style.display = "none";
    document.querySelector(".toggleNavOn").style.display = "block";

    document.querySelector("main").style.marginLeft = "0";
}