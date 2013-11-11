<!DOCTYPE HTML>
<html lang="en">
	<head>
	<title>Tarea 2 ayudantia</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body id="body">
		<h1 id="center">Grupo 1</h1>
		<hr>
		<h4>Seleccione un integrante para ver detalles</h4>
		<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<select name="integrantes" id="">
				<option value="-1">Seleccionar</option>
				<option  value="0">Sebastian Esparza</option>
				<option  value="1">DiegoNavia</option>
				<option  value="2">Francisco Ramirez</option>
			</select>	
			<input type="submit" value="Ver" name="btn_enviar">
		</form>
	
	</body>
	<?php
	if(isset($_GET['btn_enviar']))
		{
			$nombre=$_GET['integrantes'];	
			if($nombre==-1)
				echo "Escoga una Opcion";	
			if($nombre==0)
				echo '
						<table border="1">
							<tr>
								<td><b>Nombre</b></td>
								<td><b>Edad</b></td>
								<td><b>Carrera</b></td>
								<td><b>Github</b></td>
								<td><b>Facebook</b></td>
							</tr>
							<tr>
								<td>Sebastian Esparza</td>
								<td>22</td>
								<td>Ingeniería en Informática</td>
								<td><a id="color" href="https://github.com/faxtork">Github</a></td>
								<td><a id="color" href="https://www.facebook.com/sebastian.esparzag">Facebook</a></td>
							</tr>
							<tr ><td colspan="5"> FOTO</td></tr>
						</table>
			';
			if($nombre==1)
				echo 'Escoga una Opcion';
			if($nombre==2)
				echo 'Escoga una Opcion';
		}
	?>
</html>
