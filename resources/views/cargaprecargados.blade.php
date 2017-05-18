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
                        <div class="form-group">
                            <label for="example-text-input" class="col-2 col-form-label form-texto-2">Nombre del Modelo</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="Original_Wayfarer" id="nombre_modelo">
                            </div>

                            <label for="precio_modelo" class="col-2 col-form-label form-texto-2">Precio</label>
                            <div class="col-10">
                                <input class="form-control" type="number" value="100" id="precio_modelo">
                            </div>

                            <label class="form-texto-2" for="descripcionModelo">Descripcion del modelo</label>
                            <textarea class="form-control" id="descripcionModelo" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn_color1">Cargar</button>

                  </div>

                    <!-- Menu de seleccion de vidrios (lentes)-->
                  <h3 data-toggle="collapse" href="#collapseLentes" aria-expanded="false" aria-controls="collapseLentes"><span class="caret-right" id="tab"></span>Agregar Vidrios</h3>
                  <div class="collapse collapse-color container-fluid" id="collapseLentes">
                    <p id="mostrarLentes">
                        <div class="checkbox">
                            <label class="form-texto-2"><input type="checkbox" value="">Tipo Nuevo?</label>
                        </div>
                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Tipo</label>
                        <div class="col-10">
                                <input class="form-control" type="text" value="Original_Wayfarer" id="nombre_modelo">
                        </div>

                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Color HEXA</label>
                        <div class="col-10">
                                <input class="form-control" type="text" value="Original_Wayfarer" id="nombre_modelo">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn_color1">Cargar</button>
                    </p>
                  </div>

                    <!-- Menu de seleccion de marcos -->
                  <h3 data-toggle="collapse" href="#collapseMarcos" aria-expanded="false" aria-controls="collapseMarcos"><span class="caret-right" id="tab"></span>Agregar Marcos</h3>
                  <div class="collapse container-fluid" id="collapseMarcos">
                    <p id="mostrarMarcos">
                        <div class="checkbox">
                            <label class="form-texto-2"><input type="checkbox" value="">Tipo Nuevo?</label>
                        </div>
                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Tipo</label>
                        <div class="col-10">
                                <input class="form-control" type="text" value="Original_Wayfarer" id="nombre_modelo">
                        </div>

                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Color HEXA</label>
                        <div class="col-10">
                                <input class="form-control" type="text" value="Original_Wayfarer" id="nombre_modelo">
                        </div>
                      <br>
                        <button type="submit" class="btn btn-primary btn_color1 ">Cargar</button>
                    </p>
                  </div>

                    <!-- Menu de seleccion de patillas-->
                  <h3 data-toggle="collapse" href="#collapsePatillas" aria-expanded="false" aria-controls="collapsePatillas"><span class="caret-right" id="tab"></span>Agregar Patillas</h3>
                  <div class="collapse container-fluid" id="collapsePatillas">
                     <p id="mostrarPatillas">
                        <div class="checkbox">
                            <label class="form-texto-2"><input type="checkbox" value="">Tipo Nuevo?</label>
                        </div>
                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Tipo</label>
                        <div class="col-10">
                                <input class="form-control" type="text" value="Original_Wayfarer" id="nombre_modelo">
                        </div>
                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Color HEXA</label>
                        <div class="col-10">
                                <input class="form-control" type="text" value="Original_Wayfarer" id="nombre_modelo">
                        </div>
                      <br>
                        <button type="submit" class="btn btn-primary btn_color1 ">Cargar</button>
                    </p>
                  </div>

                    <!-- Menu de seleccion de tamaños-->
                  <h3 data-toggle="collapse" href="#collapseTamanos" aria-expanded="false" aria-controls="collapseTamanos"><span class="caret-right" id="tab"></span>Agregar Tamaño</h3>
                  <div class="collapse" id="collapseTamanos">
                     <p id="mostrarTamano">
                         <label for="example-text-input" class="col-2 col-form-label form-texto-2">Nombre tamano</label>
                        <div class="col-10">
                                <input class="form-control" type="text" value="Original_Wayfarer" id="nombre_modelo">
                        </div>

                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Ancho Puente</label>
                        <div class="col-10">
                                <input class="form-control" type="text" value="Original_Wayfarer" id="nombre_modelo">
                        </div>
                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Ancho Lente</label>
                        <div class="col-10">
                                <input class="form-control" type="text" value="Original_Wayfarer" id="nombre_modelo">
                        </div>
                      <br>
                        <button type="submit" class="btn btn-primary btn_color1">Cargar</button>
                    </p>

                    </div>
            </div>
        </div>
            </div>
</div>
</div>
</div>
@endsection

@section('jsPropios')

            <!--Javascripts propios-->
    <script src="jspropios/adminpage.js"></script>


@endsection