<!DOCTYPE html>

<html>

	<head>
	
		<title>Proyecto</title>
		<link rel="stylesheet" href="css/estilo.css" type="text/css">		
		
	</head>
	
	<body>
	<div id="contenedor">

			<header>
			
				<h2>Cuestionario Primera Guerra Mundial</h2>
				
			</header>

		<div id="principal">
				<div id="cabezera">
				<img src="img/cara.gif" alt="Doomguy" id="cara">
				</div>

			<br>
		<div id="cuestionario">

			Pregunta: 1. En qué año empezó?<br><br>
      		<input type="radio" name="preguntaUno" id="correctaUno">1914 <br>
      		<input type="radio" name="preguntaUno">1939 <br>
      		<input type="radio" name="preguntaUno">1917 <br><br>
      		<input type="submit" value="Responder" onclick="resultado(0);this.disabled = true;"><br><br>
   		
			Pregunta: 2. Cuál fue el detonante?<br><br>

      		<input type="radio" name="preguntaDos">La Muerte del rey Francisco Primero <br>
      		<input type="radio" name="preguntaDos">La invasión de Berlin <br>
      		<input type="radio" name="preguntaDos" id="correctaDos">El asesinato del archiduque Francisco Fernando de Austria <br><br>
			<input type="submit" value="Responder" onclick="resultado(1);this.disabled = true;"><br><br>

			Pregunta: 3. Qué tecnología fue prohibida luego de esta guerra?<br><br>

      		<input type="radio" name="preguntaTres" id="correctaTres">Gas Venenoso <br>
      		<input type="radio" name="preguntaTres">Bombas de Feromonas <br>
      		<input type="radio" name="preguntaTres">Bombas Atómicas <br><br>				
			
			<input type="submit" value="Responder" onclick="resultado(2);this.disabled = true;"><br><br>

			Pregunta: 4. Con qué otro nombre se la conoce?<br><br>
      		<div id="grillaUno" class="grillaDeBotones">
      			<button class="btnFalso" onclick="respuestaBtn(false,3);">La Guerra Sucia</button>
      			<button class="btnFalso" onclick="respuestaBtn(false,3);">La Primerísima</button>
      			<button class="btnCorrecto" onclick="respuestaBtn(true,3);">La Gran Guerra</button>
      		</div>
      		<br>
      		Pregunta: 5. Cuantos años duró?<br><br>
      		<div id="grillaDos" class="grillaDeBotones">
      			<button class="btnFalso" onclick="respuestaBtn(false,4)">6</button>
      			<button class="btnCorrecto" onclick="respuestaBtn(true,4)">4</button>
      			<button class="btnFalso" onclick="respuestaBtn(false,4)">2</button>
      		</div>      		


			Pregunta: 6. Cuál de estas personalidades Participó del conflicto?<br><br>

			<input class="imagen" type="image" src="img/Asimov.jpg" alt="Isaac Asimov" height="200px" onclick="respuestaBtn(false,5)">
			<input class="imagen" type="image" src="img/Gral.jpg" alt="Juan Domingo" height="200px" onclick="respuestaBtn(false,5)">
			<input class="imagen" type="image" src="img/Alguien.jpg" alt="Otto Von Bismarck" height="200px" onclick="respuestaBtn(true,5)">				
		</div>
		</div>
	</div>	
	</body>
</html>

<script src="script/main.js"></script>
<script src="script/preguntas.js"></script>