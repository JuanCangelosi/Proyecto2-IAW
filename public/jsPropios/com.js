var json;

$(function() {
    $.ajax({
        url: "/customize",
        context: document.body,
        success: function (data) {
            json = data;
            inicializar();
        }
    });
});

$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
