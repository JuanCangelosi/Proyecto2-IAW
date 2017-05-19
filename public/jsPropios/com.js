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
   /* $.ajax({
        url: "/precargados",
        context: document.body,
        success: function (data) {
           cargarPrecargados(data);
        }
    });
    */
    cargarPrecargados([1,2,3]);
});

