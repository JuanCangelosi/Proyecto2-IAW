
@extends ('layouts.master')

@section('bodyTitle')
   IAW 2017 DCIC - Universidad Nacional del Sur
@endsection

@section ('bodyContent')
<section id="sreadme">
    <div class="container-fluid panel-formulario cont-about">
        <div>

            <h2 class="hreadme">Comisión 707:</h2>
            <ul>
                <li> Barreix Iñaki 108998  </li>
                    <li> Cangelosi Juan Ignacio 107573.</li>
            </ul>

            <h2 class="hreadme">Entrega Proyecto 2: Personalización de lentes Caniex</h2>

            <h3 class="hreadme">Css usados:</h3>
            <ul>
               <li><a class="aReadme" href="http://fontawesome.io/">Font awesome</a></li>
               <li><a class="aReadme" href="https://startbootstrap.com/template-overviews/agency/"> pagina index agency template</a></li>
               <li><a class="aReadme" href="www.getbootstrap.com">Formato de paginas Bootstrap</a></li>
            </ul>

            <h3 class="hreadme">Javascript usados:</h3>
            <ul>
               <li><a class="aReadme" class="Areadme"href="https://craftpip.github.io/jquery-confirm/">JQuery-confirm</a></li>
               <li>Librerias: JQuery</li>
            </ul>

            <h3 class="hreadme">Javascript usados para la creación de pdf</h3>
            <ul>
               <li><a class="aReadme" href="http://pdfkit.org/">pdfkit</a></li>
               <li>blob-stream.js</li>
            </ul>

            <h3 class="hreadme">Basado en el personalizador de SVG's: <a class="aReadme" href="http://www.ray-ban.com/">RayBan USA</a>
            </h3>

            <h1 class="hreadme">A tener en cuenta</h1>

            <ul>
               <li>La página se testeo en Google Chrome, Mozilla, Edge, no funciona en absoluto con Internet Explorer.</li>
               <li>El almacenamiento mediante serialización no es correcto,pero por falta de tiempo se recurrió a esto y no a relaciones entre los diferentes elementos de la base de datos.
</li>
                <li>Los controles de seguridad solo comprueban que el administrador sea el que hace cambios (donde corresponde), pero si el administrador comete un error al modificar algún componente esto no se controlará, otra vez, no se realizó este control por cuestión de tiempos.</li>
                <li>El código podría ser susceptible a inyeccion sql mediante el json que se guarda en la base de datos, ya que no se comprueba la correctitud de estos campos en los métodos.</li>
                <li>De todo esto estamos conscientes pero no se pudo realizar por falta de tiempo al momento de la entrega.</li>
                <li>Si se crea un nuevo modelo y no se poseen los archivos gráficos correspondientes el modelos lógicamente no se verá.</li>
            
            </ul>

            <h2 class="hreadme">User Administrador:</h2>
            <ul>
                <li> user:admin@istrador.com  </li>
                    <li> pass: admin</li>
            </ul>
        </div>
                @include('layouts.about')
    </div>
</section>
@endsection



