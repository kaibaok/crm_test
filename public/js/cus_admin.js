$(document).ready(function() {
    window.Parsley.on('parsley:field:validate', function() {
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


    if($("tbody").hasClass('sortable')) {
        var data = null;
        switch(idSortable){
            case "product":
                $( "#sortable" ).sortable({
                    axis:'y',
                    update: function (event,ui) {
                        data = $(this).sortable('serialize');
                    }
                });

                $("#btn_save").bind('click', function(event) {
                    event.preventDefault();
                    $.ajax({
                        url: '/admin/product/ajax-sort-product',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            data: data,
                            page : curentPage,
                            _token : _token
                        },
                    }).done(function() {
                        console.log("success");
                    });
                });

            break;
        }
    }
});


