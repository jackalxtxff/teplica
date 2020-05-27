// menu.onclick = function myFunction() {
//   var x = document.getElementById("myTopnav");
//
//   if (x.className === "topnav") {
//     x.className += " responsive"
//   } else {
//     x.className = "topnav";
//   };
// };

function openNav() {
  let styles = {
    "z-index": "1002",
    "display": "block",
    "opacity": "0.5"
  }
  if ($(window).width() <= '600') {
    $("#mySidenav").css("width", "70%");
  } else {
    $("#mySidenav").css("width", "60%");
  }
  $('.sidenav-overlay').css(styles);
}

function closeNav() {
  $("#mySidenav").css("width", "0");
  $(".sidenav-overlay").removeAttr("style");
}

$('.sidenav-overlay').click(function() {
  closeNav();
})



$(document).ready(function() {
  $('.button').click(function(e) {
    let clickButton = e.currentTarger;
    let styles = {
      "z-index": "1003",
      "display": "block",
      "opacity": "1",
      "top": "10%",
      "transform": "scaleX(1) scaleY(1)"
    }
    let styles2 = {
      "z-index": "1002",
      "display": "block",
      "opacity": "0.5"
    }

    $(".modal .product_name").text($(clickButton).parents().find(".product_name").text());
    $(".modal").css(styles);
    $(".modal-overlay").css(styles2);
  })
  $(".modal-close").click(function() {
    $(".modal").removeAttr("style");
    $(".modal-overlay").removeAttr("style");
  })
});
