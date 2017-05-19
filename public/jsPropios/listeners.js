
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

//window.onload = function(){
function inicializar(){
    cargarOpciones();
    var hash = window.location.hash;
    if(hash.substring(0,1) == '#'){
        hash = hash.substring(1,hash.length);
        var partes = hash.split('.');
        console.log("aca se arma el lente con estos datos: "+ partes);
        mostrarModelo(partes[0],partes[1],partes[2],partes[3]);
        escribirModelo(partes[0]);
        escribirDetalle(partes[0]);
    }
}

$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});