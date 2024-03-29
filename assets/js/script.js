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
    modalClose();
  });
  $('.modal-overlay').click(function() {
    modalClose();
  });

}

function modalClose() {
  $(".modal").removeAttr("style");
  $(".modal-overlay").removeAttr("style");
  $(".success-modal").removeAttr("style");
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

function loadProductItem(sort, queue, load) {

  let formData = new FormData();
  formData.append('sort', sort);
  formData.append('queue', queue);
  formData.append('load', load);

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
  loadProductItem(sort, queue, load);
  bind();
  hideQueue();
  $('.form-selection select option[value=""]').prop('selected', true);
});

$('.message-button').click(function(e) {
  e.preventDefault();

  let fullname = $('input[name="fullname"]').val(),
    contact = $('input[name="contact"]').val(),
    message = $('input[name="message"]').val();

  let formData = new FormData();
  formData.append('fullname', fullname);
  formData.append('contact', contact);
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
        $('.success-modal').css(styles);
        $(".modal-overlay").css(styles2);
        setTimeout(() => $('.circle-loader').toggleClass('load-complete'), 600);
        setTimeout(() => $('.checkmark').toggle(), 600);
        setTimeout(() => modalClose(), 2000);
      } else {
        if (data.type === 1) {
          data.fields.forEach(function(field) {
            $(`input[name="${field}"]`).addClass('is-invalid');
            $(`input[name="${field}"]`).parents('.form__group').find('label').addClass('is-invalid__label');
            $(`textarea[name="${field}"]`).addClass('is-invalid');
          });
        }
        // alert(data.message);
      }
    }
  });
});

$('input.form__control').click(function() {
  $(this).removeClass('is-invalid').parents('.form__group').find('label').removeClass('is-invalid__label');
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
        $('.success-modal').css(styles);
        $(".modal-overlay").css(styles2);
        setTimeout(() => $('.circle-loader').toggleClass('load-complete'), 600);
        setTimeout(() => $('.checkmark').toggle(), 600);
        setTimeout(() => modalClose(), 2000);
      } else {
        if (data.type === 1) {
          data.fields.forEach(function(field) {
            $(`input[name="${field}"]`).addClass('is-invalid');
          });
        }
      }
    }
  });

});

$('.form-field').click(function(e) {
  elem = e.currentTarget;
  $(elem).removeClass('is-invalid');
});



$(window).on('load resize', function() {
  productHeight();
  productItemHover();
});

$('.collapsible-header').click(function() {
  $('.collapsible-body').slideToggle(400);
});

var load = "";

$('select.select').change(function(e) {
  e.preventDefault();
  selection();
});

function selection() {
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
        $('.selection-btn').text(`Показать (совпадений ${data.count})`)
        load = data.load;
      } else {
        if (data.type === 1) {
          data.fields.forEach(function(field) {
            $(`input[name="${field}"]`).addClass('is-invalid');
            $(`input[name="${field}"]`).parents('.form__group').find('label').addClass('is-invalid__label');
            $(`textarea[name="${field}"]`).addClass('is-invalid');
          });
        }
      }
    }
  });
}

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

$('.reset').click(function() {
  load = "";
  sort = "";
  loadProductItem(sort, queue, load);
  $('.form-selection select option[value=""]').prop('selected', true);
  $('.selection-btn').text('Показать');
  $('.collapsible-body').slideUp(400);
});


$('.selection-btn').click(function(e) {
  e.preventDefault();
  loadProductItem(sort, queue, load);
  $('.collapsible-body').slideToggle(400);
})

$('.queue-sort').click(function(e) {
  let elem = e.currentTarget;
  let sort = $('select[name="sorting"]').val();
  queue = $(elem).attr('sorting');
  hideQueue();
  loadProductItem(sort, queue, load);
  return queue;
});

$('select[name="sorting"]').change(function() {
  sort = $('select[name="sorting"]').val();
  loadProductItem(sort, queue, load);
});
