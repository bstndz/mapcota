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
    <input type="password" id="contraseña" name="password" placeholder="Ingresa tu contraseña" required>
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