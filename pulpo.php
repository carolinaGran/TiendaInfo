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
		table{
			
			
			  display: block;
            color: black;
            text-align: left;
           padding-left: 3%;}
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
			.foto{
			width: 200px;
			height: 300px;
			background-repeat: no-repeat;
			background-size: 100% 100%;
		}

		.foto1{
			background-image: url(images/pulpo_enfadado.jpeg);
		}
		.foto1:hover{
			background-image: url(images/pulpo_contento.jpeg);
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
		<div class="container">
		<!--<img src="images/pollo.jpeg" style="width: 200px;height: 300px">-->
</body>
</html>
<?php
		// conexión al servidor de bases de datos y selección de la base de datos. 
		//Obtención del conector a la base de datos
		$dbh=mysqli_connect ("localhost", "root", "", "your_amigurumi") or die ('problema conectando porque :' . mysql_error());
		// preparando la instruccion sql
		// ya estudiaron su tutorial de sql??
		$q = 'select * from amigurumis where Id=5';
		// ejecutando el query
		$tabla1= mysqli_query($dbh, $q) or die ("problema con query");
		# empezando una tabla html
		echo "<HTML><TABLE CellPadding=5 style='float=rigth' class='table'><TR>";
		# construyendo los encabezados de la tabla
		echo "<th bgcolor=White>NOMBRE</th><th bgcolor=DA7572>TAMA&Ntilde;O</th><th bgcolor=72DABA>TEMATICA</th><th bgcolor=2DDC3C>PRECIO</th></TR>";
		// ciclo de lectura del rowset($tabla1)
		while($renglon = mysqli_fetch_row($tabla1))
		{
			// desplegando en celda de tabla html
			echo"<tr  >";
			//echo "<td>".$renglon[0]."</td>";
			echo "<td>".$renglon[1]."</td>";
			echo "<td>".$renglon[2]."</td>";
			echo "<td>".$renglon[3]."</td>";
			echo "<td>".$renglon[4]."€</td>";
			echo '<td><div class="foto1 foto "><td>';
			echo"</tr>";
		};

		// cerrando tabla html
		echo "</table>";
		
?>

</div>