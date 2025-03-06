document.addEventListener("DOMContentLoaded", function () {
    function toggleMenu(menuId) {
        const menu = document.getElementById(menuId);
        const allMenus = document.querySelectorAll(".dropdown-menu");

        // Close other menus
        allMenus.forEach(m => {
            if (m !== menu) m.style.display = "none";
        });

        // Toggle current menu
        if (menu.style.display === "block") {
            menu.style.display = "none";
        } else {
            menu.style.display = "block";
        }
    }

    // Close menu if clicked outside
    document.addEventListener("click", function (event) {
        if (!event.target.closest(".nav-item")) {
            document.querySelectorAll(".dropdown-menu").forEach(menu => {
                menu.style.display = "none";
            });
        }
    });

    // Attach function to window for global access
    window.toggleMenu = toggleMenu;
});
document.querySelectorAll(".toggle").forEach((toggle) => {
    toggle.addEventListener("click", function () {
        const content = this.nextElementSibling;

        // Toggle visibility
        if (content.style.display === "block") {
            content.style.display = "none";
            this.innerHTML = this.innerHTML.replace("▲", "▼");
        } else {
            content.style.display = "block";
            this.innerHTML = this.innerHTML.replace("▼", "▲");
        }
    });
});
// Button Click (Example Function)
document.querySelectorAll(".dropdown-btn").forEach((button) => {
    button.addEventListener("click", function () {
        alert("Solution details coming soon!");
    });
});

function showSection(sectionId) {
    document.querySelectorAll('.content-section').forEach(section => {
        section.classList.remove('active');
    });
    document.getElementById(sectionId).classList.add('active');
    
    document.querySelectorAll('.tab').forEach(tab => {
        tab.classList.remove('active');
    });
    document.querySelector(`[onclick="showSection('${sectionId}')"]`).classList.add('active');
}

document.addEventListener("DOMContentLoaded", function () {
    const menu = document.querySelector(".sticky-menu");
    const heroSection = document.querySelector(".hero");
    const menuLinks = document.querySelectorAll(".menu-link");
    const sections = document.querySelectorAll(".section");

    // Function to make menu sticky after hero section
    window.addEventListener("scroll", function () {
        if (window.scrollY > heroSection.clientHeight) {
            menu.classList.add("sticky");
        } else {
            menu.classList.remove("sticky");
        }
    });

    // Smooth Scrolling
    menuLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("href").substring(1);
            const targetSection = document.getElementById(targetId);
            window.scrollTo({
                top: targetSection.offsetTop - 60,
                behavior: "smooth"
            });
        });
    });

    // Highlight Active Menu Item on Scroll
    window.addEventListener("scroll", () => {
        let current = "";
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 80;
            if (window.scrollY >= sectionTop) {
                current = section.getAttribute("id");
            }
        });

        menuLinks.forEach(link => {
            link.classList.remove("active");
            if (link.getAttribute("href").substring(1) === current) {
                link.classList.add("active");
            }
        });
    });
});

// fourth section
function showSection(sectionId) {
    document.querySelectorAll('.content-section').forEach(section => {
        section.classList.remove('active');
    });
    document.getElementById(sectionId).classList.add('active');
    
    document.querySelectorAll('.tab').forEach(tab => {
        tab.classList.remove('active');
    });
    
    document.querySelector(`[onclick="showSection('${sectionId}')"]`).classList.add('active');
}