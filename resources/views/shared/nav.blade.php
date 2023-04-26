<div class="overlay-navigation">
    <nav role="navigation">
      <ul>
        @guest
        <li><a href="{{ route('view-home') }}" data-content="Bienvenido">Inicio</a></li>
        <li><a href="{{ route('view-auth') }}" data-content="Nuevo usuario">Registrar</a></li>
        <li><a href="#" data-content="Como fue creado">Creacion</a></li>
        @endguest
        @auth
        <li><a href="{{ route('view-manager') }}" data-content="Tabla total">Registro General</a></li>
        <li><a href="{{ route('view-manager-create') }}" data-content="Ganancia o perdida">Agregar</a></li>
        <li><a href="{{ route('auth-signout') }}" data-content="Vuelve pronto">Cerrar Sesion</a></li>
        @endauth
      </ul>
    </nav>
  </div>
  <section class="home">
    <div class="open-overlay">
      <span class="bar-top"></span>
      <span class="bar-middle"></span>
      <span class="bar-bottom"></span>
    </div>
  </section>