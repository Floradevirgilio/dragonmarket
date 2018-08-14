<!DOCTYPE HTML>


<html>
<body>
  <!--
  name es la key
  value es lo que se enviara segun lo que elija el usuario
  (salvo en el input donde el usuario ingresa los valores)

  para un checkbox donde un usuario puede elegir varios a la vez,
  name="check[]" para que arme un array con los datos
  -->
<form action="imprimir.php" method="POST">
  <label for="nombre">Nombre:</label>
  <input type="text" name="nombre">
  <br>
  <label for="email">E-mail:</label>
  <input type="text" name="email">
  <br>

<br><br><br>
  <label for="hobbies">hobbies</label>
  <br>
  <label> <input type="checkbox"id="cbox1" name="hobbies['deportivo'][]" value="correr"> correr</label><br>
  <label> <input type="checkbox"id="cbox2" name="hobbies['deportivo'][]" value="nadar"> nadar</label><br>
  <label> <input type="checkbox"id="cbox2" name="hobbies['artistico'][]" value="pintar"> pintar</label><br>
  <label> <input type="checkbox"id="cbox2" name="hobbies['artistico'][]" value="bailar"> bailar</label><br>
  <label> <input type="checkbox"id="cbox2" name="hobbies['artistico']['baile'][]" value="bailar-contemporanea"> contemporanea</label><br>
  <label> <input type="checkbox"id="cbox2" name="hobbies['artistico']['baile'][]" value="bailar-jazz"> jazz</label><br>
  </input>
<br><br><br>

  <input type="radio" name="commida" value="con" checked> milanesas con fritas<br>
  <input type="radio" name="commida" value="sin"> milanesas sin fritas<br>
  <input type="radio" name="commida" value="pure"> milas con pure

<br><br><br>
  <select name="commida2">
    <option value="guiso">guiso</option>
    <option value="chori">chori</option>
    <option value="sanguche">sanguche</option>
    <option value="asado">asado</option>
  </select>

  <br><br><br>
    <input type="submit">
</form>
</body>
</html>
