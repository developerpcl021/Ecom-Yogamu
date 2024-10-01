const header = document.getElementById("header");
const Desktopheader = document.getElementById("desktop_header");
const tooglebutton = document.getElementById("show_header");
const Hidebutton = document.getElementById("hide_header");
const HeroSection = document.getElementById("hero_section");

// Toggle
let toogle = false;

if (window.innerWidth > 767) {
  header.style.left = "-768px";
  document.body.style.overflow = "unset";
}

tooglebutton.addEventListener("click", function () {
  if (toogle === false) {
    showSideBar();
  } else {
    hideSideBar();
  }
});

Hidebutton.addEventListener("click", hideSideBar);

function hideSideBar() {
  toogle = false;
  header.style.left = "-768px";
  document.body.style.overflow = "unset";
}

function showSideBar() {
  toogle = true;
  header.style.left = "0px";
  document.body.style.overflow = "hidden";
}

// Sticky Navbar
window.onscroll = function () {
  myFunction();
};

function myFunction() {
  if (document.documentElement.scrollTop > 20) {
    Desktopheader.classList.add("shadow-md");
    Desktopheader.classList.add("bg-secondary");
  } else {
    Desktopheader.classList.remove("shadow-md");
    Desktopheader.classList.remove("bg-secondary");
  }
}

// Testimonial Slick Slider

$(".testimonial_slider").slick({
  prevArrow: $(".slick-prev"),
  nextArrow: $(".slick-next"),
  slidesToShow: 2,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
  ],
});

// current slug assign url to link element's attribute where rel="canoncial" js
$(document).ready(function () {
  var currentSlug = window.location;
  $('link[rel="canonical"]').attr("href", currentSlug);
});
