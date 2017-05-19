@extends ('layouts.master')

@section('bodyTitle')
    Panel administrador Caniex
@endsection

@section ('bodyContent')

<div class="container-fluid panel-formulario" >
    <div class="container-fluid col-md-offset-3">
           <div id="table_acc">
                <button type="submit" class="btn btn-primary btn_color1" id="btnAgregarCar">Agregar Característica</button>
                <button type="submit" class="btn btn-primary btn_color3" id="btnModificarCar">Modificar Característica</button>
                <button type="submit" class="btn btn-primary btn_color4" id="btnModificarPrecarg">Modificar Precargados</button>
            </div>
     </div>

    <br>
    <div class="row col-md-8 col-md-offset-2 panel-fomulario">
        <div class="panel panel-default">
            <div class="panel-heading headTextForm">Administrador</div>
            <div id="panelmostraropciones">
                    <div class="col-3 col-md-12 accordion-panelEditor"><div class="col-md-12" id="accordion" >

                    <!-- Menu de seleccion de modelos-->
                     <h3 data-toggle="collapse" href="#collapseModelo" aria-expanded="false" aria-controls="collapseModelo"><span class="caret-right" id="tab"></span>Agregar Modelo</h3>

                      <div class="collapse container-fluid" id="collapseModelo">
                        <form action="/addmodelo" method="post">
                            
                            <div class="form-group">
                                 
                                <label for="example-text-input" class="col-2 col-form-label form-texto-2">Nombre del Modelo</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="Original_Wayfarer" name="precio_modelo" id="nombre_modelo">
                                </div>

                                <label for="precio_modelo" class="col-2 col-form-label form-texto-2">Precio</label>
                                <div class="col-10">
                                    <input class="form-control" type="number" value="100" name="precio_modelo" id="precio_modelo">
                                </div>

                                <label class="form-texto-2" for="descripcionModelo">Descripcion del modelo</label>
                                <textarea class="form-control" id="descripcionModelo" name="descripcionModelo" rows="3"></textarea>

                            </div>
                        <button type="submit" class="btn btn-primary btn_color1" onclick="agregarModelo();">Cargar</button>
                          </form>
     </div></div></div>
            </div>
</div>
</div>
</div>
@endsection

@section('jsPropios')

            <!--Javascripts propios-->
    <script src="jspropios/adminpage.js"></script>


@endsection