<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
	<head>
		<title>Tarea 2 ayudantia</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-Equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<!--Funcion para cargar aleatoriamente los dos eslogan en el <div> cuyo id="slogan"-->
		<script type='text/javascript'>
				var objetos = new Array();
				//acá van los eslogan en fotos
				objetos[0] = "img/slogan 1.png";
				objetos[1] = "img/slogan 2.png";
		</script>
		<script type='text/javascript'>
						function aleatorio() {
				   var azar = Math.floor(Math.random() * objetos.length);
				   document.images["imagen"].src = objetos[azar];
				}
		</script>
	</head>

	<body onload="aleatorio()" class="body">
			<h1 id="h1">Grupo 01 - Ingeniería de Software</h1>	
    	<div id="slogan"><img src="" alt="" name="imagen"></div>
		<h4 id="citas">"El ordenador nació para resolver problemas que antes no existían"<br>--Bill Gates<br><br>
			"El hardware es lo que hace a una máquina rápida; el software es lo que hace que una máquina rápida se vuelva lenta"<br>--Craig Bruce
		</h4>
		<hr id="hr">
		<div id="form">
			<h4>Seleccione un integrante para ver detalles</h4>
			<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<select name="integrantes">
					<option value="-1">Seleccionar</option>
					<option value="0">Sebastian Esparza</option>
					<option value="1">Diego Navia</option>
					<option value="2">Francisco Ramirez</option>
				</select>	
				<input type="submit" value="Ver" name="btn_enviar">
			</form>
		</div>	
		<?php
	if(isset($_GET['btn_enviar']))
		{
			$nombre=$_GET['integrantes'];	
			if($nombre==-1)
				echo '<br><br><p id="OtraOpcion">Escoga una Opcion</p>';	
			if($nombre==0)
				echo '
						<br><br><br><br>
						<table class="Datos">
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
								<td><a href="https://github.com/faxtork">Github</a></td>
								<td><a href="https://www.facebook.com/sebastian.esparzag">Facebook</a></td>
							</tr>
							<tr ><td colspan="5"><div ><img src="img/yo.jpg" alt="" id="fotoSeba"></div></td></tr>
						</table>
			';
			if($nombre==1)
				echo '
						<br><br><br><br>
						<table class="Datos">
							<tr>
								<td><b>Nombre</b></td>
								<td><b>Edad</b></td>
								<td><b>Carrera</b></td>
								<td><b>Github</b></td>
								<td><b>Facebook</b></td>
							</tr>
							<tr>
								<td>Diego Navia</td>
								<td>21</td>
								<td>Ingeniería civil en Computación</td>
								<td><a href="https://github.com/diogoalfa">Github</a></td>
								<td><a href="https://www.facebook.com/diogo.again">Facebook</a></td>
							</tr>
							<tr ><td colspan="5"><div ><img src="img/fotoMia.jpeg" alt="" id="fotoDiego" ></div></td></tr>
						</table>
			';
			if($nombre==2)
				echo '
						<br><br><br><br>
						<table class="Datos" >
							<tr>
								<td><b>Nombre</b></td>
								<td><b>Edad</b></td>
								<td><b>Carrera</b></td>
								<td><b>Github</b></td>
								<td><b>Facebook</b></td>
							</tr>
							<tr>
								<td>Francisco Ramírez</td>
								<td>21</td>
								<td>Ingeniería Civil en Computación</td>
								<td><a href="https://github.com/FcoHernan">FcoHernan</a></td>
								<td><a href="https://www.facebook.com/Fco.Hernan">Francisco Hernan</a></td>
							</tr>
							<tr ><td colspan="5"><div ><img src="img/foto.jpg" alt="" id="fotoFco" ></div></td></tr>
							<tr><td colspan="5"><a id="mail" href="mailto:Franciscoramirezfernandez@gmail.com">Enviar Mail</a></tr>
						</table>
			';
		}
	?>
    <p>
	    <a href="http://validator.w3.org/check?uri=referer"><img
	      src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Transitional" height="31" width="88"></a>
  	</p>
  	<p>
		<a href="http://jigsaw.w3.org/css-validator/check/referer">
		    <img style="border:0;width:88px;height:31px"
		        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
		        alt="" >
		</a>
	</p>
  </body>       
</html>
