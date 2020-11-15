<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Generator</title>
</head>
<body> 
<center>
    <h3>Registrarse es simple</h3>
        <form action="index.php" method="get">
            <input type="hidden" name="accion" value="realizar_registro">
            <label for="correo">Correo</label><br>
            <br><input type="text" placeholder="Ingrese correo" required name="correo"><br>
            <br><label for="contraseña">Contraseña</label><br>
            <br><input type="password" placeholder="Ingrese contraseña" required name="contra1"><br>
            <br><label for="contraseña">Repetir Contraseña</label><br>
            <br><input type="password" placeholder="Ingrese contraseña" required name="contra2"><br>
            <br><input type="submit" value="Registrarse">
            <p> <?php echo $error ?></p> 
            <a href="index.php?accion=login">Iniciar sesion</a> 
        </form>
</center> 

