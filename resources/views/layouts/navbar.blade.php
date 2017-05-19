      <nav class="navbar navbar-default navbar-static-top" id="navbar">
          <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <a class="navbar-brand" href="{{ url('/') }}"><img class="img-responsive" src="images/Caniexlogo.png" id="logo" alt="logotipo Caniex"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              @yield ('navbar-toggleIzq') 

              <ul class="nav navbar-nav navbar-right">
                <button class="btn btn-outline-success my-2 my-sm-0" id="tema">Cambiar Tema</button>
              </ul>
                @if (Route::has('login'))
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle adminName" data-toggle="dropdown" role="button" aria-expanded="false">
                                  
                               @if(Auth::user()->isAdmin())
                                  <span class="adminName">                                         
                               @else
                                  <span class="userName">      
                              @endif
                                      {{ Auth::user()->name }}</span></span><span class="caret"></span>
                             </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @yield ('navbar-toggleDer') 

                                    
                                </ul>
                            </li>
                        @else
                            <a href="{{ url('/login') }}" class="btn btn-outline-success my-2 my-sm-0">Login</a>
                            <a href="{{ url('/register') }}" class="btn btn-outline-success my-2 my-sm-0">Register</a>
                        @endif
                    </ul>
                @endif
                
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
      </nav>