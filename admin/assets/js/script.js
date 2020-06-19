$(document).ready(function() {
  $('.sidenav').sidenav();
});

$(document).ready(function() {
  $('.tabs').tabs();
});

$(document).ready(function() {
  $('.modal').modal();
});

$(document).ready(function() {
  $('.collapsible').collapsible();
});

$(document).ready(function() {
  $('.scrollspy').scrollSpy();
});

$(document).ready(function() {
  $('.dropdown-trigger').dropdown();
})


$(document).ready(function() {
  $('select').formSelect();
});

$("#submit-button").click(function(event) {
  event.preventDefault();

  // $('form').fadeOut(500);
  // $('.wrapper').addClass('form-success');
});
$("#auth-button").click(function(event) {
  event.preventDefault();

  // $('form').fadeOut(500);
  // $('.wrapper').addClass('form-success');
});

$(document).ready(function() {
  $('input#input_text, textarea#textarea2').characterCounter();
});






// const input = {
//     cfg:  {
//         inputGroup: document.querySelectorAll('.inputWrapper')
//     },
//
//     checkValue(el) {
//         let _value = el.value
//
//         if (_value !== '') {
//             el.classList.add('has-content');
//         } else {
//             el.classList.remove('has-content');
//         }
//     },
//
//     addWrapperClass(el) {
//       const _parent = el.parentNode
//
//       if (el.validity.badInput === true ||
//           el.validity.customError === true ||
//           el.validity.patternMismatch === true ||
//           el.validity.rangeOverflow === true ||
//           el.validity.rangeUnderflow === true ||
//           el.validity.stepMismatch === true ||
//           el.validity.tooLong === true ||
//           el.validity.tooShort === true ||
//           el.validity.typeMismatch === true ||
//           el.validity.valid === false ||
//           el.validity.valueMissing === true) {
//         _parent.classList.remove('is-valid')
//         _parent.classList.add('is-invalid')
//       } else {
//         _parent.classList.remove('is-invalid')
//         _parent.classList.add('is-valid')
//       }
//     },
//
//     init() {
//       for (let i = 0; i < this.cfg.inputGroup.length; i += 1) {
//         const _input = this.cfg.inputGroup[i].querySelector('.input')
//
//         this.checkValue(_input)
//
//         if (_input.classList.contains('has-content')) {
//           this.addWrapperClass(_input)
//         }
//
//         _input.addEventListener('keydown', (el) => {
//           el.currentTarget.classList.add('has-focused')
//           this.checkValue(el.currentTarget)
//           this.addWrapperClass(el.currentTarget)
//         })
//
//         _input.addEventListener('change', (el) => {
//           el.currentTarget.classList.add('has-focused')
//           this.checkValue(el.currentTarget)
//           this.addWrapperClass(el.currentTarget)
//         })
//       }
//     }
// }
//
// input.init()









// $(document).ready( function () {
//   $('.sidenav-trigger').click( function() {
//     $('body').removeClass('has-fixed-sidenav');
//     var instance = M.Sidenav.getInstance(elem);
//     instance.close();
//   });
// });
$(document).ready(function() {
  $('.tooltipped').tooltip();
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
    // scrollX: true,
    scrollCollapse: !0,
    pagingType: "full"
    // paging: true,
    // scrollY: 400,
    // select: true,
    // "lengthChange": false,
    // "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
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
    // scrollX: true,
    scrollCollapse: !0,
    pagingType: "full"
    // paging: true,
    // scrollY: 400,
    // select: true,
    // "lengthChange": false,
    // "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
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
    // scrollX: true,
    scrollCollapse: !0,
    pagingType: "full"
    // paging: true,
    // scrollY: 400,
    // select: true,
    // "lengthChange": false,
    // "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
  });
});

// function($) {
//     $(document).ready(function() {
//         var t = [
//                 ["1", "Tiger Nixon", "System Architect", '<span class="new badge" data-badge-caption="">Edinburgh</span>', "5421", "2011/04/25", "$320,800"],
//                 ["2", "Garrett Winters", "Accountant", '<span class="new badge green" data-badge-caption="">Tokyo</span>', "8422", "2011/07/25", "$170,750"],
//                 ["3", "Ashton Cox", "Junior Technical Author", '<span class="new badge blue" data-badge-caption="">San Francisco</span>', "1562", "2009/01/12", "$86,000"],
//                 ["4", "Cedric Kelly", "Senior Javascript Developer", '<span class="new badge" data-badge-caption="">Edinburgh</span>', "6224", "2012/03/29", "$433,060"],
//                 ["5", "Airi Satou", "Accountant", '<span class="new badge green" data-badge-caption="">Tokyo</span>', "5407", "2008/11/28", "$162,700"],
//                 ["6", "Brielle Williamson", "Integration Specialist", '<span class="new badge orange" data-badge-caption="">New York</span>', "4804", "2012/12/02", "$372,000"],
//                 ["7", "Herrod Chandler", "Sales Assistant", '<span class="new badge blue" data-badge-caption="">San Francisco</span>', "9608", "2012/08/06", "$137,500"],
//                 ["8", "Rhona Davidson", "Integration Specialist", '<span class="new badge green" data-badge-caption="">Tokyo</span>', "6200", "2010/10/14", "$327,900"],
//                 ["9", "Colleen Hurst", "Javascript Developer", '<span class="new badge blue" data-badge-caption="">San Francisco</span>', "2360", "2009/09/15", "$205,500"],
//                 ["10", "Sonya Frost", "Software Engineer", '<span class="new badge" data-badge-caption="">Edinburgh</span>', "1667", "2008/12/13", "$103,600"],
//                 ["11", "Jena Gaines", "Office Manager", '<span class="new badge red" data-badge-caption="">London</span>', "3814", "2008/12/19", "$90,560"],
//                 ["12", "Quinn Flynn", "Support Lead", '<span class="new badge" data-badge-caption="">Edinburgh</span>', "9497", "2013/03/03", "$342,000"],
//                 ["13", "Charde Marshall", "Regional Director", '<span class="new badge blue" data-badge-caption="">San Francisco</span>', "6741", "2008/10/16", "$470,600"],
//                 ["14", "Haley Kennedy", "Senior Marketing Designer", '<span class="new badge red" data-badge-caption="">London</span>', "3597", "2012/12/18", "$313,500"]
//             ],
//             e = $("#table-user").DataTable({
//                 data: t,
//                 columnDefs: [{
//                     targets: 0,
//                     searchable: !1,
//                     orderable: !1,
//                     className: "dataTables-checkbox-column",
//                     render: function(t, e, i, n) {
//                         return '<label><input class="filled-in" type="checkbox" name="id[]" value="' + $("<div/>").text(t).html() + '"><span></span></label>'
//                     }
//                 }],
//                 language: {
//                     search: "",
//                     searchPlaceholder: "Enter search term"
//                 },
//                 order: [3, "asc"],
//                 dom: 'ft<"footer-wrapper"l<"paging-info"ip>>',
//                 scrollY: "400px",
//                 scrollCollapse: !0,
//                 pagingType: "full",
//                 drawCallback: function(t) {
//                     var e = this.api();
//                     $(e.table().container()).find(".paginate_button").addClass("waves-effect"), e.table().columns.adjust()
//                 }
//             });
//         jQuery("#table-user").on("change", "input[type=checkbox]", function(t) {
//             var e = $(this).parentsUntil("table").closest("tr");
//             e.toggleClass("selected", this.checked)
//         }), $("#table-user .select-all").on("click", function() {
//             var t = e.rows({
//                 search: "applied"
//             }).nodes();
//             $('input[type="checkbox"]', t).prop("checked", this.checked), $(t).toggleClass("selected", this.checked)
//         })
//     })
// }

$('.signin-btn').click(function(e) {
  e.preventDefault();

  // $(`.modal input`).parent().removeClass('is-invalid');

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
          // data.fields.forEach(function (field) {
          //     $(`.modal input[name="${field}"]`).parent().addClass('is-invalid');
          // });
        }

        // $('.response').text(data.message);
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
