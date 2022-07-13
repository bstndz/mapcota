<div class="contenedor_formulario_mapcota">
  <label class="texto_titulo">Nombre</label>
</div>
<div class="contenedor_formulario_servicio">
  <div class="texto_servicio">
    <input type="text" id="nombre" name="nombre" placeholder="Ej: Juanito" required>
</div>
</div>
<div class="contenedor_formulario_mapcota">
  <label class="texto_titulo">Apellido Paterno</label>
</div>
<div class="contenedor_formulario_servicio">
  <div class="texto_servicio">
    <input type="text" id="apellido" name="apellido" placeholder="Ej: Gomez" required>
</div>
</div>
<div class="contenedor_formulario_mapcota">
  <label class="texto_titulo">Apellido Materno</label>
</div>
<div class="contenedor_formulario_servicio">
  <div class="texto_servicio">
    <input type="text" id="apellido2" name="apellido2" placeholder="Ej: Ramírez" required>
</div>
</div>
<div class="contenedor_formulario_mapcota">
  <label class="texto_titulo">Rut</label>
</div>
<div class="contenedor_formulario_servicio">
  <div class="texto_servicio">
    <input type="text" id="rut" name="rut" placeholder="Ej: 1234567-8" required>
</div>
</div>
<div class="contenedor_formulario_mapcota">
  <label class="texto_titulo">Correo Electrónico</label>
</div>
<div class="contenedor_formulario_servicio">
  <div class="texto_servicio">
    <input type="text" id="email" name="email" placeholder="Ej: correo@outlook.com" required>
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
<div class="contenedor_formulario_servicio">
  <input style="background-color: #0885b3;" id="submit_general" type="submit" value="Enviar"></div>
