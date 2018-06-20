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
        $( "#sortable" ).sortable({
            axis:'y',
            update: function (event,ui) {
                data = $(this).sortable('serialize');
            }
        });
        switch(idSortable){
            case "product":
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
                    }).done(function(data) {
                        if(data.status) {
                            location.href = "/admin/product/";
                        }
                    });
                });
            break;
            case "news":
                $("#btn_save").bind('click', function(event) {
                    event.preventDefault();
                    $.ajax({
                        url: '/admin/news/ajax-sort-news',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            data: data,
                            page : curentPage,
                            _token : _token
                        },
                    }).done(function(data) {
                        if(data.status) {
                            location.href = "/admin/news/";
                        }
                    });
                });
            break;
        }
    }


    if($("textarea").hasClass('ckedit')) {
        $(".ckedit").each(function(index, el) {
            var id = $(this).attr('id');
            var tool = $(this).attr('tool');
            var toolbarGroups = [
                    {"name":"basicstyles","groups":["basicstyles"]},
                    {"name":"links","groups":["links"]},
                    {"name":"paragraph","groups":["list","blocks"]},
                    {"name":"document","groups":["mode"]},
                    {"name":"insert","groups":["insert"]},
                    {"name":"styles","groups":["styles"]},
                    {"name":"about","groups":["about"]}
                ];
            if(tool == 'basic')
                toolbarGroups = [{"name":"document","groups":["mode"]}];
            var editor = CKEDITOR.replace( id, {
                language: 'vi',
                toolbarGroups: toolbarGroups,
            });
            CKFinder.setupCKEditor( editor,"/public/admin/js/ckeditor/ckfinder/");
        });
    }


    if($("input").hasClass('date_picker')) {
        $(".date_picker").each(function(index, el) {
            var id =   $(this).attr('id');
            if(id != "time_event") {
                $("#"+ id).daterangepicker({
                    locale: {format: 'YYYY-MM-DD'},
                    singleDatePicker: true,
                    singleClasses: "picker_1",
                });
            } else {
                 $("#"+ id).daterangepicker({
                    singleClasses: "picker_1",
                    timePicker: true,
                    timePickerSeconds: true,
                    timePicker24Hour: true,
                    startDate: time_open,
                    endDate: time_close,
                    locale: {
                      format: 'YYYY/MM/DD HH:mm:ss'
                    }
                });
            }
        });
    }

    if($("div").hasClass('image_upload')) {
        var $imageupload = $('.imageupload');
        $imageupload.imageupload();
    }
});


