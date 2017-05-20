var json;

$(function() {
    $.ajax({
        url: "/customize",
        context: document.body,
        success: function (data) {
            json = data;
            console.log(json);
            inicializar();
        }
    });
});

$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
