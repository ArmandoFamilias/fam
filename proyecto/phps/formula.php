<!DOCTYPE html>
<html>
	<head>
		<title>Formulario</title>
		<link rel="icon" href="img/A.ico">
		<link rel="stylesheet" type="text/css" href="../ese/ez.css">
        <meta charset="UTF-8">
	</head>
	<body class="fof">
		<header>
			<button class="ed"><a href="../index.html" class="loca">Regresar</a></button>
		</header>
		<h4 class="mp3">ADOPTA</h4>
		<section class="of">
		<form action="form.php" method="post">
			<label form="nombre">Nombre completo</label>
			<br>
			<input class="con" type="text" name="nombre" id="nombre" required>
			<br>
			<label form="correo">Correo</label>
			<br>
			<input class="con" type="email" name="correo" id="correo" required>
			<br>
			<label form="genero">Genero</label>
			<br>
			<select class="con" name="genero" id="genero">
				<option class="op" value="masculino">Masculino</option>
				<option class="op" value="femenino">Femenino</option>
			</select>
			<br>
			<label form="hogar">¿Tienes casa propia o alquilada?</label>
			<br>
			<select class="con" name="hogar" id="hogar">
				<option class="op" value="propia">Propia</option>
				<option class="op" value="alquilada">Alquilada</option>
			</select>
			<br>
			<label form="permite">¿Se permiten mascotas?</label>
			<br>
			<select class="con" name="permite" id="permite">
				<option class="op" value="si">Si</option>
				<option class="op" value="no">No</option>
			</select>
			<br>
			<label form="causa">¿Por qué lo quieres adoptar?</label>
			<br>
			<select class="con" name="causa" id="causa">
				<option class="op" value="me gusto">Me gusto</option>
				<option class="op" value="necesidad">Necesidad</option>
				<option class="op" value="trabajo">Trabajo</option>
				<option class="op" value="condicion">Condición</option>
			</select>
			<br>
			<label form="personas">¿Cuantas personas viven?</label>
			<br>
			<select class="con" name="personas" id="personas">
				<option class="op" value="solo/a">solo/a</option>
				<option class="op" value="2-3 personas">2-3 personas</option>
				<option class="op" value="4-5 personas">4-5 personas</option>
				<option class="op" value="+6 personas">+6 personas</option>
			</select>
			<br>
			<label form="espacio">¿Tengo espacio suficiente y es seguro?</label>
			<br>
			<select class="con" name="espacio" id="espacio">
				<option class="op" value="si">Si</option>
				<option class="op" value="no">No</option>
			</select>
			<br>
			<label form="tiempo">¿Cuanto tiempo tienes para cuidarlo?</label>
			<br>
			<select class="con" name="tiempo" id="tiempo">
				<option class="op" value="1-2 horas">1-2 horas</option>
				<option class="op" value="3-4 horas">3-4 horas</option>
				<option class="op" value="5-6 horas">5-6 horas</option>
				<option class="op" value="+7 horas">+7 horas</option>
			</select>
			<br>
			<label form="mas">¿Alguien mas de ti lo puede cuidar?</label>
			<br>
			<select class="con" name="mas" id="mas">
				<option class="op" value="si">Si</option>
				<option class="op" value="no">No</option>
			</select>
			<br>
			<label form="visita">¿Estás dispuesto a aceptar una visita de seguimiento?</label>
			<br>
			<select class="con" name="visita" id="visita">
				<option class="op" value="si">Si</option>
				<option class="op" value="no">No</option>
			</select>
			<br>
			<input class="ca" type="submit" value="Enviar">
		</form>
	</section>
	</body>
<html>
