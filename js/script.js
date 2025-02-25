


document.addEventListener("DOMContentLoaded", function () {
    let menuParent = document.querySelector(".mega-menu-parent");
    let megaMenu = document.querySelector(".mega-menu");

    menuParent.addEventListener("mouseenter", function () {
        megaMenu.style.display = "block";
    });

    menuParent.addEventListener("mouseleave", function () {
        megaMenu.style.display = "none";
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const floatingNavbar = document.querySelector(".floating-navbar");

    window.addEventListener("scroll", function () {
        if (window.scrollY > window.innerHeight) {
            floatingNavbar.classList.add("show-navbar");
        } else {
            floatingNavbar.classList.remove("show-navbar");
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    console.log("Hero section loaded successfully!");
});


window.onscroll = function () { myFunction() };
function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
}

