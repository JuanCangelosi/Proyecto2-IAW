@extends ('layouts.master')

@section ('navbar-toggleIzq') 
<meta name="csrf-token" content="{{ csrf_token() }}">
<ul class="navbar-brand">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Opciones <span class="caret"></span>
        </a>

        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
            <li>
                <a class="btn btn-outline-success my-2 my-sm-0" id="btnRandom" onclick="mostrarPrecargadoRandom()">Cargar Random </a>
            </li>
            <li class="dropdown-submenu">
                <a class="test" tabindex="-1" id="menuPrecargados" onclick="getPrecargados()">Precargados<span class="caret"></span></a>
                <ul class="dropdown-menu" id="submenuPrecargados">
                  <li><span tabindex="-1">Modelos precargados</span></li>
                  
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#" onclick="getGuardados()">Guardados<span class="caret"></span></a>
                <ul class="dropdown-menu" id="submenuGuardados">
                  <li><a tabindex="-1" href="#">Modelos guardados</a></li>
                  <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                </ul>
            </li>
            
        </ul>
    </li>
</ul>

@endsection

@section ('navbar-toggleDer') 
 @if (Auth::check())
    @if(Auth::user()->isAdmin())
    <li> <a href="{{ url('/loadprecargado') }}" class="btn btn-outline-success my-2 my-sm-0">Cargar precargado</a></li>
    @endif
@endif
@endsection

@section('bodyTitle')
    Personaliza tus anteojos online!
@endsection

@section ('bodyContent')
        <!--	Comienza panel de , que contien en una columna la tabla de edicion, y en la segunda column la tabla
            de muestreo-->
        <div class="row col-8 container-fluid" id="panel_edicion">

        <!--	Comienza fila de edicion, que contien en una columna la tabla de edicion	-->

            <div class="col-3 col-md-3 " id="table_acc"><br>
            <!--
                <ul class="nav nav-stackable">
                    <li role="presentation" class="active"><a href="#">Modelos</a></li>
                    <li role="presentation">-->

            <!-- Menu de seleccion de objetos, cada h3 es un colapsible que uestra el div inmediatamente debajo -->
            <div class="col-3 col-md-12 "><div class="col-md-12" id="accordion" >

                <!-- Menu de seleccion de modelos-->
              <h3 data-toggle="collapse" href="#collapseModelo" aria-expanded="false" aria-controls="collapseModelo"><span class="caret-right" id="tab"></span>Modelos</h3>

              <div class="collapse container-fluid" id="collapseModelo">
                <p id="mostrarModelo" >

                </p>
              </div>

                <!-- Menu de seleccion de vidrios (lentes)-->
              <h3 data-toggle="collapse" href="#collapseLentes" aria-expanded="false" aria-controls="collapseLentes"><span class="caret-right" id="tab"></span> Lentes </h3>
              <div class="collapse collapse-color container-fluid" id="collapseLentes">
                <p id="mostrarLentes" class="mostarAnteojos">


                </p>
              </div>

                <!-- Menu de seleccion de marcos -->
              <h3 data-toggle="collapse" href="#collapseMarcos" aria-expanded="false" aria-controls="collapseMarcos"><span class="caret-right" id="tab"></span>Marcos</h3>
              <div class="collapse container-fluid" id="collapseMarcos">
                <p id="mostrarMarcos" class="mostarAnteojos">

                </p>
              </div>

                <!-- Menu de seleccion de patillas-->
              <h3 data-toggle="collapse" href="#collapsePatillas" aria-expanded="false" aria-controls="collapsePatillas"><span class="caret-right" id="tab"></span>Patillas</h3>
              <div class="collapse container-fluid" id="collapsePatillas">
                 <p id="mostrarPatillas" class="mostarAnteojos">

                </p>
              </div>

                <!-- Menu de seleccion de tamaños-->
              <h3 data-toggle="collapse" href="#collapseTamanos" aria-expanded="false" aria-controls="collapseTamanos"><span class="caret-right" id="tab"></span>Tamaño</h3>
              <div class="collapse" id="collapseTamanos" class="mostarAnteojos">
                 <p id="mostrarTamano">
                </p>
              </div>
            </div></div>
            </div>

            <!--	termina columna acordeon	-->
            <!--	comienza columna de muestreo	-->

            <div class=" col-9 col-md-9" id="columna2">
                <div class="row">
                    <div class="col-4 col-md-7" id="col_display_nombre">
                        <p id="display_nombre"> Modelo: <span id="display_nombreElegido"></span></p>
                    </div>
                    <div class="col-1 col-md-0 btn btn-info btn-dropdown"><span class="glyphicon glyphicon-info-sign" alt="Detalle de anteojo elegido"aria-hidden="true"></span>
                          <div class="btn-dropdown-content" id="detalle_lente"><span id="texto_detalle">No hay anteojo seleccionado</span></div>
                    </div>
                </div>

                <div class="row col-md-9" id="display_anteojos">
                    <svg version="1.1" id="GlassesSVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 768 384" style="enable-background:new 0 0 768 384;" xml:space="preserve">
                    </svg> 
                </div>

                
                    @if (Auth::check())
                        @if (Auth::user()->isAdmin())
                <div class="row col-md-10">                        
                        <div class="col-md-2 center-btn btn btn-primary btn_color1" id="btn_load">Cargar
                        </div>
                        <div class="col-md-2 center-btn btn btn-primary" id="btn_save">Guardar
                        </div>
                        <div class="col-md-2 center-btn btn btn-primary btn_color3" id="btn_download">Descargar
                        </div>
                        <div class="col-md-3 center-btn btn btn-primary btn_color4 btn-shortspace" id="btn_precargado">Guardar Como Precargado
                        </div>
                        @else
                        <div class="col-md-3 center-btn btn btn-primary" id="btn_saveReg">Guardar
                        </div>
                        <div class="col-md-3 center-btn btn btn-primary btn_color3" id="btn_download">Descargar
                        @endif
                    @else
                <div class="row col-md-9">
                        <div class="col-md-3 center-btn btn btn-primary btn_color1" id="btn_load">Cargar
                        </div>
                        <div class="col-md-3 center-btn btn btn-primary" id="btn_save">Guardar
                        </div>
                        <div class="col-md-3 center-btn btn btn-primary btn_color3" id="btn_download">Descargar
                        </div>
                    @endif
                </div>	
            </div>
            <!--	termina columna de muestreo	-->
            <span id="tab"></span>
      </div>
@endsection


@section('jsPropios')

            <!--Javascripts propios-->
    <script src="jspropios/controller.js"></script>
    <script src="jspropios/listeners.js"></script>
    <script src="jspropios/com.js"></script>
            <!--JS a PDF -->
    <script src="js/pdfkit.js"></script>
    <script src="js/blob-stream.js"></script>


@endsection