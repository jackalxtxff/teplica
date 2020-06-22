$(document).ready(function() {
  $('.sidenav').sidenav();
  $('.modal').modal();
  $('.collapsible').collapsible();
  $('.dropdown-trigger').dropdown();
  $('select').formSelect();
  $('input#input_text, textarea#textarea2').characterCounter();
});

$("#submit-button").click(function(event) {
  event.preventDefault();
});
$("#auth-button").click(function(event) {
  event.preventDefault();
});

$(document).ready(function() {
  $('tbody tr td').dblclick(function(e) {
    let elem = e.currentTarget;
    let value = $(elem).find(".bd-text").text();
    $(elem).find('.edit-box').find('.input-field input').val(value);
    $(elem).find('.edit-box').fadeIn('fast');
  });

  $('tbody tr td .edit-box .edit-box__footer .close').click(function(e) {
    let elem = e.currentTarget;
    $(elem).parents('.edit-box').fadeOut('fast');
    $(elem).parents('.edit-box').find('.input-field input').val('');
  });

  $('tbody tr td .edit-box .edit-box__footer .save').click(function(e) {
    let elem = e.currentTarget;

    let product_value = $(elem).parents('.edit-box').find('.input-field input[name="change-value"]').val(),
      product_id = $(elem).parents('tr').find('.id').text(),
      column_name = $(elem).parents('td').attr('class');

    if (!product_value) {
      product_value = $(elem).parents('.edit-box').find('select[name="change-value"]').val();
      if (product_value == null) product_value = "";
    }


    let formData = new FormData();
    formData.append('product-value', product_value);
    formData.append('product-id', product_id);
    formData.append('column-name', column_name);

    $.ajax({
      url: 'php/changeProducts.php',
      type: 'POST',
      dataType: 'json',
      processData: false,
      contentType: false,
      cache: false,
      data: formData,
      success(data) {
        if (data.status) {
          let toastHTML = `<span>${data.message}</span>`;
          M.toast({
            html: toastHTML
          });
        } else {
          let toastHTML = `<span>${data.message}</span>`;
          M.toast({
            html: toastHTML
          });
        }
      }
    });

    $(elem).parents('.edit-box').fadeOut('fast');
    $(elem).parents('.edit-box').find('.input-field input').val('');
  });
});





$(document).ready(function() {
  $('#table-orders').DataTable({
    language: {
      search: "",
      searchPlaceholder: "Что нужно искать",
      info: "Отображение с _START_ по _END_ запись, всего _TOTAL_ записей",
      infoEmpty: "Отображение 0 из 0 записей, всего 0 записей",
      lengthMenu: "Показать _MENU_ записей",
      emptyTable: "Данные отсутствуют"
    },
    dom: 'ft<"footer-wrapper"l<"paging-info"ip>>',
    scrollY: "400px",
    scrollCollapse: !0,
    pagingType: "full"
  });
});



$(document).ready(function() {
  $('#table-messages').DataTable({
    language: {
      search: "",
      searchPlaceholder: "Что нужно искать",
      info: "Отображение с _START_ по _END_ запись, всего _TOTAL_ записей",
      infoEmpty: "Отображение 0 из 0 записей, всего 0 записей",
      lengthMenu: "Показать _MENU_ записей",
      emptyTable: "Данные отсутствуют"
    },
    dom: 'ft<"footer-wrapper"l<"paging-info"ip>>',
    scrollY: "400px",
    scrollCollapse: !0,
    pagingType: "full"
  });
});

$(document).ready(function() {
  $('#table-product').DataTable({
    language: {
      search: "",
      searchPlaceholder: "Что нужно искать",
      info: "Отображение с _START_ по _END_ запись, всего _TOTAL_ записей",
      infoEmpty: "Отображение 0 из 0 записей, всего 0 записей",
      lengthMenu: "Показать _MENU_ записей",
      emptyTable: "Данные отсутствуют"
    },
    dom: 'ft<"footer-wrapper"l<"paging-info"ip>>',
    scrollY: "700px",
    scrollCollapse: !0,
    pagingType: "full"
  });
});

$('.signin-btn').click(function(e) {
  e.preventDefault();

  let email = $('input[name="email"]').val(),
    password = $('input[name="password"]').val();

  $.ajax({
    url: 'php/signin.php',
    type: 'POST',
    dataType: 'json',
    data: {
      email: email,
      password: password
    },
    success(data) {
      if (data.status) {
        document.location.href = '/admin/products';
      } else {
        if (data.type === 1) {
          alert(field);
        }
      }
    }
  });
});

$('.logout').click(function() {
  document.location.href = 'php/logout.php'
});

var image_path = false;

$('input[name="image_path"]').change(function(e) {
  image_path = e.target.files[0];
});


$('.access-button').click(function(e) {
  e.preventDefault();

  let product_name = $('input[name="product_name"]').val(),
    material_type = $('select[name="material_type"]').val(),
    product_price = $('input[name="product_price"]').val(),
    discount_price = $('input[name="discount_price"]').val(),
    width = $('input[name="width"]').val(),
    height = $('input[name="height"]').val(),
    length = $('input[name="length"]').val(),
    arcs = $('select[name="arcs"]').val(),
    base = $('select[name="base"]').val(),
    durability = $('select[name="durability"]').val(),
    description = $('textarea[name="description"]').val();

  let formData = new FormData();
  formData.append('product_name', product_name);
  formData.append('material_type', material_type);
  formData.append('product_price', product_price);
  formData.append('discount_price', discount_price);
  formData.append('width', width);
  formData.append('height', height);
  formData.append('length', length);
  formData.append('arcs', arcs);
  formData.append('base', base);
  formData.append('durability', durability);
  formData.append('description', description);
  formData.append('image_path', image_path);


  $.ajax({
    url: 'php/addProducts.php',
    type: 'POST',
    dataType: 'json',
    processData: false,
    contentType: false,
    cache: false,
    data: formData,
    success(data) {

      if (data.status) {
        let toastHTML = `<span>${data.message}</span>`;
        M.toast({
          html: toastHTML
        });
      } else {
        if (data.type == 1) {
          data.fields.forEach(function(field) {
            $(`input[name="${field}"]`).addClass('invalid');
            $(`select[name="${field}"]`).parent('.select-wrapper').children('.select-dropdown').addClass('invalid');
            $(`textarea[name="${field}"]`).addClass('invalid');
          });
          let toastHTML = `<span>${data.message}</span>`;
          M.toast({
            html: toastHTML
          });
        } else {
          let toastHTML = `<span>${data.message}</span>`;
          M.toast({
            html: toastHTML
          });
        }
      }
    }
  });

});

$('.input-field').click(function(e) {
  let elem = e.currentTarget;
  $(elem).children('.select-wrapper').children('.select-dropdown').removeClass('invalid');
})


$('.action-btn').click(function(e) {
  let elem = e.currentTarget;

  let product_id = $(elem).parents('tr').find('.id').text();

  let formData = new FormData();
  formData.append('product-id', product_id);

  $.ajax({
    url: 'php/deleteProducts.php',
    type: 'POST',
    dataType: 'json',
    processData: false,
    contentType: false,
    cache: false,
    data: formData,
    success(data) {
      if (data.status) {
        let toastHTML = '<span>' + data.message + '</span>';
        M.toast({
          html: toastHTML
        });
      } else {
        let toastHTML = '<span>Ошибка</span>';
        M.toast({
          html: toastHTML
        });
      }

    }
  });
});

$(document).ready(function() {
  function displayTime() {
    var days = [
      'Воскресенье',
      'Понедельник',
      'Вторник',
      'Среда',
      'Четверг',
      'Пятница',
      'Суббота'
    ];
    var currentDate = new Date();
    var currentTime = currentDate.toLocaleTimeString();
    var currentDay = currentDate.getDay();
    var outDate = `${currentTime} ${days[currentDay]}(${currentDay})`;

    $('.ticking-clock span').text(outDate);
  }

  displayTime();
  setInterval(displayTime, 1000);
});
