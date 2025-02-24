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
    console.log("Hero section loaded successfully!");
});

