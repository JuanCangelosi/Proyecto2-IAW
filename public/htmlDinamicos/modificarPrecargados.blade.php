<div class="col-3 col-md-12 accordion-panelEditor">
     <div class="col-md-12" id="accordion" >

            <!-- Menu de seleccion de eliminar Precargado-->
        <h3 data-toggle="collapse" href="#collapseModelo" aria-expanded="false" aria-controls="collapseModelo"><span class="caret-right" id="tab"></span>Eliminar Precargado</h3>

          <div class="collapse container-fluid" id="collapseModelo">
            <form action="adminpanel/upprecargado" method="post" id="form-delPrecargado">
                <div class="form-group">
                    <label for="example-text-input" class="col-2 col-form-label form-texto-2">Nombre del Precargado</label>
                    <div class="col-10">
                         <select name="id_modelo" class="form-control" id="sel_dprec" onchange="cambiarCaracteristicasPrecargado()">
                        </select>
                    </div>
                    
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
                    <div class="col-10">
                    <textarea class="form-control" id="descripcionModelo" name="descripcionModelo" rows="3"></textarea>
                    </div>
                
                
                    <label class="form-texto-2" for="caracteristicasVidrio">Vidrio</label>
                       <div class="col-10">
                        <textarea class="form-control" id="caracteristicasVidrio" name="caracteristicasVidrio" rows="3"></textarea>
                     </div>

                    <label class="form-texto-2" for="caracteristicasMarco">Marco</label>
                       <div class="col-10">
                        <textarea class="form-control" id="caracteristicasMarco" name="caracteristicasMarco" rows="3"></textarea>
                     </div>

                    <label class="form-texto-2" for="caracteristicasPatilla">Patilla</label>
                       <div class="col-10">
                        <textarea class="form-control" id="caracteristicasPatilla" name="caracteristicasPatilla" rows="3"></textarea>
                     </div>

                    <label class="form-texto-2" for="caracteristicasTamano">Tamaño</label>
                       <div class="col-10">
                        <textarea class="form-control" id="caracteristicasTamano" name="caracteristicasTamano" rows="3"></textarea>
                     </div>
                    <br>
                
                    <div>  
                        
                    <button type="submit" name="button" value="update" class="btn btn-primary">Modificar</button>  
                    <button type="submit" name="button" value="eliminar" class="btn btn-primary btn_color3">Eliminar</button>
                </div>  
           
            </form>
              
          </div>
         
         
         
    </div>
</div>