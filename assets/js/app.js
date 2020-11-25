$(document).ready(function () {
  console.log("document is ready");

  //nav-collapse
  $('[data-toggle="offcanvas"], #navToggle').on("click", function () {
    $(".offcanvas-collapse").toggleClass("open");
  });

  //owl-carousel
  $("#trending .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    margin: 10,
    responsive: {
      0: {
        items: 1,
      },

      600: {
        items: 3,
      },

      1000: {
        items: 5,
      },
    },
  });
});

window.onload = function () {
  console.log("window is loaded");
};
