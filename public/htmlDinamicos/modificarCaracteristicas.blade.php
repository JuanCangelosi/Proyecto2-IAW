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

                    <label for="precio_modelo" class="col-2 col-form-label form-texto-2">Precio</label>
                    <div class="col-10">
                        <input class="form-control" type="number" name="precio_modelo" id="precio_modelo">
                    </div>

                    <label class="form-texto-2" for="descripcionModelo">Descripcion del modelo</label>
                    <textarea class="form-control" id="descripcionModelo" name="descripcionModelo" rows="3"></textarea>
                </div>
            <button type="submit" name="button" value="update" class="btn btn-primary">Modificar</button>  <button type="submit" name="button" value="eliminar" class="btn btn-primary btn_color3">Eliminar</button>
              </form>
              
          </div>


            <!-- Menu de seleccion de vidrios (lentes)-->
          <h3 data-toggle="collapse" href="#collapseLentes" aria-expanded="false" aria-controls="collapseLentes"><span class="caret-right" id="tab"></span>Modificar Vidrios</h3>
          <div class="collapse collapse-color container-fluid" id="collapseLentes">
            <form action="adminpanel/upvidrio" method="post" id="form-upVidrio">
                <div class="form-group">
                    <label for="example-text-input" class="col-2 col-form-label form-texto-2">Tipo de vidrio (solo se cambiaran lo cambios a los campos que rellene)</label>
                    <div class="col-10">
                         <select name="nombre_modelo" class="form-control" id="sel_svid">
                        </select>
                    </div>

                    <label for="example-text-input" class="col-2 col-form-label form-texto-2">Agregar color HEXA</label>
                    <div class="col-10">
                            <input class="form-control" type="text" id="ColorVidrio" value="FFFFFF" name="ColorVidrio">
                    </div>
                    <label for="example-text-input" class="col-2 col-form-label form-texto-2">Eliminar color Hexa</label>
                    <div class="col-10">
                            <input class="form-control" type="text" id="ColorVidrio" value="tendria que haber una lista de los colores que se tienen :(" name="ColorVidrio">
                    </div>
                    
                </div>
             <button type="submit" name="button" value="addColor" class="btn btn-primary">Agregar Color</button>  
            <button type="submit" name="button" value="eliminarColor" class="btn btn-primary btn_color3">Eliminar Color</button>
            <button type="submit" name="button" value="eliminarTipo" class="btn btn-primary btn_color3">Eliminar Tipo</button>
              </form>
          </div>

            <!-- Menu de seleccion de marcos -->
          <h3 data-toggle="collapse" href="#collapseMarcos" aria-expanded="false" aria-controls="collapseMarcos"><span class="caret-right" id="tab"></span>Modificar Marcos</h3>
          <div class="collapse container-fluid" id="collapseMarcos">
            <p id="mostrarMarcos">

            </p>
          </div>

            <!-- Menu de seleccion de patillas-->
          <h3 data-toggle="collapse" href="#collapsePatillas" aria-expanded="false" aria-controls="collapsePatillas"><span class="caret-right" id="tab"></span>Modificar Patillas</h3>
          <div class="collapse container-fluid" id="collapsePatillas">
             <p id="mostrarPatillas">

            </p>
          </div>

            <!-- Menu de seleccion de tamaños-->
          <h3 data-toggle="collapse" href="#collapseTamanos" aria-expanded="false" aria-controls="collapseTamanos"><span class="caret-right" id="tab"></span>Modificar Tamaño</h3>
          <div class="collapse" id="collapseTamanos">
             <p id="mostrarTamano">

            </p>

          </div>
    </div>
</div>