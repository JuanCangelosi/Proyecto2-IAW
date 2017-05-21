var seleccion = {es_especial: "NO",
		modelo: "", 
		precio_base: "",
		detalle: "",
        vidrio: {tipo: "", color: "", precio: ""},
		marco: {tipo: "", color: "", precio: ""},
		tamano: {medida: "", ancho_lente:"", ancho_puente:""},
		patilla: {tipo: "", color: "", precio: "", grabado:[]
					},
	}
/*
    Funcion encargada de armar el SVG de los Lentes
    Recibe un JSON con la informacion grafica del lente a armar y en base a eso agrega los atributos al SVG
*/

function armar(lente_grafico){ 
    $("#GlassesSVG").remove();
    $("#display_anteojos").append('<svg version="1.1" id="GlassesSVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 768 384" style="enable-background:new 0 0 768 384;" xml:space="preserve"> </svg> ')
    
    
    var svgNS = "http://www.w3.org/2000/svg";
	
    
	//		grupo de vidrios.
	var g_lenses= document.createElementNS(svgNS,"path");
	g_lenses.setAttributeNS(null,"id","lns");
    g_lenses.setAttributeNS(null,"class",lente_grafico.vidrios.color);
    g_lenses.setAttributeNS(null,"d",lente_grafico.vidrios.forma);


	//		lo agregamos al svg que ya esta creado en el body de html.
	document.getElementById("GlassesSVG").appendChild(g_lenses);

	//		grupo patillas
	var g_temples= document.createElementNS(svgNS,"path");
	g_temples.setAttributeNS(null,"id","temples");
     g_temples.setAttributeNS(null,"class",lente_grafico.patillas.color);
    g_temples.setAttributeNS(null,"d",lente_grafico.patillas.forma);

	document.getElementById("GlassesSVG").appendChild(g_temples);

	//		Creamos path del maco
	var p_front= document.createElementNS(svgNS,"path");
	p_front.setAttributeNS(null,"id","front");
	p_front.setAttributeNS(null,"class",lente_grafico.marco.color);
	p_front.setAttributeNS(null,"d",lente_grafico.marco.forma);

	document.getElementById("GlassesSVG").appendChild(p_front);
}

/*
    Recibe un nombre de lente, un color de vidrio, un color de marco y un color de patilla y prepara la obtencion de los datos para el armado
    del lente y el seteo de atributos correspondientes.
    Si lns front o patilla son nulos se setea el estilo 0 como predeterminado.
*/
function mostrarModelo(lente, lns, front, patilla){
    
    $.getJSON("jspropios/"+lente+"Grafico.json", function(json) {
        
        var lente_grafico=json.lente_grafico;
        
        //window.location.hash = lente +'.'+ lns +'.'+ front +'.'+ patilla;
        
        armar(lente_grafico);
        //habilitarOpciones(lente);
		if(lns)
			chngClscLns(lns);
		else
			chngClscLns('lns_classic_000000');
		if(front)
			chngFront(front);
		else
			chngFront('frnt_classic_000000');
		if(patilla)
			chngPatillas(patilla);
		else
			chngPatillas('tmp_classic_000000');
		
    });
	
}

/* 
    Elije un modelo random con colores random en cada componente.
*/
function mostrarPrecargadoRandom(){

    //$.getJSON("jspropios/caracteristicas.json", function(json) {
        var randomModelo = Math.floor((Math.random() * json.modelo.length));
        
        var randomTipoLente = Math.floor(Math.random()*json.vidrio.length);
        var randomColorLente = Math.floor((Math.random() * json.vidrio[randomTipoLente].colores.length));
        
        var randomTipoMarco = Math.floor(Math.random()*json.marco.length);
        var randomColorMarco = Math.floor((Math.random() * json.marco[randomTipoMarco].colores.length));
        
        var randomTipoPatillas = Math.floor(Math.random()*json.patillas.length);
        var randomColorPatilla = Math.floor((Math.random() * json.patillas[randomTipoPatillas].colores.length));
        
        
        var modeloSeleccionado= json.modelo[randomModelo];
        mostrarModelo(modeloSeleccionado.modelo,
                      'lns_'+json.vidrio[randomTipoLente].tipo+'_'+json.vidrio[randomTipoLente].colores[randomColorLente],
                      'frnt_'+json.marco[randomTipoMarco].tipo+'_'+json.marco[randomTipoMarco].colores[randomColorMarco], 
                      'tmp_'+json.patillas[randomTipoPatillas].tipo+'_'+json.patillas[randomTipoPatillas].colores[randomColorPatilla]);
		escribirModelo(modeloSeleccionado.modelo);
		escribirDetalle(modeloSeleccionado.modelo);
    //}
    //          );
    
}
/*
    Escribe en el documento HTML el nombre del lente
*/

function escribirModelo(lente){
    var direccion = window.location.hash;
    var partes = direccion.split('.');
    window.location.hash = lente + '.'+partes[1]+'.'+partes[2]+'.'+partes[3];
    $("#display_nombreElegido").remove();
    var lenteParseado= lente.replace("_", " ");
    $("#display_nombre").append('<span id="display_nombreElegido">'+lenteParseado+'</span>');
    seleccion.modelo = lente;
}

/*
    Agrega al detalle del documento HTML la informacion del lente seleccionado
*/
function escribirDetalle(lenteSeleccionado) {
     //$.getJSON("jspropios/caracteristicas.json", function(json) {
        var i = 0,
            termine = false,
            modelos = json.modelo;
         while((i<modelos.length) && (!termine)){
             termine = (modelos[i].modelo === lenteSeleccionado);
             if(!termine){
                 i++;
             }
         }
         if(termine){
			 $("#texto_detalle").remove();
			 $("#detalle_lente").append('<span id="texto_detalle">'+modelos[i].detalle+'</span>');
             seleccion.detalle = modelos[i].detalle;
         }
    // }
    //           );
}

/*
    Guarda en localStorage un json con la informacion del lente seleccionado
    TODO
*/

function guardarDatos() {
    if(seleccion.modelo != ""){
        setPrecio(json);
        localStorage.setItem("guardar",JSON.stringify(seleccion));
    }
}

function cargarDatos() {
    var datos = JSON.parse(localStorage.getItem("guardar"));
    if(datos){
        recuperarDatos(datos);
    }
}

function generarPDF() {
    if(seleccion.modelo!= "") {
        setPrecio(json);
       // create a document and pipe to a blob
        var doc = new PDFDocument();
        var stream = doc.pipe(blobStream());

        // draw some text
        var imagedata = "data:image/png;base64,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";
        doc.image(imagedata, 100, 100);
        doc.fontSize(25)
           .text('Modelo:'+seleccion.modelo, 100, 80);
        doc.fontSize(7)
           .text('Detalle:'+seleccion.detalle, 100, 120);
        doc.fontSize(15)
           .text('Precio Total: $'+(seleccion.precio_base+seleccion.vidrio.precio+seleccion.marco.precio+seleccion.patilla.precio), 100, 160);
        doc.fontSize(15)
           .text('Tipo de Vidrio: '+seleccion.vidrio.tipo, 100, 180);
        doc.fontSize(15)
           .text('Tipo de Marco: '+seleccion.marco.tipo, 100, 200);
        doc.fontSize(15)
           .text('Tipo de Patilla: '+seleccion.patilla.tipo, 100, 220);

        // an SVG path
        doc.scale(0.5,0.5)
           .translate(300, 500)
           .path($('#front').attr('d'))
           .fill("#"+seleccion.marco.color, 'even-odd')
           .path($('#temples').attr('d'))
            .fill("#"+seleccion.patilla.color, 'even-odd')
           .path($('#lns').attr('d'))
            .opacity(0.8)
           .fill("#"+seleccion.vidrio.color, 'even-odd')
           .clip()
           .restore();
    
        doc.end();
        var saveData = (function () {
            var a = document.createElement("a");
            document.body.appendChild(a);
            a.style = "display: none";
            return function (blob, fileName) {
                var url = window.URL.createObjectURL(blob);
                a.href = url;
                a.download = fileName;
                a.click();
                window.URL.revokeObjectURL(url);
            };
        }());
    
        stream.on('finish', function() {

        var blob = stream.toBlob('application/pdf');
        saveData(blob, 'caniexCertificate.pdf');

            // iframe.src = stream.toBlobURL('application/pdf');
        });
        
        }
}


function setPrecio(json){
    
    var i = 0,
        termine=false,
        lenteSeleccionado= seleccion.modelo;
    
    while( i< json.modelo.length && !termine){
        termine= (json.modelo[i].modelo == lenteSeleccionado);
        if(termine){
            seleccion.precio_base =json.modelo[i].precio_base;
        }
        else{
            i++;
        }
    }
    
    i=0;
    termine=false;
    var tipoLenteSeleccionado= seleccion.vidrio.tipo;
    
    while( i< json.vidrio.length && !termine){
        termine= (json.vidrio[i].tipo == tipoLenteSeleccionado);
        if(termine){
            seleccion.vidrio.precio=json.vidrio[i].precio;
        }
        else{
            i++;
        }
    }
    
    i=0;
    termine=false;
    var tipoMarcoSeleccionado= seleccion.marco.tipo;
    
    while( i< json.marco.length && !termine){
        termine= (json.marco[i].tipo == tipoMarcoSeleccionado);
        if(termine){
            seleccion.marco.precio=json.marco[i].precio;
        }
        else{
            i++;
        }
    }
    
     i=0;
    termine=false;
    var tipoPatillaSeleccionada= seleccion.patilla.tipo;
    
    while( i< json.patillas.length && !termine){
        termine= (json.patillas[i].tipo == tipoPatillaSeleccionada);
        if(termine){
            seleccion.patilla.precio=json.patillas[i].precio;
        }
        else{
            i++;
        }
    }
    
}
/*
    Carga las opciones almacenadas en el json Caracteristicas al documento HTML
*/
function cargarOpciones(){
    
    //accedo a al json que posee los elemento a cargar en el html
   
     //$.getJSON("jspropios/caracteristicas.json", function(json) {
         //si logre entrar
         
         //cargo los modelos de lentes
         var i=0;
         var len=0;
         var modelos=json.modelo;
         for (i=0, len=modelos.length; i<len ; i++){
             cargarModelo(modelos[i]);
         }
         
         //cargo los posibles colores de vidrio
         var vidrios=json.vidrio;
         for (i=0, len=vidrios.length; i<len ; i++){
             cargarVidrio(vidrios[i]);
		}
        
         //cargo los posibles colores de marco
         var marcos=json.marco;
         for (i=0, len=marcos.length; i<len ; i++){
             cargarMarco(marcos[i]);
         }
         
         //cargo los posibles colores de patilla
        var patillas=json.patillas;
         for (i=0, len=patillas.length; i<len ; i++){
             cargarPatillas(patillas[i]);
         }
         
         //cargo los posibles tamaños
          var tamano=json.tamano;
         for (i=0, len=tamano.length; i<len ; i++){
             cargarTamano(tamano[i]);
         }
    //});
        
}

/*  
    Carga los modelos al documento HTML
*/
function cargarModelo(modelo){
    var htmlACargar='<img src="images/muestra_modelos/min'+modelo.modelo+'.jpg" alt="Imagen de muestra de anteojos '+modelo.modelo+'" id="'+modelo.modelo+'" class="btnmodelo">';
    $("#mostrarModelo").append(htmlACargar);    
}

/*  
    Carga los vidrios al documento HTML
*/
function cargarVidrio(vidrio){
    $("#mostrarLentes").append("<p> "+vidrio.tipo+" </p>");
    var colores=vidrio.colores;
    var estilo=vidrio.tipo;
    var coloresAcargar="<p>";
	var sheet = getShtEstilo();
    for(i=0, len=colores.length; i<len; i++){
		var str= "&#39;lns_"+estilo+"_"+colores[i]+"&#39;";	// por las cmillas del onclick
        coloresAcargar+=' <button class="btn btn-sm" id=btnClr onclick="chngClscLns('+str+')" style="background-color:#'+colores[i]+';"></button>';
		sheet.insertRule('.lns_'+estilo+'_'+colores[i]+' { fill: #'+colores[i]+'; opacity: 0.8; }', sheet.cssRules.length);
    }
    coloresAcargar=coloresAcargar+"</p>"
     $("#mostrarLentes").append(coloresAcargar);
}

/*  
    Carga los marcos al documento HTML
*/
function cargarMarco(marco){
    $("#mostrarMarcos").append("<p> "+marco.tipo+" </p>");
    var colores=marco.colores;
    var estilo=marco.tipo;
    var coloresAcargar="<p>";
	var sheet = getShtEstilo();
    for(i=0, len=colores.length; i<len; i++){
		  var str= "&#39;frnt_"+estilo+"_"+colores[i]+"&#39;";	// por las cmillas del onclick
        coloresAcargar+=' <button class="btn btn-sm" id=btnClr onclick="chngFront('+str+')" style="background-color:#'+colores[i]+';"></button>';
		sheet.insertRule('.frnt_'+estilo+'_'+colores[i]+' { fill: #'+colores[i]+'; opacity: 1; }', sheet.cssRules.length);
    }
    coloresAcargar=coloresAcargar+"</p>"
    
     $("#mostrarMarcos").append(coloresAcargar);
}

/*  
    Carga las Patillas al documento HTML
*/

function cargarPatillas(patilla){
    $("#mostrarPatillas").append("<p> "+patilla.tipo+" </p>");
    var colores=patilla.colores;
    var estilo=patilla.tipo;
    var coloresAcargar="<p>";
	var sheet = getShtEstilo();
    for(i=0, len=colores.length; i<len; i++){
        var str= "&#39;tmp_"+estilo+"_"+colores[i]+"&#39;";	// por las cmillas del onclick
        coloresAcargar+=' <button class="btn btn-sm" id=btnClr onclick="chngPatillas('+str+')" style="background-color:#'+colores[i]+';"></button>';
		sheet.insertRule('.tmp_'+estilo+'_'+colores[i]+' { fill: #'+colores[i]+'; opacity: 1; }', sheet.cssRules.length);
    }
    coloresAcargar=coloresAcargar+"</p>"
     $("#mostrarPatillas").append(coloresAcargar);
}

/*  
    Carga los tamaños al documento HTML
*/

function cargarTamano(tamano){
     var tamanosAcargar='<button class="btn btn-sm" id=btnClr>' + tamano.medida+ '</button>';
    $("#mostrarTamano").append(tamanosAcargar);
    
}

/*  
    Cambia el color del lente al seleccionado
*/
function chngClscLns(color){
    var direccion = window.location.hash;
    var partes = direccion.split('.');
    window.location.hash = partes[0]+'.'+ color + '.'+ partes[2]+'.'+partes[3];
	$("#lns").attr('class', color);
    var tipoYColor= color.split("_");
    seleccion.vidrio.tipo = tipoYColor[1];
    seleccion.vidrio.color = tipoYColor[2];
}

/*  
    Cambia el color del marco al seleccionado
*/
function chngFront(color){
    var direccion = window.location.hash;
    var partes = direccion.split('.');
    window.location.hash = partes[0]+'.'+partes[1]+'.'+ color + '.'+ partes[3];
    $("#front").attr('class', color);
    var tipoYColor= color.split("_");
    seleccion.marco.tipo = tipoYColor[1];
    seleccion.marco.color = tipoYColor[2];
    console.log(seleccion);
}

/*  
    Cambia el color de las patillas al seleccionado 
*/
function chngPatillas(color){
    var direccion = window.location.hash;
    var partes = direccion.split('.');
    window.location.hash = partes[0]+'.'+partes[1]+'.'+ partes[2]+'.' + color ;
    $("#temples").attr('class', color);
    var tipoYColor= color.split("_");
    seleccion.patilla.tipo = tipoYColor[1];
    seleccion.patilla.color = tipoYColor[2];
}

/*  
    Devuelve la hoja de estilos del CSSEstilo, donde estan los estilos de los lentesgraficos
*/
function getShtEstilo(){
	return document.getElementById("cssEstilo").sheet;
}

function obtenerPrecargado(id){
    $.ajax({
        url: "/obtenerprecargado",
        data: {id},
        success: function (data) { 
            recuperarDatos(data);
        }
    });
}

function guardarPrecargado(){
    if(seleccion.modelo != ""){
        setPrecio(json);
        $.ajax({
            type: 'POST',
            url: "/guardarprecargado",
            data:  seleccion,
            success: function () {
               //guardarPrecargado(data);
            }
        });
    }
}


function getPrecargados(){
     $('#submenuPrecargados').empty();
     $.get('/precargados',function(precargados){
        $.each(precargados, function(i, pre) {
        //$('#submenuPrecargados').append('<a  tabindex="-1" value="'+pre.id+'">ID: '+pre.id+' | MOD: '+pre.modelo+'</a>');
         $('#submenuPrecargados').append('<li><a value="'+pre.id+'" onclick="obtenerPrecargado('+pre.id+');">ID: '+pre.id+' | MOD: '+pre.modelo+'</a> </li>'); 
        });
    });
}

// Recibe un json como caracteristicas y con esto arma el lente
function recuperarDatos(datos){
    mostrarModelo(datos.modelo,'lns_'+datos.vidrio.tipo+'_'+datos.vidrio.color,
                  'frnt_'+datos.marco.tipo+'_'+datos.marco.color,
                  'tmp_'+datos.patilla.tipo+'_'+datos.patilla.color);
            escribirModelo(datos.modelo);
            escribirDetalle(datos.modelo);
}

function guardarDatosReg() {
    if(seleccion.modelo != ""){
        setPrecio(json);
         $.ajax({
        type: 'POST',
        url: "/guardarLente",
        data:  seleccion,
        success: function () {
        }
    });
    }
}

function getGuardados(){
     $('#submenuGuardados').empty();
     $.get('/guardados',function(guardados){
        $.each(guardados, function(i, pre) {
        //$('#submenuPrecargados').append('<a  tabindex="-1" value="'+pre.id+'">ID: '+pre.id+' | MOD: '+pre.modelo+'</a>');
         $('#submenuGuardados').append('<li><a value="'+pre.id+'" onclick="obtenerGuardado('+pre.id+');">ID: '+pre.id+' | MOD: '+pre.modelo+'</a> </li>'); 
        });
    });
}

function obtenerGuardado(id) {
    $.ajax({
        url: "/obtenerGuardado",
        data: {id},
        success: function (data) { 
            recuperarDatos(data);
        }
    });
}