<div class="col-3 col-md-12 accordion-panelEditor">
     <div class="col-md-12" id="accordion" >

            <!-- Menu de seleccion de modelos-->
        <h3 data-toggle="collapse" href="#collapseModelo" aria-expanded="false" aria-controls="collapseModelo"><span class="caret-right" id="tab"></span>Modificar Modelo</h3>

          <div class="collapse container-fluid" id="collapseModelo">
            <form action="adminpanel/delprecargado" method="post" id="form-delPrecargado">
                <div class="form-group">
                    <label for="example-text-input" class="col-2 col-form-label form-texto-2">Nombre del Precargado</label>
                    <div class="col-10">
                         <select name="id_modelo" class="form-control" id="sel_dprec">
                        </select>
                    </div>
                   </div>      
                <div>  
                    <button type="submit" name="button" value="eliminar" class="btn btn-primary btn_color3">Eliminar</button>
                </div>  
           
            </form>
              
          </div>         
    </div>
</div>