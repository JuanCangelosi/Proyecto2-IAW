 <div class="col-3 col-md-12 accordion-panelEditor"><div class="col-md-12" id="accordion" >

                    <!-- Menu de seleccion de modelos-->
                     <h3 data-toggle="collapse" href="#collapseModelo" aria-expanded="false" aria-controls="collapseModelo" onclick="getModelos()"><span class="caret-right" id="tab"></span>Agregar Modelo</h3>

                      <div class="collapse container-fluid" id="collapseModelo">
                        <form action="adminpanel/addmodelo" method="post" id="form-addModelo">
                            <div class="form-group">
                                <label for="example-text-input" class="col-2 col-form-label form-texto-2">Nombre del Modelo</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="Original_Wayfarer" name="nombre_modelo" id="nombre_modelo">
                                </div>

                                <label for="precio_modelo" class="col-2 col-form-label form-texto-2">Precio</label>
                                <div class="col-10">
                                    <input class="form-control" type="number" value="100" name="precio_modelo" id="precio_modelo">
                                </div>

                                <label class="form-texto-2" for="descripcionModelo">Descripcion del modelo</label>
                                <textarea class="form-control" id="descripcionModelo" name="descripcionModelo" rows="3"></textarea>
                            </div>
                        <button type="submit" class="btn btn-primary btn_color1">Crear</button>
                          </form>
                  </div>

                    <!-- Menu de seleccion de vidrios (lentes)-->
                  <h3 data-toggle="collapse" href="#collapseLentes" aria-expanded="false" aria-controls="collapseLentes"><span class="caret-right" id="tab"></span>Agregar Vidrios</h3>
                  <div class="collapse collapse-color container-fluid" id="collapseLentes">
                   <form action="adminpanel/addvidrio" method="post" id="form-addVidrioo">
                    <p id="mostrarLentes">
                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Tipo</label>
                        <div class="col-10">
                                <input class="form-control" type="text" id="TipoVidrio" value="Classic" name="TipoVidrio">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn_color1" onclick="agregarVidrio();">Crear</button>
                    </p>
                      </form>
                  </div>

                    <!-- Menu de seleccion de marcos -->
                  <h3 data-toggle="collapse" href="#collapseMarcos" aria-expanded="false" aria-controls="collapseMarcos"><span class="caret-right" id="tab"></span>Agregar Marcos</h3>
                  <div class="collapse container-fluid" id="collapseMarcos">
                   <form action="adminpanel/addmarco" method="post" id="form-addMarco">   
                    <p id="mostrarMarcos">                        
                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Tipo</label>
                        <div class="col-10">
                                <input class="form-control" type="text" id="TipoMarco" value="Classic" name="TipoMarco">
                        </div>

                      <br>
                        <button type="submit" class="btn btn-primary btn_color1 " onclick="agregarMarco();">Crear</button>
                    </p>
                      </form>
                  </div>

                    <!-- Menu de seleccion de patillas-->
                  <h3 data-toggle="collapse" href="#collapsePatillas" aria-expanded="false" aria-controls="collapsePatillas"><span class="caret-right" id="tab"></span>Agregar Patillas</h3>
                  <div class="collapse container-fluid" id="collapsePatillas">
                     <form action="adminpanel/addpatilla" method="post" id="form-addPatilla"> 
                     <p id="mostrarPatillas">
                        
                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Tipo</label>
                        <div class="col-10">
                                <input class="form-control" type="text" id="TipoPatilla" value="Classic" name="TipoPatilla">
                        </div>
                      <br>
                        <button type="submit" class="btn btn-primary btn_color1 " onclick="agregarPatilla();">Crear</button>
                     </p>
                    </form>
                  </div>

                    <!-- Menu de seleccion de tamaños-->
                  <h3 data-toggle="collapse" href="#collapseTamanos" aria-expanded="false" aria-controls="collapseTamanos"><span class="caret-right" id="tab"></span>Agregar Tamaño</h3>
                  <div class="collapse" id="collapseTamanos">
                    <form action="adminpanel/addtamanos" method="post" id="form-addTamanos"> 
                     <p id="mostrarTamano">
                         <label for="example-text-input" class="col-2 col-form-label form-texto-2">Nombre tamaño</label>
                        <div class="col-10">
                                <input class="form-control" type="text" id="nombre_tamano" name="nombre_tamano" value="pequeño">
                        </div>

                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Ancho Puente</label>
                        <div class="col-10">
                                <input class="form-control" type="number" id="AnchoPuente" value="100" name="AnchoPuente">
                        </div>
                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Ancho Lente</label>
                        <div class="col-10">
                                <input class="form-control" type="number" id="AnchoLente" value="100" name="AnchoLente">
                        </div>
                      <br>
                        <button type="submit" class="btn btn-primary btn_color1" onclick="agregarTamano();">Crear</button>
                    </p>
                      </form>

                    </div>
            </div>
        </div>