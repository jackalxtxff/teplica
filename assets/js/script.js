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
  $('.button-product').click(function(e) {
    let clickButton = e.currentTarget;
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

    // $(".modal .product_name").text($(clickButton).parents().find(".product_name").text());
    $(".modal").css(styles);
    $(".modal-overlay").css(styles2);
  })
  $(".modal-close").click(function() {
    $(".modal").removeAttr("style");
    $(".modal-overlay").removeAttr("style");
  })
  $('.modal-overlay').click(function() {
    $(".modal").removeAttr("style");
    $(".modal-overlay").removeAttr("style");
  })
});


$('.button-product').click(function(e) {
    let elem = e.currentTarget;

    let product_id = $(elem).parents('.block_shop').attr('product-id');

    let formData = new FormData();
    formData.append('product-id', product_id);

    $.ajax({
        url: 'php/productOut.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {
            if (data.status) {
              $(".modal .product_name").text(data.product.product_name);
              $(".modal .product_price").text(data.product.product_price);
              $(".modal .description").text(data.product.description);
              $(".modal .order-button").attr("product_id", data.product.id);
            } else {
              alert(data.message);
            }

        }
    });

});

$('.message-button').click(function(e) {
    e.preventDefault();

    let fullname = $('input[name="fullname"]').val(),
        sex = $('input[name="sex"]').val(),
        message = $('textarea[name="message"]').val();

    let formData = new FormData();
    formData.append('fullname', fullname);
    formData.append('sex', sex);
    formData.append('message', message);

    $.ajax({
        url: 'php/messageOut.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {
            if (data.status) {
              alert('Сообщение отправлено');
            } else {
              alert(data.message);
            }

        }
    });

});

$('.order-button').click(function(e) {
    e.preventDefault();

    let fullname = $('input[name="name"]').val(),
        email = $('input[name="email"]').val(),
        number = $('input[name="phone"]').val(),
        adres = $('input[name="adres"]').val();
        product_id = $('.order-button').attr('product_id');

    let formData = new FormData();
    formData.append('fullname', fullname);
    formData.append('email', email);
    formData.append('number', number);
    formData.append('adres', adres);
    formData.append('product_id', product_id);

    $.ajax({
        url: 'php/orderOut.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {
            if (data.status) {
              alert('Заказ зарегистрирован');
            } else {
              alert(data.message);
            }

        }
    });

});
