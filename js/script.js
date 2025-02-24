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

