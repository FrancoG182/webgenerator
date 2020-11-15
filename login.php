<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Generator</title>
</head>
<body>
  <center>
  <h3>Iniciar sesion</h3>
    <div class="form">
    <form action="index.php" method="get">
    <input type="hidden" name="accion" value="iniciar_sesion">
    <label for="correo">Correo</label><br>
    <br><input type="text" placeholder="Ingrese correo" name="correo" required><br>             
    <br><label for="contraseña">Contraseña</label><br>
    <br><input type="password" placeholder="Ingrese contraseña" required name="contra"><br>
    <br><input type="submit" value="Iniciar sesion"><br><br>
    <a href="index.php?accion=register">Registrarse</a>
      <p> <?php echo $error ?></p>
     </form>
  </center>
    
        