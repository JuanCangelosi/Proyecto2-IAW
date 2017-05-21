$("#btnAgregarCar").click(mostrarAgregarCaracteristicas);

$("#btnModificarCar").click(mostrarModificarCaracteristicas);

$("#btnModificarPrecarg").click(mostrarModificarPrecargados);

$("#togleModelo").click(getModelos);
$('form').submit(function(e){ e.preventDefault();
                             alert( "Handler for .submit() called." ); });

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
    getMarcos();
    getTamanos();
    getPatillas();
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
        $("#sel_svid").val('0');
    });   
}

function getMarcos(){
    $.get('/marcos',function(vidrios){
        $.each(vidrios, function(i, vid) {
        $('#sel_smar').append('<option value="'+vid.tipo+'">'+vid.tipo+'</option>');
        });
        $("#sel_smar").val('0');
    });      
}


function getPatillas(){
    $.get('/patillas',function(patillas){
        $.each(patillas, function(i, pat) {
        $('#sel_spat').append('<option value="'+pat.tipo+'">'+pat.tipo+'</option>');
        $("#sel_spat").val('0');
        });
    });  
    
}

function getTamanos(){
    $.get('/tamanos',function(tamanos){
        $.each(tamanos, function(i, tam) {
        $('#sel_stam').append('<option value="'+tam.medida+'">'+tam.medida+'</option>');
        $("#sel_spat").val('0');
        });
    });
}

function getPrecargados(){
     $.get('/precargados',function(precargados){
        $.each(precargados, function(i, pre) {
        $('#sel_dprec').append('<option value="'+pre.id+'">ID: '+pre.id+' | MOD: '+pre.modelo+' | CREADO: '+pre.created_at+' | MODIFICADO: '+pre.updated_at+'</option>');
        $("#sel_spat").val('0');
        });
    });
}

function cambiarCaracteristicasPrecargado(){
    var selected= $('#sel_dprec').val();
    $.get('/precargados/caracteristicas',{modelo: selected}, function(precargado){
        console.log(precargado);
         $('#nombre_modeloModif').attr('value', precargado.modelo);
         $('#precio_modelo').attr('value', precargado.precio_base);
         $('#descripcionModelo').val(precargado.detalle);
         $('#caracteristicasVidrio').val(precargado.vidrio);
         $('#caracteristicasMarco').val(precargado.marco);
         $('#caracteristicasPatilla').val(precargado.patilla);
         $('#caracteristicasTamano').val(precargado.tamano);
        
    });
}

function cambiarColoresVidrios(){
    var selected= $('#sel_svid').val();
    $.get('/vidrios/colores/',{nombre_tipo: selected}, function(colores){ 
        $('#ColorVidrio').attr('value', armarColoresString(colores));
    });
}

function cambiarColoresMarcos(){
    var selected= $('#sel_smar').val();
    $.get('/marcos/colores/',{nombre_tipo: selected}, function(colores){
        $('#ColorMarco').attr('value', armarColoresString(colores));
    });
}

function cambiarColoresPatillas(){
    var selected= $('#sel_spat').val();
    $.get('/patillas/colores/',{nombre_tipo: selected}, function(colores){
        $('#ColorPatilla').attr('value', armarColoresString(colores));
    });
}

function armarColoresString(colores){
    var str="";
    for (var i=0; i< colores.length; i++) {
        if(i+1!=colores.length)
            str+=colores[i]+",";
        else
            str+=colores[i];
    }
    return str;
}

function confUpdate(id){
        $.confirm({
        title: 'Confirmar acción de modificar',
        buttons: {
            Confirmar: {
                btnClass: 'btn-green',
                action: function () {
                    $('<input />').attr('type', 'hidden')
                        .attr('name', "button")
                        .attr('value', "update")
                        .appendTo('#'+id);
                    $('#'+id).submit();
                }
            },
            Cancelar: {
                action: function () {
                }
            }
        }
    });
}

function confDelete(id){
        $.confirm({
        title: 'Confirmar acción de eliminar',
        buttons: {
            Confirmar: {
                btnClass: 'btn-red',
                action: function () {
                    $('<input />').attr('type', 'hidden')
                        .attr('name', "button")
                        .attr('value', "eliminar")
                        .appendTo('#'+id);
                    $('#'+id).submit();
                }
            },
            Cancelar: {
                action: function () {
                }
            }
        }
    });
}
