
$('#mostrarModelo').on('click', '.btnmodelo', function(e){
    var lente=e.currentTarget.id;
    mostrarModelo(lente);
    escribirModelo(lente);
    escribirDetalle(lente);
});

$("#btnRandom").click(mostrarPrecargadoRandom);

//$("#btn_load").click(cargar);

$("#btn_save").click(guardarDatos);

$("#btn_download").click(generarPDF);

window.onload = function(){
    cargarOpciones();
    var mycookie = getCookie("css");
    if(mycookie != ""){
        setCSS(mycookie);
    }
}
