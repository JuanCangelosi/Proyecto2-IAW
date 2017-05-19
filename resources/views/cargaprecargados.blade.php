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
    @if(Session::has('message'))
        <div class="alert alert-info">
            {{ Session::get('message') }}
        </div>
    @endif
        <div class="panel panel-default">
            <div class="panel-heading headTextForm">Administrador</div>
            <div id="panelmostraropciones">
                   
            </div>
</div>
</div>
</div>
@endsection

@section('jsPropios')

            <!--Javascripts propios-->
    <script src="jspropios/adminpage.js"></script>


@endsection