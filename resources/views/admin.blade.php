@extends ('layouts.master')

@section('bodyTitle')
    Personaliza tus anteojos online!
@endsection

@section ('bodyContent')
    <div class="container-fluid panel-formulario" style="font-family: Arial">
    <script>log(<?  =>) </script>
        <!--     @foreach ($lentes as $lente)

            <li>{{  $lente->lente_id  }}</li>
            <li>{{  $lente->modelo }}</li>
            <li>{{  $lente->vidrio  }}</li>
            <li>{{  $lente->patilla  }}</li>
            <li>{{  $lente->marco  }}</li>
            <br>
        @endforeach -->
    </div>

@endsection