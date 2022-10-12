//  Set current year
const yearEl = document.querySelector(".year");
const currentYear = new Date().getFullYear();
yearEl.textContent = currentYear;

// Carousel
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// SIDE MENU

const bntNavEl = document.querySelector(".menu-btn-container");
const sideNavEl = document.querySelector(".side-nav");

const remove = document.querySelector(".close-btn-container");

bntNavEl.addEventListener("click", function () {
    sideNavEl.classList.toggle("side-nav-open");
});

remove.addEventListener("click", function () {
    sideNavEl.classList.remove("side-nav-open");
});
