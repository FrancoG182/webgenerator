<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Generator</title>
</head>
<body>
	<div class="panel">
	
	<center><h3>Bienvenido a tu panel</h3></center>
	<center><a href="index.php?accion=cerrar_sesion">Cerrar sesion de <?php echo $_SESSION['id']; ?></a></center>
	<br>
	<br>
            <?php 
            if (isset($_SESSION['admin'])) {
            	 echo "<h3>Sitios webs</h3>";     
	            	$cont=0;
	            	$dominios=obtener_dominios_admin();
					$arrayDatos=array();
					while($row=mysqli_fetch_array($dominios)){
						$arrayDatos[$cont] = $row;
						$cont++;
					}
					echo "<div style='display:block; width:70%;'>";
					foreach ($arrayDatos as $key) {
						$id = $key['idUsuario'];
						$dominio = $key['dominio'];
						echo "<div style='display:block;'>";
							echo "<p>Id usuario: $id</p>";
							echo "<p>Sitio: <a href='$dominio/index.php'>$dominio </a></p>";
							echo "<p><a href='$dominio.zip'> Descargar web</a></p><br>";
						echo "</div>";
					}
					echo "</div>";
            }else{
            	 echo "<form action='index.php' method='get'>
            	<input type='hidden' name='accion' value='generar'>
		       	<center>Generar web de: <br><br><input type='text' placeholder='Nombre de la web' name='nombreWeb' required><br>
		            <br><input type='submit' value='Generar web'></center>
		        </form>
		        <p> $error</p>
		        <br>
		        <br>";
	            	$cont=0;
	            	$dominios=obtener_dominios($_SESSION['id']);
					$arrayDatos=array();
					while($row=mysqli_fetch_array($dominios)){
						$arrayDatos[$cont]=$row;
						$cont++;
					}
					echo "<center>";
					echo "<div style='display:block; width:50%;'>";
					foreach ($arrayDatos as $key) {
						$dominio = $key['dominio'];
						echo "<div style='display:block;'>";
							echo "<p style='float:left;'><a href='$dominio/index.php'> $dominio     </a></p>";
							echo "<p style='float:right;'><a href='$dominio.zip'> Descargar web</a></p>";
						echo "</div>";
					}
					echo "</div>";
					echo "</center>";
			}
             ?>

</div>