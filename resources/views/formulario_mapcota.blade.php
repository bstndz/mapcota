@extends('layouts.nav')

@section('formulario_mapcota')

<!-- TÍTULO DE LA PÁGINA -->

<title>Formulario mapcota</title>

<!-- ----------------------- -->

<!-- CONTENEDOR FORMULARIO DE MAPCOTA -->

<div class="contenedor_mapcota">
    <h1 class="texto_foto_mapcota">¡QUIERO SER MAPCOTA!</h1>
    <form class="formulario_mapcota" action="/">
    	<h1 class="titulo_mapcota">REGISTRAME</h1>
    <div class="contenedor_formulario_mapcota">
    	<label class="texto_titulo">Nombre</label>
    </div>
    <div class="contenedor_formulario_mapcota">
      <div class="texto_mapcota">
        <input type="text" id="nombre" name="nombre" placeholder="Ej: Juanito" required>
      </div>
    </div>
    <div class="contenedor_formulario_mapcota">
      <label class="texto_titulo">Apellido Paterno</label>
    </div>
    <div class="contenedor_formulario_mapcota">
      <div class="texto_mapcota">
        <input type="text" id="apellido" name="apellido" placeholder="Ej: Gómez" required>
      </div>
    </div>
    <div class="contenedor_formulario_mapcota">
      <label class="texto_titulo">Apellido Materno</label>
    </div>
    <div class="contenedor_formulario_mapcota">
      <div class="texto_mapcota">
        <input type="text" id="apellido2" name="apellido2" placeholder="Ej: Gonzales" required>
      </div>
    </div>
    <div class="contenedor_formulario_mapcota">
      <label class="texto_titulo">Rut</label>
    </div>
    <div class="contenedor_formulario_mapcota">
      <div class="texto_mapcota">
        <input type="text" id="rut" name="rut" placeholder="Ej: 1234567-8" required>
      </div>
    </div>
    <div class="contenedor_formulario_mapcota">
      <label class="texto_titulo">Fecha de Nacimiento</label>
    </div>
    <div class="contenedor_formulario_mapcota">
      <div class="texto_mapcota">
        <input type="date" id="nacimiento" name="nacimiento" placeholder="Ej: 09/10/1999" required>
      </div>
    </div>
    <div class="contenedor_formulario_mapcota">
    	<label class="texto_titulo">Correo Electrónico</label>
    </div>
    <div class="contenedor_formulario_mapcota">
      <div class="texto_mapcota">
        <input type="text" id="email" name="email" placeholder="Ej: correo@outlook.com" required>
      </div>
    </div>
    <div class="contenedor_formulario_mapcota">
    	<label class="texto_titulo">Número de Teléfono a 10 Dígitos</label>
    </div>
    <div class="contenedor_formulario_mapcota">
      <div class="texto_mapcota">
        <input type="text" id="telefono" name="telefono" placeholder="Ej: 5612345678" required>
      </div>
    </div>
    <div class="contenedor_formulario_mapcota">
      <label class="texto_titulo">Especialidad</label>
    </div>
    <div class="contenedor_formulario_mapcota">
      <div class="texto_mapcota">
        <input type="text" id="especialidad" name="especialidad" placeholder="Ej: Paseo, Cuidador, Peluquería, Alojamiento, etc" required>
      </div>
    </div>
    <div class="contenedor_formulario_mapcota">
    	<label class="texto_titulo">Ubicación</label>
    </div>
    <div class="contenedor_formulario_mapcota">
      <div class="texto_mapcota">
        <input type="text" id="ubicacion" name="ubicacion" placeholder="Ej: Calle #123" required>
      </div>
    </div>
    <div class="contenedor_formulario_mapcota">
    	<label class="texto_titulo">Foto de Perfíl</label>
    </div>
    <div class="contenedor_formulario_mapcota">
      <div class="texto_mapcota">
        <input type="file" id="foto" name="foto" required>
      </div>
    </div>
    <div class="contenedor_formulario_mapcota">
    	<label class="texto_titulo">Link de Vídeo</label>
    </div>
    <div class="contenedor_formulario_mapcota">
      <div class="texto_mapcota">
        <input type="text" id="video" name="video" placeholder="Ej: www.youtube.com/D5#TVJ3" required>
      </div>
    </div>
    <div class="contenedor_formulario_mapcota">
    	<label class="texto_titulo">Descripción - Cuéntanos de ti</label>
    </div>
    <div class="contenedor_formulario_contacto">
      <div class="texto_contacto">
        <textarea id="descripcion" name="descripcion" placeholder="Ej: Me gustan los animales porque..." style="height:200px" required></textarea>
      </div>
    </div>
    <div class="contenedor_formulario_mapcota">
    	<label class="texto_titulo">Título</label>
    </div>
    <div class="contenedor_formulario_mapcota">
      <div class="texto_mapcota">
        <input type="text" id="titulo" name="titulo" placeholder="Ej: Cuidar animales, más que un sentimiento, una pasión." required>
      </div>
    </div>
    <div class="contenedor_formulario_mapcota">
      <label class="texto_titulo">Contraseña</label>
    </div>
    <div class="contenedor_formulario_servicio">
      <div class="texto_servicio">
        <input type="password" id="contraseña" name="contraseña" placeholder="Ingresa tu contraseña" required>
      </div>
    </div>
    <div class="contenedor_formulario_mapcota">
      <label class="texto_titulo">Repetir Contraseña</label>
    </div>
    <div class="contenedor_formulario_servicio">
      <div class="texto_servicio">
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Repite tu contraseña" required oninput="check(this)">
        <script language='javascript' type='text/javascript'>
        function check(input) {
        if (input.value != document.getElementById('contraseña').value) {
          input.setCustomValidity('Las contraseñas no coinciden.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
          }
        }
        </script>
      </div>
    </div>
    <div class="contenedor_formulario_servicio">
    <label>Acepto los términos y condiciones
         <input type="checkbox" required>
    </label>
    </div>
    <div class="contenedor_formulario_mapcota">
      <input style="background-color: #0885b3;" id="submit_general" type="submit" value="Enviar">
    </div>
  </form>

  <div class="contenedor_volver">
    <form action="/index">
      <button style="background-color: red;" id="submit_general" class="boton_inicio"><i class="fas fa-home"></i> Volver a la página principal</button>
    </form>
  </div>

</div>

<!-- ----------------------------- -->

<!-- MODAL SUCCESS -->

<!--

<button style="display:block; margin-left:auto; margin-right: auto;" onclick="document.getElementById('modal_servicio').style.display='block'">APRETAR</button>

-->

<div id="modal_mapcota" class="modal_mapcota_clase">
  
  <div class="modal-contenido-servicio animate" action="/action_page.php" method="post">
    <div class="modal_imagen_servicio">
      <h3 style="color: gray;">FORMULARIO COMPLETADO</h3>
      <img src="{{asset('img/imagenes/success.png')}}" style="display: block; margin-left: auto; margin-right: auto;" alt="Avatar_servicio" class="avatar_servicio">
      <button class="btn_volver"><a href="/index" class="a_volver">VOLVER AL INICIO</a></button>
    </div>

  </div>
</div>

<!-- ----------------------- -->

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