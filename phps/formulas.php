<!DOCTYPE html>
<html>
	<head>
		<title>Formulario</title>
		<link rel="icon" href="img/A.ico">
		<link rel="stylesheet" type="text/css" href="../ese/ez.css">
        <meta charset="UTF-8">
	</head>
	<body class="ofo">
		<header>
			<button class="ed"><a href="../index.html" class="loca">Regresar</a></button>
		</header>
		<h4 class="mp4">ADOPTA</h4>
		<section class="fo">
		<form action="forms.php" method="post">
			<label form="name">Nombre completo</label>
			<br>
			<input class="noc" type="text" name="name" id="nombre" required>
			<br>
			<label form="correo">Correo</label>
			<br>
			<input class="noc" type="email" name="correo" id="correo" required>
			<br>
			<label form="genero">Genero</label>
			<br>
			<select class="noc" name="genero" id="genero">
				<option class="po" value="masculino">Masculino</option>
				<option class="po" value="femenino">Femenino</option>
			</select>
			<br>
			<label form="eleccion">Mascota que se adopta</label>
			<br>
			<select class="noc" name="eleccion" id="eleccion">
				<option class="po" value="Perro">Perro</option>
				<option class="po" value="Gato">Gato</option>
				<option class="po" value="Conejo">Conejo</option>
				<option class="po" value="Roedor">Roedor</option>
				<option class="po" value="Pájaro">Pájaro</option>
				<option class="po" value="Otro">Otro</option>
			</select>
			<br>
			<label form="hogar">¿Tienes casa propia o alquilada?</label>
			<br>
			<select class="noc" name="hogar" id="hogar">
				<option class="po" value="propia">Propia</option>
				<option class="po" value="alquilada">Alquilada</option>
			</select>
			<br>
			<label form="permite">¿Se permiten mascotas?</label>
			<br>
			<select class="noc" name="permite" id="permite">
				<option class="po" value="si">Si</option>
				<option class="po" value="no">No</option>
			</select>
			<br>
			<label form="causa">¿Por qué lo quieres adoptar?</label>
			<br>
			<select class="noc" name="causa" id="causa">
				<option class="po" value="me gusto">Me gusto</option>
				<option class="po" value="necesidad">Necesidad</option>
				<option class="po" value="trabajo">Trabajo</option>
				<option class="po" value="condicion">Condición</option>
			</select>
			<br>
			<label form="personas">¿Cuantas personas viven?</label>
			<br>
			<select class="noc" name="personas" id="personas">
				<option class="po" value="solo/a">solo/a</option>
				<option class="po" value="2-3 personas">2-3 personas</option>
				<option class="po" value="4-5 personas">4-5 personas</option>
				<option class="po" value="+6 personas">+6 personas</option>
			</select>
			<br>
			<label form="espacio">¿Tengo espacio suficiente y es seguro?</label>
			<br>
			<select class="noc" name="espacio" id="espacio">
				<option class="po" value="si">Si</option>
				<option class="po" value="no">No</option>
			</select>
			<br>
			<label form="con">¿Cuanto tiempo tienes para cuidarlo?</label>
			<br>
			<select class="noc" name="tiempo" id="tiempo">
				<option class="po" value="1-2 horas">1-2 horas</option>
				<option class="po" value="3-4 horas">3-4 horas</option>
				<option class="po" value="5-6 horas">5-6 horas</option>
				<option class="po" value="+7 horas">+7 horas</option>
			</select>
			<br>
			<label form="mas">¿Alguien mas de ti lo puede cuidar?</label>
			<br>
			<select class="noc" name="mas" id="mas">
				<option class="po" value="si">Si</option>
				<option class="po" value="no">No</option>
			</select>
			<br>
			<label form="visita">¿Estás dispuesto a aceptar una visita de seguimiento?</label>
			<br>
			<select class="noc" name="visita" id="visita">
				<option class="po" value="si">Si</option>
				<option class="po" value="no">No</option>
			</select>
			<br>
			<input class="ac" type="submit">
		</form>
	</section>
	</body>
<html>
