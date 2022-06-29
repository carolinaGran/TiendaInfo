
<!-- Organizacion de archivos 
Archivos Secuenciales.- En este caso los datos se almacenan en forma consecutiva y no es posible leer ningun registro directamente, es decir para leer el registro n, se debera recorrer o acceder los n-1 registros anteriores. 
Archivos Directos o Random.- Para este caso si se puede acceder o leer un renglon n cualquiera. 

Tipo de archivos 
En general existen tantos tipos de archivos como tipos de datos existen. 

Almacenamiento en archivos 
Modo Texto: en este caso los datos son almacenados usando Ascii y por tanto son plenamente visibles usando cualquier editor. 
Modo Binario: en este caso los datos son almacenados en notacion hexadecimal y por tanto se ocupa un editor binario para reconocerlos, sin embargo un archivo binario es mas compacto que un archivo texto. 

fopen(archivo,modo_apertura) 
Se utiliza para abrir o crear un archivo según el modo_apertura. El primer argumento es el nombre del archivo, si se quiere que quede en algun subdirectoro agregar (Ej.: /archivos/alumnos.dat), el segundo parametro es el llamdo modo de apertura, existen los siguientes modos en php. 
“r” —> Lectura. 
“w” —> Escritura. 
“a” —> Append, si el archivo ya existe append empieza a anadir los nuevos datos al final del archivo ya existente. 
“r+” —> Lectura y escritura, ya debe existir el archivo. 
“w+” —> Crea para lectura y escritura y si ya existe, sobreescribe. 
“a+” —> Crea o abre para lectura y append, sino existe el archivo sera creado. 

fputs(apuntador_archivo, datos_a_escribir)
Escribe la información del segundo argumento en el archivo refrenciado por el primero. El primer parámetro es el apuntador al archivo y el segundo la variable a grabar en disco. Es común agregar un ENTER o RETURN al final de cada variable, esto es por la necesidad de tener un marca o bandera para conocer donde termina cada variable a la hora de leer el archivo. 

-->
<HTML>
<head>
    <meta charset=UTF-8?/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <title>Your Amigurumi</title>
    <style>
        body{
            background-image: url(images/ovillo.jpg)
        }
        section{
            margin-left: 10%; 
            margin-right: 10%; 
            background: white;
        }
        .lateral{
            float: right;
            
        }
        article{
            padding-right: 30%;
        }
        nav{
            margin-top:-4px;
            background-image: url(images/fondonav.gif);
        }
        nav ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        nav li{
           float: left;
        }
        nav li a {
           display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
        }
        footer ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        footer li{
            float: left;

        }
        footer li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            
        }
        nav li a:hover{
           background-color: #c0c999;
        }
        article{ display: block;
            color: black;
            text-align: left;
            padding: 14px 16px;}
		label {
			display: block;
			margin: 5m 0 0 0;
			width: 8%;
   float: left;

			}
			input:focus {
   border: 2px solid #000;
   background: #F3F3F3;
}
div {
   margin: .4m 0;
}


    </style>
	<script>
		function validaciónNom()  {
			valor = document.f1.NOMBRE.value;
			if( valor == null  ||  valor.length == 0 ){
			 alert ("El campo nombre no puede ser vacío");
			  return false;
			}
			else{
		return true;
	}
	}
	function validaciónPre()  {
			valor = document.f1.tlfn.value;
			if( isNaN(valor) ){
			 alert ("el telefono no es numerico");
			  return false;
			}
			else{
		return true;
	}
}
	function validaciónCod()  {
			valor = document.f1.apellido.value;
			if( valor == null  ||  valor.length == 0 ){
			 alert ("El campo nombre no puede ser vacío");
			 return false;
			}
			else{
		return true;
	}
}

	function validar(){
		if(validaciónCod()&&validaciónPre()&&validaciónNom()){
			return true;
		}
		else{
			return false;
		}
	</script>
</head>
<body>
    <section>
        <header>
           <a href="main.php"> <img style="width: 100%" src="images/ya.jpg"></a>
        </header>

        <nav>
            <ul>
            <li><a href="main.php">HOME</a></li>
            <li><a href="quienes_somos.html">QUIENES SOMOS</a></li>
            <li><a href="#">USUARIO</a></li>
            <li><a href="contacto2.php">CONTACTO</a></li>
            <li><a href="#">CARRITO</a></li>
            <li><a href="#">CATEGORIAS</a></li>
            </ul>
        </nav>
		<article>
		 <footer>
		 <h1>CONTACTANOS</h1>
		 <h2> Redes sociales</h2>
            <ul>
          <!--  <li><a href="contacto2.php"><img src="correo.png" style="width: 50px;height: 50px"></a></li>-->
            <li><a href="https://www.instagram.com/_your_amigurumi/"><img src="ins.jpg" style="width: 50px;height: 50px"></a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100066425989963"><img src="fb.jpg" style="width: 50px;height: 50px"></a></li>
            </ul>
        </footer>
		<h2>Introduce tus datos y contactaremos contigo mediante tu telefono o e-mail</h2>
	<!--<FORM ACTION=contacto2.php METHOD=post name="f1" onsubmit="return validar()">enviar los datos a un documento de texto-->
		<FORM ACTION="mailto:your.amigurumi.contacto@gmail.com" METHOD=post ENCTYPE="text/plain"><!--(para mandar los datos por correo)-->

		<div>
		<label>	Nombre:</label>
		<INPUT TYPE=text NAME=NOMBRE><BR><BR>
		</div>
		<div>
		<label>Apellido: </label>
		<input type=text name=apellido><br/><BR>
		</div>
		<div>
		<label>Telefono:</label>
		<input type="tel" name=tlfn ><BR><BR>
		</div>
		<div>
		<label>E-mail:</label>
		<input type="email" name=email><BR><BR>
		</div>
		<INPUT TYPE=submit NAME=OK VALUE="Insertar" class="btn"><BR>
	</FORM>
	</article>
</HTML>

<?php
	if (@$_POST['OK'] == "Insertar") {
		// creando y abriendo archivo para añadir los nuevos datos al final del mismo.
		$archivo=fopen('datos.dat','a+') or die("no puedo abrir archivo");
		// grabando los campos
		fputs($archivo, $_POST['NOMBRE']."\n");
		fputs($archivo, $_POST['apellido']."\n");
		fputs($archivo, $_POST['tlfn']."\n");
		fputs($archivo, $_POST['email']."\n");
		//cerrando archivo
		fclose($archivo);
		//avisando
		echo "registro #" . $_POST['NOMBRE'] . " insertado"."<br>";
	};
?>
