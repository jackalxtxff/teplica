function bind() {
  $('.modal-buy-trigger').click(function(e) {
    let styles = {
      "z-index": "1003",
      "display": "block",
      "opacity": "1",
      "top": "10%",
      "transform": "scaleX(1) scaleY(1)"
    };
    let styles2 = {
      "z-index": "1002",
      "display": "block",
      "opacity": "0.5"
    };

    $(".modal").css(styles);
    $(".modal-overlay").css(styles2);

    let elem = e.currentTarget;
    let product_id = $(elem).parents('.product-item').attr('product-id');
    if (!product_id) {
      product_id = $('.order-button').attr('product_id');
    }

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
      success(data) {
        if (data.status) {
          $(".modal img").attr("src", data.product.image_path);
          $(".modal .product_name").text(data.product.product_name);
          $(".modal span.product_price").text(data.product.product_price);
          $(".modal span.vendor_code").text(data.product.id);
          $(".modal span.product_size").text(`ширина ${data.product.width} м, высота ${data.product.height} м, длина ${data.product.length} м`);
          $(".modal span.product_arcs").text(data.product.arcs);
          $(".modal span.product_base").text(data.product.base);
          $(".modal span.product_durability").text(data.product.durability);
          $(".modal span.material_type").text(data.product.material_type);
          $(".modal span.product_description").text(data.product.description);
          $(".modal .order-button").attr("product_id", data.product.id);
        } else {
          alert(data.message);
        }

      }
    });

  });
  $(".modal-close").click(function() {
    $(".modal").removeAttr("style");
    $(".modal-overlay").removeAttr("style");
  });
  $('.modal-overlay').click(function() {
    $(".modal").removeAttr("style");
    $(".modal-overlay").removeAttr("style");
  });

}

function productItemHover() {
  if ($(window).width() >= '601') {
    $('.product-item').hover(function(e) {
      let elem = e.currentTarget;
      // $(itemProductHover).find('.item-content').css('filter','blur(5px)');
      $(elem).find('.product-item_hover').fadeIn('fast');
    }, function(e) {
      let elem = e.currentTarget;
      // $(itemProductHover).find('.item-content').attr('style', '');
      $(elem).find('.product-item_hover').fadeOut('fast');
    })
  }
};

function productHeight() {
  let height = 0;
  let item = $('.product-item');
  if ($(window).width() >= '601') {
    for (let i = 0; i < item.length; i++) {
      $(item[i]).removeAttr('style');
      if (height < $(item[i]).height()) {
        height = $(item[i]).height();
      }
    }
    for (let i = 0; i < item.length; i++) {
      $(item[i]).removeAttr('style');
      $(item[i]).height(height);
    }
  } else {
    for (let i = 0; i < item.length; i++) {
      $(item[i]).removeAttr('style');
    }
  }
};

function loadProductItem(sort, queue) {

  let formData = new FormData();
  formData.append('sort', sort);
  formData.append('queue', queue);

  $.ajax({
    url: 'php/productItem.php',
    type: 'POST',
    processData: false,
    contentType: false,
    data: formData,
    success(data) {
      $('.catalog_wrapper').html(data);
      productItemHover();
      bind();
      setTimeout(() => productHeight(), 1000);
    }
  });
};

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
};

function closeNav() {
  $("#mySidenav").css("width", "0");
  $(".sidenav-overlay").removeAttr("style");
};

$('.sidenav-overlay').click(function() {
  closeNav();
});


$(document).ready(function() {
  loadProductItem(sort, queue);
  bind();
  hideQueue();
});

$('.message-button').click(function(e) {
  e.preventDefault();

  let fullname = $('input[name="fullname"]').val(),
    email = $('input[name="email"]').val(),
    sex = $('input[name="sex"]').val(),
    message = $('textarea[name="message"]').val();

  let formData = new FormData();
  formData.append('fullname', fullname);
  formData.append('email', email);
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
    success(data) {
      if (data.status) {
        alert('Сообщение отправлено');
      } else {
        if (data.type === 1) {
          data.fields.forEach(function(field) {
            $(`input[name="${field}"]`).addClass('is-invalid');
            $(`textarea[name="${field}"]`).addClass('is-invalid');
          });
        }
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
    adres = $('input[name="adres"]').val(),
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
    success(data) {
      if (data.status) {
        alert('Заказ зарегистрирован');
      } else {
        alert(data.message);
      }
    }
  });

});




$(window).on('load resize', function() {
  productHeight();
  productItemHover();
});

$('.collapsible-header').click(function() {
  $('.collapsible-body').slideToggle(400);
});

$('.selection-btn').click(function(e) {
  e.preventDefault();

  let width = $('select[name="width"]').val(),
    height = $('select[name="height"]').val(),
    length = $('select[name="length"]').val(),
    arcs = $('select[name="arcs"]').val(),
    base = $('select[name="base"]').val();

  let formData = new FormData();
  formData.append('width', width);
  formData.append('height', height);
  formData.append('length', length);
  formData.append('arcs', arcs);
  formData.append('base', base);

  $.ajax({
    url: 'php/selectionOut.php',
    type: 'POST',
    dataType: 'json',
    processData: false,
    contentType: false,
    cache: false,
    data: formData,
    success(data) {
      if (data.status) {
        alert('Заказ зарегистрирован');
      } else {
        alert(data.message);
      }
    }
  });
});

var sort;
var queue = "DESC";

function hideQueue() {
  if (queue == "DESC") {
    $('.queue-sort[sorting="ASC"]').removeAttr('style');
    $('.queue-sort[sorting="DESC"]').css('display', 'none');
  }
  if (queue == "ASC") {
    $('.queue-sort[sorting="DESC"]').removeAttr('style');
    $('.queue-sort[sorting="ASC"]').css('display', 'none');
  }
}

$('.queue-sort').click(function(e) {
  let elem = e.currentTarget;
  let sort = $('select[name="sorting"]').val();
  queue = $(elem).attr('sorting');
  hideQueue();
  loadProductItem(sort, queue);
  return queue;
});

$('select[name="sorting"]').change(function() {
  sort = $('select[name="sorting"]').val();
  loadProductItem(sort, queue);
});
