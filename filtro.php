<!-- SQL INSERT INSERCION MYSQL 
Insertar o agregar registros o renglones nuevos a una tabla en disco, es un proceso sencillo que usa la siguiente instruccion sql: 
INSERT INTO TABLA(CAMPO1,CAMPO2..) VALUES(VALOR1,VALOR2..) 
-->
<HTML>
 <section>
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
			table{
				border-color: F9B39C
			}
    </style>
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
			<h1>FILTRO</h1>
        </header>
	<FORM ACTION=filtro.php METHOD=post>
		<select name="OS">
               <option value="1"<?php if (@$_POST["OS"] == "1"){echo "selected";}?>>Por tama&ntilde;o(menor a mayor)</option> 
               <option value="2"<?php if (@$_POST["OS"] == "2"){echo "selected";}?>>Por tama&ntilde;o(mayor a menor)</option>
               <option value="3"<?php if (@$_POST["OS"] == "3"){echo "selected";}?>>Por precio(menor a mayor)</option>
               <option value="4"<?php if (@$_POST["OS"] == "4"){echo "selected";}?>>Por precio(mayor a menor)</option> 
            </select>
			<INPUT TYPE=submit NAME=OK2 VALUE="FILTRAR"><BR>
	</FORM>
</HTML>

<?php
	if (@$_POST['OK2'] == "FILTRAR") {
		// conexión al servidor de bases de datos y selección de la base de datos. 
		//Obtención del conector a la base de datos
		$dbh=mysqli_connect ("localhost", "root", "", "your_amigurumi") or die ('problema conectando porque :' . mysql_error());
		// preparando la instruccion sql
		// ya estudiaron su tutorial de sql??
		if (@$_POST['OS'] == "1" || @$_POST['OS'] == "3"){
		$q = 'select * from amigurumis ORDER BY Precio ASC;';
		// ejecutando el query
		$tabla1= mysqli_query($dbh, $q) or die ("problema con query");
		# empezando una tabla html
		echo "<HTML><TABLE Border=10 CellPadding=5><TR>";
		# construyendo los encabezados de la tabla
		echo "<th bgcolor=White>NOMBRE</th><th bgcolor=DA7572>TAMA&Ntilde;O</th><th bgcolor=72DABA>TEMATICA</th><th bgcolor=2DDC3C>PRECIO</th><th bgcolor=White>FOTO</th></TR>";
		// ciclo de lectura del rowset($tabla1)
		while($renglon = mysqli_fetch_row($tabla1))
		{
			// desplegando en celda de tabla html
			echo"<tr>";
		//	echo "<td>".$renglon[0]."</td>";
			echo "<td>".$renglon[1]."</td>";
			echo "<td>".$renglon[2]."</td>";
			echo "<td>".$renglon[3]."</td>";
			echo "<td>".$renglon[4]."</td>";
			echo "<td><img src='images/".$renglon[5]."'style='width: 200px;height: 300px'></td>";
			echo"</tr>";
		};

		// cerrando tabla html
		echo "</table>";
		}
		else if (@$_POST['OS'] == "2" || @$_POST['OS'] == "4"){
		$q = 'select * from amigurumis ORDER BY Precio DESC;';
		// ejecutando el query
		$tabla1= mysqli_query($dbh, $q) or die ("problema con query");
		# empezando una tabla html
		echo "<HTML><TABLE Border=10 CellPadding=5><TR>";
		# construyendo los encabezados de la tabla
		echo "<th bgcolor=White>NOMBRE</th><th bgcolor=DA7572>TAMA&Ntilde;O</th><th bgcolor=72DABA>TEMATICA</th><th bgcolor=2DDC3C>PRECIO</th><th bgcolor=White>FOTO</th></TR>";
		// ciclo de lectura del rowset($tabla1)
		while($renglon = mysqli_fetch_row($tabla1))
		{
			// desplegando en celda de tabla html
			echo"<tr>";
			//echo "<td>".$renglon[0]."</td>";
			echo "<td>".$renglon[1]."</td>";
			echo "<td>".$renglon[2]."</td>";
			echo "<td>".$renglon[3]."</td>";
			echo "<td>".$renglon[4]."</td>";
			echo "<td><img src='images/".$renglon[5]."'style='width: 200px;height: 300px'></td>";
			echo"</tr>";
		};

		// cerrando tabla html
		echo "</table>";
		}
	}
?>

