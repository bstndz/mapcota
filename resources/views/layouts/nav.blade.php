<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/app1.css') }}" rel="stylesheet">
<link href="{{ asset('css/app2.css') }}" rel="stylesheet">
<script src="https://kit.fontawesome.com/b9ba0dcf28.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/app1.js') }}" defer></script>
<body>

<!-- BARRA DE NAVEGACIÓN -->

  <nav class="navegacion">
    <div class="lugar_logo"><a href="/index"><img class="logo" src="{{asset('img/logos/LOGO COLOR BLANCO.png')}}"></a></div>
    <a class="botones_a">
      <span class="barra"></span>
      <span class="barra"></span>
      <span class="barra"></span>
    </a>
    <div class="navegacion-links">
      <ul>
        <li><a href="/index">INICIO</a></li>
        <li><a href="/servicios">SERVICIOS</a></li>
        <li><a href="/blog">BLOG</a></li>
        <li onclick="document.getElementById('modal_acceder').style.display='block'"><a style="cursor: pointer;"><i class="fas fa-user-circle"></i> ACCEDER</a></li>
      </ul>
    </div>
  </nav>

<!-- ----------------------- -->

<!-- MODAL DEL ACCEDER -->

<!-- <li onclick="document.getElementById('modal_acceder').style.display='block'"><a style="cursor: pointer;"><i class="fas fa-user-circle"></i> ACCEDER</a></li> -->

<div id="modal_acceder" class="modal">
  
  <form class="modal-content animate" action="{{ route('login') }}" method="post">
    <div class="imagen_modal">
      <span onclick="document.getElementById('modal_acceder').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="{{asset('img/imagenes/LOGO LOGIN.png')}}" alt="Avatar" class="avatar">
    </div>

    <div class="contenedor_login">

        <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electrónico">

        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="password" id="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
        
        <button type="submit">INGRESAR</button>

        <label for="remember"><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recordar contraseña') }}</label>

    </div>

    <div class="contenedor_login">
      <span class="contraseña_perdida"><a href="{{ route('password.request') }}">¿Contraseña Perdida?</a></span>
      <span class="registrarse"><a href="/eleccion">Registrarse</a></span>
    </div>
  </form>
</div>

<!-- ----------------------- -->

<!-- CONTENIDO INDEX -->

<div style="background-color:white" class="contenedor">

  <main>
    @yield('content')
  </main>

  <main>
    @yield('contenido')
  </main>

  <main>
    @yield('formulario_mapcota')
  </main>

  <main>
    @yield('formulario_servicio')
  </main>

  <main>
    @yield('servicios')
  </main>

  <main>
    @yield('blog')
  </main>

  <main>
    @yield('preguntas')
  </main>

  <main>
    @yield('cobertura')
  </main>

  <main>
    @yield('legal')
  </main>

  <main>
    @yield('eleccion')
  </main>

  <main>
    @yield('cuenta_mapcota')
  </main>

  <main>
    @yield('cuenta_servicio')
  </main>

  <main>
    @yield('cuenta_admin')
  </main>
  
</div>
      </body>
      </html>
      