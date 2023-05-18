<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <button class="navbar-toggler" type="button" data.toggle="collpse"
            data-target="#navbar" aria.controls="navbar" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggle-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Início</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown"
                        aria-expanded="false">Pets</a>
                <div class="dropdown-menu" aria-labelldby="dropdown10">
                <a class="dropdown-item" href="">Cadastrar Pets</a>
                <a class="dropdown-item" href="">Listar Pets Cadastrados</a> 
                <a class="dropdown-item" href="">Pesquisar Pets</a> 
                 </div>
            </li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown"
                         aria-expanded="false">Pets</a>
                <div class="dropdown-menu" aria-labelldby="dropdown10">
                <a class="dropdown-item" href="">Cadastrar Espécies</a>
                <a class="dropdown-item" href="">Listar Espécies</a> 
                <a class="dropdown-item" href="">Pesquisar Espécies</a> 
                 </div>
            </li> 
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupporttedContent">
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{_('Acessar')}} </a>
                                </li>
                            @endif
                            @if  (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{_('Registrar')}} </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown=toggle" href="#" role='buton'
                                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-prev>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown=menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault():
                                                      document.getElementById('logout-form').submit():">
                                        {{_('Logout')}}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf 
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
    </div>
 </nav>


