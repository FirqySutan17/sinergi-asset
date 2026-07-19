document.addEventListener("DOMContentLoaded", function () {

    const header = document.getElementById("header");

    const menu = document.getElementById("mobileMenu");

    const overlay = document.querySelector(".mobile-overlay");

    const toggle = document.getElementById("navbarToggle");

    const close = document.getElementById("mobileClose");

    const mobileLinks = document.querySelectorAll(".mobile-menu a");



    /* ===============================
       Sticky Header
    =============================== */

    const logo = document.getElementById("navbarLogo");

    function stickyHeader(){

        if(window.scrollY > 40){

            header.classList.add("scrolled");

            if(logo){

                logo.src = logo.dataset.dark;

            }

        }else{

            header.classList.remove("scrolled");

            if(logo){

                logo.src = logo.dataset.white;

            }

        }

    }

    stickyHeader();

    window.addEventListener("scroll", stickyHeader);



    /* ===============================
       Open Mobile Menu
    =============================== */

    function openMenu(){
        menu.classList.add("active");
        overlay.classList.add("active");
        toggle.classList.add("active");
        document.body.style.overflow="hidden";
    }

    /* ===============================
       Close Mobile Menu
    =============================== */

    function closeMenu(){
        menu.classList.remove("active");
        overlay.classList.remove("active");
        toggle.classList.remove("active");
        document.body.style.overflow="";
    }

    if(toggle){

        toggle.addEventListener("click", openMenu);

    }



    if(close){

        close.addEventListener("click", closeMenu);

    }



    overlay.addEventListener("click", closeMenu);



    mobileLinks.forEach(function(link){

        link.addEventListener("click", closeMenu);

    });



    document.addEventListener("keydown", function(e){

        if(e.key === "Escape"){

            closeMenu();

        }

    });

});

