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

  //Isotope Filter
  var $grid = $(".grid").isotope({
    itemSelector: ".grid-item",
    layoutMode: "fitRows",
  });

  $(".button-group").on("click", "button", function () {
    var filterValue = $(this).attr("data-filter");
    $grid.isotope({ filter: filterValue });
  });

  //Ajax
  $(".product-form").submit(function () {
    var form_data = $(this).serialize();
    var button_content = $(this).find("button[type=submit]");
    button_content.html("Adding...");
    $.ajax({
      url: "./includes/add-to-cart.php",
      type: "POST",
      data: form_data,
      dataType: "html",
      success: function (response) {
        $(".cart-quantity").html(response);
        button_content.html("Add to Cart");
      },
    });
    return false;
  });
});
