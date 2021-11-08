	//variable auxiliar
	var correcta = false;

	//contador de puntos totales
	var puntos = 0;
	var errores = 0;
	
	//flags para que la respuesta solo sume puntos la primera vez (si es correcta)
	flagUno = true;
	flagDos = true;
	flagTres = true;

	//Preguntas con sistema de botón
function respuestaBtn(respuesta,pregunta){
		
		correcta = respuesta;

		if(pregunta==3&&flagUno)
			{
			
			resultado(pregunta);

			flagUno = false;
				
			var grilla = document.getElementById('grillaUno');
			grilla.setAttribute('class','grillaTerminada');	

			}

		if(pregunta==4&&flagDos)
			{

			resultado(pregunta);

			flagDos = false;
	
			var grilla = document.getElementById('grillaDos');
			grilla.setAttribute('class','grillaTerminada');

			}

		if(pregunta==5&&flagTres)
			{

			resultado(pregunta);

			flagTres = false;
	
			}

		correcta = false;

		}


		//Acá caen todas las preguntas
function resultado(pregunta) {

				var cara = document.getElementById("cara");

				if(pregunta==0)			
				{	
				if (document.getElementById('correctaUno').checked)
					mostrarRes();
				else
					danio(); 
				}

				if(pregunta==1)
				{	
				if (document.getElementById('correctaDos').checked)
					mostrarRes();										
				else
					danio();
				}

				if(pregunta==2)
				{	
				if (document.getElementById('correctaTres').checked)
					mostrarRes();										
				else
					danio();
				}
					
				if(pregunta==3)
				{
				if (correcta)
					mostrarRes();
				else					
					danio();					
				}

				if(pregunta==4)
				{
				if (correcta)
					mostrarRes();
				else
					danio();
				}

				if(pregunta==5)
				{
				if (correcta)
					mostrarRes();
				else
					danio();
				}
			}

function mostrarRes()
	{
		puntos++;
		alert("Acertaste "+ puntos + "!");	
		final();
	}

function danio()
	{
		errores++;
		alert("Ay!");
		cara.src ='img/'+errores+'.gif';

		if(errores==6)
			alert("Estas muerto, erraste todas");
		else				
			final();
	}

function final()
	{
	if((errores+puntos)==6)
		alert("Terminó el juego, tu puntaje final es: "+ puntos +" de 6");
	}