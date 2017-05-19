$("#btnAgregarCar").click(mostrarAgregarCaracteristicas);

$("#btnModificarCar").click(mostrarModificarCaracteristicas);

$("#btnModificarPrecarg").click(mostrarModificarPrecargados);

function mostrarAgregarCaracteristicas(){
    $("#panelmostraropciones").load("htmlDinamicos/agregarCaracteristicas.blade.php");    
}

function mostrarModificarCaracteristicas(){
    $("#panelmostraropciones").load("htmlDinamicos/modificarCaracteristicas.html");
}

function mostrarModificarPrecargados(){
    $("#panelmostraropciones").load("htmlDinamicos/modificarPrecargados.html");
}

function agregarModelo(){
    var nombreModelo = $("#nombre_modelo").val();
    var precioModelo = $("#precio_modelo").val();
    var descripcionModelo = $("#descripcionModelo").val();
    
    console.log(nombreModelo);
    console.log(precioModelo);
    console.log(descripcionModelo);
}

function agregarVidrio(){
    var nombreVidrio = $("#TipoVidrio").val();
    var colorVidrio = $("#ColorVidrio").val();
    
    console.log(nombreVidrio);
    console.log(colorVidrio);
}

function agregarMarco(){
     var nombreMarco = $("#TipoMarco").val();
    var colorMarco = $("#ColorMarco").val();
    
    console.log(nombreMarco);
    console.log(colorMarco);
}

function agregarPatilla(){
     var nombrePatilla = $("#TipoPatilla").val();
    var colorPatilla = $("#ColorPatilla").val();
    
    console.log(nombrePatilla);
    console.log(colorPatilla);
}

function agregarTamano(){
    var tamano = $("#nombre_tamano").val();
    var anchopuente = $("#AnchoPuente").val();
    var ancholente = $("#AnchoLente").val();
    
    console.log(tamano);
    console.log(anchopuente);
    console.log(ancholente);
}


function getModelos(){
    
}

function getVidrios(){
    
}

function getMarcos(){
    
}

function getPatillas(){
    
}

function getTamanos(){
    
}

function getPrecargados(){
    
}