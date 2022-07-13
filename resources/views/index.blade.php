@extends('layouts.nav')

@section('contenido')

<!-- TÍTULO DE LA PÁGINA -->

<title>Página principal</title>

<!-- ----------------------- -->

<!-- COLOR FONDO -->

<div class="color_fondo">

<!-- ----------------------- -->

<!-- CONTENEDOR FOTO PRINCIPAL -->

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="contenedor_foto">
    <img class="foto" src="{{asset('img/imagenes/perro.jpeg')}}">
    <h1 class="texto_foto_grande">BIENVENIDOS A MAPCOTA</h1>
    <h1 class="texto_foto_pequeño">BIENVENIDOS</h1>
</div>

<!-- ----------------------- -->

<!-- CONTENEDOR "REGÍSTRATE" PANTALLA GRANDE -->

<form class="contenedor_registro_grande">
    <h1 id="registrate">¡¡REGÍSTRATE!!</h1>
    <div class="radio-toolbar">
      <label class="contenido">QUIERO SER UN MAPCOTA
          <input type="radio" onclick="window.location='{{ route('mapcotas.create') }}'" autocomplete="off">
          <span class="checkmark"></span>
      </label>
      <label class="contenido">QUIERO EL SERVICIO
          <input type="radio" onclick="window.location='{{ route('clientes.create') }}'" autocomplete="off">
          <span class="checkmark"></span>
      </label>
  </div>
</form>

<!-- ----------------------- -->

<!-- CONTENEDOR "REGÍSTRATE" PANTALLA PEQUEÑA -->

<form class="contenedor_registro_pequeño">
    <h1 id="registrate">¡¡REGÍSTRATE!!</h1>
    <div class="radio-toolbar">
      <label class="contenido">QUIERO SER UN MAPCOTA
          <input type="radio" onclick="window.location='{{ route('mapcotas.create') }}'" autocomplete="off">
          <span class="checkmark"></span>
      </label>
      <label class="contenido">QUIERO EL SERVICIO
          <input type="radio" onclick="window.location='{{ route('clientes.create') }}'" autocomplete="off">
          <span class="checkmark"></span>
      </label>
  </div>
</form>


<!-- ----------------------- -->

<!-- CONTENEDOR QUIENES SOMOS -->

<div id="quienes_somos" class="contenedor_quienes_somos">
    <h1 class="titulo">¿QUIÉNES SOMOS?</h1>
    <div class="columna2">
        <p>
        Si los perros tienen fans… Esos somos nosotros,
        y no porque nos creamos los mejores, sino
        porque nuestros clientes, amigos y peludos así
        nos lo han dicho. Trabajar en MAPCOTA
        significa estar rodeado de perros 24/7 y, ¡eso
        nos encanta!
        </p>
    </div>
    <div class="columna2">
    <img src="{{asset('img/imagenes/03.jpg')}}">
    </div>
</div>

<!-- ----------------------- -->

<!-- CONTENEDOR 3 IMÁGENES -->

<div class="contenedor_de_imagenes">
    <h1 class="titulo">¿QUÉ ES MAPCOTA?</h1>
    <div class="carousel-dentro">
        <input class="carousel-abierto" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
        <div class="carousel-columna">
            <img src="{{asset('img/iconos quienes somos/02.png')}}">
        </div>
        <input class="carousel-abierto" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-columna">
            <img src="{{asset('img/iconos quienes somos/01.png')}}">
        </div>
        <input class="carousel-abierto" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-columna">
            <img src="{{asset('img/iconos quienes somos/03.png')}}">
        </div>
        <label for="carousel-3" class="carousel-control prev control-1">‹</label>
        <label for="carousel-2" class="carousel-control next control-1">›</label>
        <label for="carousel-1" class="carousel-control prev control-2">‹</label>
        <label for="carousel-3" class="carousel-control next control-2">›</label>
        <label for="carousel-2" class="carousel-control prev control-3">‹</label>
        <label for="carousel-1" class="carousel-control next control-3">›</label>
        <ol class="carousel-indicadores">
            <li>
                <label for="carousel-1" class="carousel-punto">•</label>
            </li>
            <li>
                <label for="carousel-2" class="carousel-punto">•</label>
            </li>
            <li>
                <label for="carousel-3" class="carousel-punto">•</label>
            </li>
        </ol>
    </div>
</div>

<!--

<div class="contenedor_imagenes">
    <div class="columna1">
    <img src="{{asset('img/iconos quienes somos/02.png')}}">
    </div>
    <div class="columna1">
    <img src="{{asset('img/iconos quienes somos/01.png')}}">
    </div>
    <div class="columna1">
    <img src="{{asset('img/iconos quienes somos/03.png')}}">
    </div>
</div>

-->

<!-- ----------------------- -->

<!-- CONTENEDOR SERVICIOS GRANDE -->

<div class="contenedor_servicios_grande">
    <h1 class="titulo">SERVICIOS</h1>
        <div class="columna3">
            <img src="{{asset('img/iconos servicios/01.png')}}">
            <br>
            <label>PASEOS</label>
            <br>
            <img src="{{asset('img/iconos servicios/02.png')}}">
            <br>
            <label>BAÑOS Y PELUQUERÍA</label>
        </div>

        <div class="columna3">
            <img id="foto_centro" src="{{asset('img/imagenes/04.jpg')}}">
        </div>

        <div class="columna3">
            <img src="{{asset('img/iconos servicios/03.png')}}">
            <br>
            <label>ALOJAMIENTO</label>
            <br>
            <img src="{{asset('img/iconos servicios/04.png')}}">
            <br>
            <label>TRASLADO</label>
        </div>
        <form action="/servicios">
    <button type="submit" class="boton1">IR A SERVICIOS</button>
        </form>
</div>

<!-- ----------------------- -->

<!-- CONTENEDOR SERVICIOS PEQUEÑO -->

<div class="contenedor_servicios_pequeño">
    <h1 class="titulo">SERVICIOS</h1>
        <div class="columna4">
            <img src="{{asset('img/iconos servicios/01.png')}}">
            <br>
            <label>PASEOS</label>
            <br>
            <img src="{{asset('img/iconos servicios/02.png')}}">
            <br>
            <label>BAÑOS Y PELUQUERÍA</label>
        </div>

        <div class="columna4">
            <img src="{{asset('img/iconos servicios/03.png')}}">
            <br>
            <label>ALOJAMIENTO</label>
            <br>
            <img src="{{asset('img/iconos servicios/04.png')}}">
            <br>
            <label>TRASLADO</label>
        </div>
</div>

<!-- ----------------------- -->

<!-- CONTENEDOR FOTO TRABAJOS -->

<div class="contenedor_foto">
    <img class="foto" src="{{asset('img/imagenes/02.png')}}">
    <h1 class="texto_foto_grande">TRABAJOS EN ACCIÓN</h1>
    <h1 class="texto_foto_pequeño">TRABAJOS</h1>
</div>

<!-- ----------------------- -->

<!-- CONTENEDOR TESTIMONIOS -->

    <div class="contenedor_testimonios">
        <h1 class="titulo">TESTIMONIOS</h1>
        <div class="wrap">

            <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
            <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>

            <ul class="dots" id="testim-dots">
                <li class="dot active"></li>
                <li class="dot"></li>
                <li class="dot"></li>
                <li class="dot"></li>
                <li class="dot"></li>
            </ul>

            <div class="cont" id="testim-content">

                <div class="active">
                    <div class="imagen_icono"><img src="{{asset('img/testimonios/ICONO MUJER.png')}}"></div>
                    <h2>NANCY CLIENTE MAPCOTA</h2>
                    <p>"Absolutamente recomendable, muy responsable, gran amante de los animales, maravillosa su relación
                       con ellos... Mi experiencia fue fenomenal."</p>
                </div>
                
                <div>
                    <div class="imagen_icono"><img src="{{asset('img/testimonios/ICONO HOMBRE.png')}}"></div>
                    <h2>USUARIO DE EJEMPLO</h2>
                    <p>Absolutamente recomendable, muy responsable, gran amante de los animales, maravillosa su relación
                       con ellos... Mi experiencia fue fenomenal.</p>
                </div>
                
                <div>
                    <div class="imagen_icono"><img src="{{asset('img/testimonios/ICONO MUJER.png')}}"></div>
                    <h2>USUARIO DE EJEMPLO</h2>
                    <p>Absolutamente recomendable, muy responsable, gran amante de los animales, maravillosa su relación
                       con ellos... Mi experiencia fue fenomenal.</p>
                </div>
                
                <div>
                    <div class="imagen_icono"><img src="{{asset('img/testimonios/ICONO HOMBRE.png')}}"></div>
                    <h2>USUARIO DE EJEMPLO</h2>
                    <p>Absolutamente recomendable, muy responsable, gran amante de los animales, maravillosa su relación
                       con ellos... Mi experiencia fue fenomenal.</p>
                </div>
                
                <div>
                    <div class="imagen_icono"><img src="{{asset('img/testimonios/ICONO MUJER.png')}}"></div>
                    <h2>USUARIO DE EJEMPLO</h2>
                    <p>Absolutamente recomendable, muy responsable, gran amante de los animales, maravillosa su relación
                       con ellos... Mi experiencia fue fenomenal.</p>
                </div>
            </div>

        </div>
    </div>

<!-- ----------------------- -->


<!-- CONTENEDOR FUNCIÓN -->

<div class="contenedor_imagenes">
    <h1 class="titulo">CÓMO FUNCIONA MAPCOTA</h1>
    <div class="columna1">
    <img src="{{asset('img/iconos como funciona/01.png')}}">
    </div>
    <div class="columna1">
    <img src="{{asset('img/iconos como funciona/02.png')}}">
    </div>
    <div class="columna1">
    <img src="{{asset('img/iconos como funciona/03.png')}}">
    </div>
</div>

<!-- ----------------------- -->

<!-- CONTENEDOR FORMULARIO DE CONTACTO -->

<div class="contenedor_contacto">
    <h1 class="texto_foto_contacto">CONTACTO</h1>
    <form class="formulario_contacto" action="/" onsubmit="document.getElementById('modal_servicio').style.display='block'; return false">
    <div class="contenedor_formulario_contacto">
      <div class="texto_contacto">
        <input type="text" id="fname" name="Nombre" placeholder="Nombre Completo" required>
      </div>
    </div>
    <div class="contenedor_formulario_contacto">
      <div class="texto_contacto">
        <input type="text" id="fname" name="Asunto" placeholder="Asunto" required>
      </div>
    </div>
    <div class="contenedor_formulario_contacto">
      <div class="texto_contacto">
        <input type="text" id="fname" name="Correo" placeholder="Correo Electrónico" required>
      </div>
    </div>
    <div class="contenedor_formulario_contacto">
      <div class="texto_contacto">
        <input type="text" id="fname" name="Celular" placeholder="Celular" required>
      </div>
    </div>
    <div class="contenedor_formulario_contacto">
      <div class="texto_contacto">
        <input type="text" id="fname" name="Ciudad" placeholder="Ciudad" required>
      </div>
    </div>
    <div class="contenedor_formulario_contacto">
      <div class="texto_contacto">
        <textarea id="subject" name="Mensaje" placeholder="Mensaje" style="height:200px" required></textarea>
      </div>
    </div>
    <div class="contenedor_formulario_contacto">
      <input id="submit_general" type="submit" value="Enviar">
    </div>
  </form>
</div>

<!-- ----------------------- -->

<!-- MODAL SUCCESS -->

<!--

<button style="display:block; margin-left:auto; margin-right: auto;" onclick="document.getElementById('modal_servicio').style.display='block'">APRETAR</button>

-->

<div id="modal_servicio" class="modal_contacto_clase">
  
  <div class="modal-contenido-servicio animate" action="/action_page.php" method="post">
    <div class="modal_imagen_servicio">
      <h3 style="color: gray;">FORMULARIO COMPLETADO</h3>
      <img src="{{asset('img/imagenes/success.png')}}" style="display: block; margin-left: auto; margin-right: auto;" alt="Avatar_servicio" class="avatar_servicio">
      <button class="btn_volver"><a href="/index" class="a_volver">VOLVER AL INICIO</a></button>
    </div>

  </div>
</div>

<!-- ----------------------- -->

</div>

<!-- FOOTER -->

<footer>
<div class="contenedor_footer">
    <div class="contenedor_col">
      <div class="columna_footer">
        <h2 id="titulocolumna">NOSOTROS</h2>
        <a href="/index#quienes_somos"><p>¿Quiénes somos?</p></a>
        <a href="/formulario_mapcota"><p>Hazte Mapcota</p></a>
        <a href="/preguntas"><p>Preguntas frecuentes</p></a>
        <a href="/cobertura"><p>Cobertura de servicio</p></a>
    </div>

    <div class="columna_footer">
        <h2 id="titulocolumna">CONTÁCTANOS</h2>
        <p><i class="fas fa-envelope"></i> contacto@mapcota.cl</p>
        <p><i class="fab fa-whatsapp"></i> +569 40 87 69 22</p>
        <p><i style="color:white" class="fab fa-twitter"></i> / <i style="color:white" class="fab fa-facebook"></i> / <i style="color:white" class="fab fa-instagram"></i> MAPCOTA</p>
    </div>

    <div class="columna_footer">
        <h2 id="titulocolumna">LEGAL</h2>
        <a href="/legal"><p>Política Mapcota</p></a>
        <a href="/legal"><p>Aviso de privacidad</p></a>
        <a href="/legal"><p>Términos y condiciones</p></a>
    </div>
</div>


<div class="contenedor_logo_footer">
<img id="logofooter" src="{{asset('img/logos/LOGO COLOR BLANCO.png')}}">
</div>

</div>
</footer>

<!-- ----------------------- -->

@endsection

