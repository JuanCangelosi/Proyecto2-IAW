 <div class="col-3 col-md-12 accordion-panelEditor">
     <div class="col-md-12" id="accordion" >

            <!-- Menu de seleccion de modelos-->
        <h3 data-toggle="collapse" href="#collapseModelo" aria-expanded="false" aria-controls="collapseModelo"><span class="caret-right" id="tab"></span>Modificar Modelo</h3>

          <div class="collapse container-fluid" id="collapseModelo">
            <form action="adminpanel/upmodelo" method="post" id="form-upModelo">
                <div class="form-group">
                    <label for="example-text-input" class="col-2 col-form-label form-texto-2">Nombre del Modelo (solo se cambiaran lo cambios a los campos que rellene)</label>
                    <div class="col-10">
                         <select name="nombre_modelo" class="form-control" id="sel_smod">
                        </select>
                    </div>
                    
                    <label for="nombre_modeloModif" class="col-2 col-form-label form-texto-2">Nombre nuevo</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="nombre_modeloModif" id="nombre_modeloModif">
                    </div>

                    <label for="precio_modelo" class="col-2 col-form-label form-texto-2">Precio</label>
                    <div class="col-10">
                        <input class="form-control" type="number" name="precio_modelo" id="precio_modelo">
                    </div>

                    <label class="form-texto-2" for="descripcionModelo">Descripcion del modelo</label>
                    <textarea class="form-control" id="descripcionModelo" name="descripcionModelo" rows="3"></textarea>
                </div>
                <div>  
                    <button type="submit" name="button" value="update" class="btn btn-primary">Modificar</button>  <button type="submit" name="button" value="eliminar" class="btn btn-primary btn_color3">Eliminar</button>
                </div>  
            </form>
              
          </div>


            <!-- Menu de seleccion de vidrios (lentes)-->
          <h3 data-toggle="collapse" href="#collapseLentes" aria-expanded="false" aria-controls="collapseLentes"><span class="caret-right" id="tab"></span>Modificar Vidrios</h3>
          <div class="collapse collapse-color container-fluid" id="collapseLentes">
            <form action="adminpanel/upvidrio" method="post" id="form-upVidrio">
                <div class="form-group">
                    <label for="example-text-input" class="col-2 col-form-label form-texto-2">Selccionar tipo de vidrio (solo se cambiaran lo cambios a los campos que rellene)</label>
                    <div class="col-10">
                         <select name="nombre_tipo" class="form-control" id="sel_svid" onchange="cambiarColoresVidrios()">
                        </select>
                    </div>
                    <label for="nombre_modeloModif" class="col-2 col-form-label form-texto-2">Nombre nuevo</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="nombre_modeloModif" id="nombre_modeloModif">
                    </div>
                    
                    <label for="example-text-input" class="col-2 col-form-label form-texto-2">Agregar quitar color HEXA: completar o eliminar texto de lo que se quiere respetando formato 'color1,color2,'</label>
                    <div class="col-10">
                            <input class="form-control" type="text" id="ColorVidrio" name="ColorVidrio" value="Nada seleccionado">
                    </div>
                    
                </div>
                <div>
                    <button type="submit" name="button" value="update" class="btn btn-primary">Modificar</button>  
                    <button type="submit" name="button" value="eliminar" class="btn btn-primary btn_color3">Eliminar Tipo</button>
                </div>
              </form>
          </div>

            <!-- Menu de seleccion de marcos -->
          <h3 data-toggle="collapse" href="#collapseMarcos" aria-expanded="false" aria-controls="collapseMarcos"><span class="caret-right" id="tab"></span>Modificar Marcos</h3>
          <div class="collapse container-fluid" id="collapseMarcos">
               <form action="adminpanel/upmarco" method="post" id="form-upMarco">
                <div class="form-group">
                    <label for="example-text-input" class="col-2 col-form-label form-texto-2">Seleccionar tipo de marco (solo se cambiaran lo cambios a los campos que rellene)</label>
                    <div class="col-10">
                         <select name="nombre_tipo" class="form-control" id="sel_smar" onchange="cambiarColoresMarcos()">
                        </select>
                    </div>
                    <label for="nombre_modeloModif" class="col-2 col-form-label form-texto-2">Nombre nuevo</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="nombre_modeloModif" id="nombre_modeloModif">
                    </div>
                    
                    <label for="example-text-input" class="col-2 col-form-label form-texto-2">Agregar quitar color HEXA: completar o eliminar texto de lo que se quiere respetando formato 'color1,color2,'</label>
                    <div class="col-10">
                            <input class="form-control" type="text" id="ColorMarco" name="ColorMarco" value="Nada seleccionado">
                    </div>
                    
                </div>
                <div>
                    <button type="submit" name="button" value="update" class="btn btn-primary">Modificar</button>  
                    <button type="submit" name="button" value="eliminar" class="btn btn-primary btn_color3">Eliminar Tipo</button>
                </div>
              </form>
          </div>

            <!-- Menu de seleccion de patillas-->
          <h3 data-toggle="collapse" href="#collapsePatillas" aria-expanded="false" aria-controls="collapsePatillas"><span class="caret-right" id="tab"></span>Modificar Patillas</h3>
          <div class="collapse container-fluid" id="collapsePatillas">
              <form action="adminpanel/uppatilla" method="post" id="form-upPatilla">
                <div class="form-group">
                    <label for="example-text-input" class="col-2 col-form-label form-texto-2">Seleccionar tipo de patilla (solo se cambiaran lo cambios a los campos que rellene)</label>
                    <div class="col-10">
                         <select name="nombre_tipo" class="form-control" id="sel_spat" onchange="cambiarColoresPatillas()">
                        </select>
                    </div>
                    <label for="nombre_modeloModif" class="col-2 col-form-label form-texto-2">Nombre nuevo</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="nombre_modeloModif" id="nombre_modeloModif">
                    </div>
                    
                    <label for="example-text-input" class="col-2 col-form-label form-texto-2">Agregar quitar color HEXA: completar o eliminar texto de lo que se quiere respetando formato 'color1,color2,'</label>
                    <div class="col-10">
                            <input class="form-control" type="text" id="ColorPatilla" name="ColorPatilla" value="Nada seleccionado">
                    </div>
                    
                </div>
                <div>
                    <button type="submit" name="button" value="update" class="btn btn-primary">Modificar</button>  
                    <button type="submit" name="button" value="eliminar" class="btn btn-primary btn_color3">Eliminar Tipo</button>
                </div>
              </form>
          </div>

            <!-- Menu de seleccion de tamaños-->
          <h3 data-toggle="collapse" href="#collapseTamanos" aria-expanded="false" aria-controls="collapseTamanos"><span class="caret-right" id="tab"></span>Modificar Tamaño</h3>
          <div class="collapse" id="collapseTamanos">
            <form action="adminpanel/uptamano" method="post" id="form-upMedida">
                <div class="form-group">
                    <label for="example-text-input" class="col-2 col-form-label form-texto-2">Nombre de Medida (solo se cambiaran lo cambios a los campos que rellene)</label>
                    <div class="col-10">
                         <select name="nombre_medida" class="form-control" id="sel_stam">
                        </select>
                    </div>
                        
                        <label for="nombre_medidaModif" class="col-2 col-form-label form-texto-2">Nombre nuevo de medida</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="nombre_medidaModif" id="nombre_medidaModif">
                        </div>

                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Ancho Puente</label>
                        <div class="col-10">
                                <input class="form-control" type="number" id="AnchoPuente" name="AnchoPuente">
                        </div>
                        <label for="example-text-input" class="col-2 col-form-label form-texto-2">Ancho Lente</label>
                        <div class="col-10">
                                <input class="form-control" type="number" id="AnchoLente" name="AnchoLente">
                        </div>
                </div>
                <div>
                    <button type="submit" name="button" value="update" class="btn btn-primary">Modificar</button>  <button type="submit" name="button" value="eliminar" class="btn btn-primary btn_color3">Eliminar</button>
                </div>
            </form>
        </div>
         
    </div>
</div>