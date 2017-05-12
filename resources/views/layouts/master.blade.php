<!DOCTYPE html>
<html lang="en">
    <head>
        
    @include('layouts.head')
    </head>
    
    
    <body>
    
    @include ('layouts.navbar')
        
    <div class="container-fluid" id="hdr_container">
            <h3 id="h_title">@yield ('bodyTitle')</h3>
    </div>    
    
    @yield ('bodyContent')
    
    @include ('layouts.footer')
        
        
    
    </body>
    
    @include('layouts.js')

    @yield('jsPropios')
    
</html>