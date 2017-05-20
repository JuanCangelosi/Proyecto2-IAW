$("#btnAgregarCar").click(mostrarAgregarCaracteristicas);

$("#btnModificarCar").click(mostrarModificarCaracteristicas);

$("#btnModificarPrecarg").click(mostrarModificarPrecargados);

$("#togleModelo").click(getModelos);

function mostrarAgregarCaracteristicas(){
    $("#opcion_panel_admin").remove();
    $("#h_pAdmin").append('<span id="opcion_panel_admin">agregar característica</span>');
    $("#panelmostraropciones").load("htmlDinamicos/agregarCaracteristicas.blade.php");    
}

function mostrarModificarCaracteristicas(){
    $("#opcion_panel_admin").remove();
    $("#h_pAdmin").append('<span id="opcion_panel_admin">modificar característica</span>');
    $("#panelmostraropciones").load("htmlDinamicos/modificarCaracteristicas.blade.php");
    getModelos();
    getVidrios();
    getTamanos();
}

function mostrarModificarPrecargados(){
    $("#opcion_panel_admin").remove();
    $("#h_pAdmin").append('<span id="opcion_panel_admin">modificar precargados</span>');
    $("#panelmostraropciones").load("htmlDinamicos/modificarPrecargados.blade.php");
    getPrecargados();
}

function agregarModelo(){
 /*   var nombreModelo = $("#nombre_modelo").val();
    var precioModelo = $("#precio_modelo").val();
    var descripcionModelo = $("#descripcionModelo").val();
    
    console.log(nombreModelo);
    console.log(precioModelo);
    console.log(descripcionModelo);*/
}

function agregarVidrio(){
  /*  var nombreVidrio = $("#TipoVidrio").val();
    var colorVidrio = $("#ColorVidrio").val();
    
    console.log(nombreVidrio);
    console.log(colorVidrio);*/
}

function agregarMarco(){
  /*   var nombreMarco = $("#TipoMarco").val();
    var colorMarco = $("#ColorMarco").val();
    
    console.log(nombreMarco);
    console.log(colorMarco);
}

function agregarPatilla(){
     var nombrePatilla = $("#TipoPatilla").val();
    var colorPatilla = $("#ColorPatilla").val();
    
    console.log(nombrePatilla);
    console.log(colorPatilla);*/
}

function agregarTamano(){
  /*  var tamano = $("#nombre_tamano").val();
    var anchopuente = $("#AnchoPuente").val();
    var ancholente = $("#AnchoLente").val();
    
    console.log(tamano);
    console.log(anchopuente);
    console.log(ancholente);*/
}

function getModelos(){
    $.get('/modelos',function(modelos){
        $.each(modelos, function(i, mod) {
        $('#sel_smod').append('<option value="'+mod.modelo+'">'+mod.modelo+'</option>');
        });
    });
}

function getVidrios(){
    $.get('/vidrios',function(vidrios){
        $.each(vidrios, function(i, vid) {
        $('#sel_svid').append('<option value="'+vid.tipo+'">'+vid.tipo+'</option>');
        });
        console.log(vidrios[0]);
         $('#ColorVidrio').val(vidrios[0].color);
    });   
}


function getPatillas(){
    $.get('/patillas',function(patillas){
        $.each(patillas, function(i, pat) {
        $('#sel_spat').append('<option value="'+pat.tipo+'">'+pat.tipo+'</option>');
        });
    });  
}

function getTamanos(){
    $.get('/tamanos',function(tamanos){
        $.each(tamanos, function(i, tam) {
        $('#sel_stam').append('<option value="'+tam.medida+'">'+tam.medida+'</option>');
        });
    });
}

function getPrecargados(){
     $.get('/precargados',function(precargados){
        $.each(precargados, function(i, pre) {
        $('#sel_dprec').append('<option value="'+pre.id+'">ID: '+pre.id+' | MOD: '+pre.modelo+' | CREADO: '+pre.created_at+'</option>');
        });
    });
}