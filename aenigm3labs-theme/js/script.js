document.addEventListener("DOMContentLoaded", function () {
    let menuParents = document.querySelectorAll(".mega-menu-parent"); // Select all parents
    let megaMenus = document.querySelectorAll(".mega-menu"); // Select all mega menus

    menuParents.forEach(function (menuParent) {
        let megaMenu = menuParent.querySelector(".mega-menu"); // Find the corresponding mega menu

        menuParent.addEventListener("click", function (event) {
            // Close all other mega menus first
            megaMenus.forEach(function (menu) {
                if (menu !== megaMenu) {
                    menu.style.display = "none";
                }
            });

            // Toggle the clicked mega menu
            if (megaMenu.style.display === "block") {
                megaMenu.style.display = "none";
            } else {
                megaMenu.style.display = "block";
            }

            event.stopPropagation(); // Prevent click from reaching the document
        });
    });

    // Close menu when clicking outside
    document.addEventListener("click", function (event) {
        megaMenus.forEach(function (menu) {
            if (!menu.contains(event.target) && !event.target.closest(".mega-menu-parent")) {
                menu.style.display = "none";
            }
        });
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

//Mega menu title hover
document.addEventListener("DOMContentLoaded", function () {
    let navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach((link) => {
        link.addEventListener("click", function () {
            // Remove active class from all links
            navLinks.forEach((nav) => nav.classList.remove("active"));

            // Add active class to the clicked link
            this.classList.add("active");
        });
    });
});


//Mega menu content hover
document.addEventListener("DOMContentLoaded", function () {
    let listItems = document.querySelectorAll(".col-md-3 ul li");

    listItems.forEach(item => {
        item.addEventListener("mouseover", function () {
            item.style.color = "blue"; // Change text color to blue
        });

        item.addEventListener("mouseout", function () {
            item.style.color = ""; // Reset color
        });
    });
});

//floating Nav Bar
document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".floating-navbar a");

    function setActiveLink() {
        let scrollPosition = window.scrollY + 100; // Adjust offset for better accuracy

        sections.forEach((section) => {
            if (
                scrollPosition >= section.offsetTop &&
                scrollPosition < section.offsetTop + section.offsetHeight
            ) {
                // Remove active class from all links
                navLinks.forEach((link) => link.classList.remove("active"));

                // Find the corresponding link and add the active class
                const activeLink = document.querySelector(
                    `.floating-navbar a[href="#${section.id}"]`
                );
                if (activeLink) activeLink.classList.add("active");
            }
        });
    }

    window.addEventListener("scroll", setActiveLink);
});

//free audit pop up 
document.addEventListener("DOMContentLoaded", function () {
        const openModalBtn = document.getElementById("openModalBtn");
        const formModal = document.getElementById("auditModal");
        const successModal = document.getElementById("successModal");
        const closeButtons = document.querySelectorAll(".close");
        const form = document.getElementById("auditForm");

        // Ensure modals are hidden on page load
        formModal.style.display = "none";
        successModal.style.display = "none";

        // Open form modal when button is clicked
        openModalBtn.addEventListener("click", function () {
          formModal.style.display = "flex";
        });

        // Close modals when clicking outside
        window.addEventListener("click", function (event) {
          if (event.target === formModal) {
            formModal.style.display = "none";
          }
          if (event.target === successModal) {
            successModal.style.display = "none";
          }
        });

        // Close modals when clicking on the close button (×)
        closeButtons.forEach((button) => {
          button.addEventListener("click", function () {
            formModal.style.display = "none";
            successModal.style.display = "none";
          });
        });

        // Handle form submission
        form.addEventListener("submit", function (event) {
          event.preventDefault(); // Prevent actual form submission

          // Hide form modal
          formModal.style.display = "none";

          // Show success modal
          successModal.style.display = "flex";

          // Auto-close success modal after 3 seconds
          setTimeout(function () {
            successModal.style.display = "none";
          }, 3000);
        });
      });

