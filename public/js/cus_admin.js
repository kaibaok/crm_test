$(document).ready(function() {
    $.listen('parsley:field:validate', function() {
      validateFront();
    });
    $('#demo-form .btn-submit').on('click', function() {
      $('#demo-form').parsley().validate();
      validateFront();
    });
    var validateFront = function() {
      if (true === $('#demo-form').parsley().isValid()) {
        $('.bs-callout-info').removeClass('hidden');
        $('.bs-callout-warning').addClass('hidden');
      } else {
        $('.bs-callout-info').addClass('hidden');
        $('.bs-callout-warning').removeClass('hidden');
      }
    };
  });


// list user
$(document).on('click', '#btn_search_aluser', function(event) {
	var txt_aluser = $("#txt_aluser").val();
	var token = $("#token_aluser").val();
		$.ajax({
			url: '/admin/user/ajax-suser',
			type: 'POST',
			dataType: 'html',
			data: {txt_search:txt_aluser,_token:token},
		}).done(function(data) {
			$("#tbl_aluser").empty().append(data);
		});
});

$(document).on('keyup', '#txt_aluser', function(event) {
  var txt_aluser = $("#txt_aluser").val();
  var token = $("#token_aluser").val();
    $.ajax({
      url: '/admin/user/ajax-suser',
      type: 'POST',
      dataType: 'html',
      data: {txt_search:txt_aluser,_token:token},
    }).done(function(data) {
      $("#tbl_aluser").empty().append(data);
    });
});

// list product
$(document).on('click', '#btn_search_alproduct', function(event) {
  var txt_alproduct = $("#txt_alproduct").val();
  var token = $("#token_alproduct").val();
    $.ajax({
      url: '/admin/product/ajax-sproduct',
      type: 'POST',
      dataType: 'html',
      data: {txt_search:txt_alproduct,_token:token},
    }).done(function(data) {
      $("#tbl_alproduct").empty().append(data);
    });
});

$(document).on('keyup', '#txt_alproduct', function(event) {
  var txt_alproduct = $("#txt_alproduct").val();
  var token = $("#token_alproduct").val();
  $.ajax({
    url: '/admin/product/ajax-sproduct',
    type: 'POST',
    dataType: 'html',
    data: {txt_search:txt_alproduct,_token:token},
  }).done(function(data) {
    $("#tbl_alproduct").empty().append(data);
  });
});


$(document).on('click', '.btn_status_product', function(event) {
  event.preventDefault();
  var token = $('meta[name="csrf-token"]').attr('content');
  var id = $(this).attr('rel');
  child = $(this).children('i');
  $.ajax({
    url: '/admin/product/status/'+id,
    type: 'GET',
  }).done(function(data) {
      if(data){
        if(child.hasClass('fa-eye')) child.removeClass('fa-eye').addClass('fa-eye-slash');
        else child.removeClass('fa-eye-slash').addClass('fa-eye');
      }
  });
});

$(document).on('click', '.btn_status_cproduct', function(event) {
  event.preventDefault();
  var token = $('meta[name="csrf-token"]').attr('content');
  var id = $(this).attr('rel');
  child = $(this).children('i');
  $.ajax({
    url: '/admin/cate-product/status/'+id,
    type: 'GET',
  }).done(function(data) {
      if(data){
        if(child.hasClass('fa-eye')) child.removeClass('fa-eye').addClass('fa-eye-slash');
        else child.removeClass('fa-eye-slash').addClass('fa-eye');
      }
  });
});
