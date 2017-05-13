var json;

$(function() {
    $.ajax({
        url: "/lentes/json",
        context: document.body,
        success: function (data) {
            json = data;
            cargarOpciones();
        }
    });
});