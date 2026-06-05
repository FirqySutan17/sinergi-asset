AOS.init({
  duration: 1000,
  once: true,
});

window.addEventListener("scroll", function () {
  let navbar = document.querySelector(".navbar-custom");

  if (window.scrollY > 50) {
    navbar.classList.add("navbar-scrolled");
  } else {
    navbar.classList.remove("navbar-scrolled");
  }
});

new Swiper(".propertySwiper", {
  slidesPerView: 1,

  spaceBetween: 20,

  breakpoints: {
    768: {
      slidesPerView: 2,
    },

    1200: {
      slidesPerView: 4,
    },
  },
});
