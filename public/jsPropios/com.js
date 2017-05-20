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

$(function() {
   $.ajax({
        url: "/obteneridprecargados",
        context: document.body,
        success: function (data) {
            console.log(data);
            cargarPrecargados(data);
        }
    });
});

$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
