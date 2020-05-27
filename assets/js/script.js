menu.onclick = function myFunction() {
  var x = document.getElementById("myTopnav");

  if (x.className === "topnav") {
    x.className += " responsive"
  } else {
    x.className = "topnav";
  };
};


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
