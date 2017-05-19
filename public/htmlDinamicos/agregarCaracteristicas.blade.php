 <div class="col-3 col-md-12 accordion-panelEditor"><div class="col-md-12" id="accordion" >

                    <!-- Menu de seleccion de modelos-->
                     <h3 data-toggle="collapse" href="#collapseModelo" aria-expanded="false" aria-controls="collapseModelo"><span class="caret-right" id="tab"></span>Agregar Modelo</h3>

                      <div class="collapse container-fluid" id="collapseModelo">
                        <form action="/addmodelo" method="post" id="form-addModelo">
                            <meta name="_token" content="{{ csrf_token() }}">
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
                                <input class="form-control" type="text" id="TipoVidrio">
                        </div>

                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Color HEXA</label>
                        <div class="col-10">
                                <input class="form-control" type="text" id="ColorVidrio">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn_color1" onclick="agregarVidrio();">Cargar</button>
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
                                <input class="form-control" type="text" id="TipoMarco">
                        </div>

                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Color HEXA</label>
                        <div class="col-10">
                                <input class="form-control" type="text" id="ColorMarco">
                        </div>
                      <br>
                        <button type="submit" class="btn btn-primary btn_color1 " onclick="agregarMarco();">Cargar</button>
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
                                <input class="form-control" type="text" id="TipoPatilla">
                        </div>
                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Color HEXA</label>
                        <div class="col-10">
                                <input class="form-control" type="text"  id="ColorPatilla">
                        </div>
                      <br>
                        <button type="submit" class="btn btn-primary btn_color1 " onclick="agregarPatilla();">Cargar</button>
                    </p>
                  </div>

                    <!-- Menu de seleccion de tamaños-->
                  <h3 data-toggle="collapse" href="#collapseTamanos" aria-expanded="false" aria-controls="collapseTamanos"><span class="caret-right" id="tab"></span>Agregar Tamaño</h3>
                  <div class="collapse" id="collapseTamanos">
                     <p id="mostrarTamano">
                         <label for="example-text-input" class="col-2 col-form-label form-texto-2">Nombre tamano</label>
                        <div class="col-10">
                                <input class="form-control" type="text" id="nombre_tamano">
                        </div>

                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Ancho Puente</label>
                        <div class="col-10">
                                <input class="form-control" type="number" id="AnchoPuente">
                        </div>
                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Ancho Lente</label>
                        <div class="col-10">
                                <input class="form-control" type="number" id="AnchoLente">
                        </div>
                      <br>
                        <button type="submit" class="btn btn-primary btn_color1" onclick="agregarTamano();">Cargar</button>
                    </p>

                    </div>
            </div>
        </div>