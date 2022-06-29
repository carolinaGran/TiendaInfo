<!DOCTYPE html>
<html lang="es">
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
    </style>
</head>
 
<body>
    <section>
        <header>
            <img style="width: 100%" src="images/ya.jpg">
        </header>

        <nav>
            <ul>
            <li><a href="main.html">HOME</a></li>
            <li><a href="#">QUIENES SOMOS</a></li>
            <li><a href="#">USUARIO</a></li>
            <li><a href="#">CONTACTO</a></li>
            <li><a href="#">CARRITO</a></li>
            <li><a href="#">CATEGORIAS</a></li>
            </ul>
        </nav>
        <FORM ACTION=nemo.php METHOD=post>
        <div class="lateral">
            <div class="list-group">
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">
                    Buscar:
                    </h4>
                        <p class="list-group-item-text">
                        <input type="text" class="form-control" name="load"><br>
                        <input type="submit" class="btnbtn-primary" value="Buscando" value=buscar/>

                        </p>
                         <h4 class="list-group-item-heading">
                    Filtro:
                    </h4>
             <select name="OS">
               <option value="1">Por tamaño(menor a mayor)</option> 
               <option value="2">Por tamaño(mayor a menor)</option> 
               <option value="3">Por precio(menor a mayor)</option>
               <option value="3">Por precio(mayor a menor)</option> 
            </select>
                        <input type="submit" class="btnbtn-primary" value="Filtrar" value=filtro/>

              </form>          
                
                <a href="form.html" class="list-group-item">
                     <h4 class="list-group-item-heading">
                     Registro
                     </h4>
                        <p class="list-group-item-text">
                        Regístrese con nosotros y compra nuestros <br>productos al mejor precio.
                        </p>
                </a>
                 <a href="#" class="list-group-item">
                     <h4 class="list-group-item-heading">
                     Otras informaciones
                     </h4>
                     <p class="list-group-item-text">
                        Nuestra misión.
                    </p>
                     <p class="list-group-item-text">
                        Novedades.
                    </p>
                     <p class="list-group-item-text">
                        Nuestras redes sociales.
                    </p>
                 </a>
            </div>
        </div>

        <article>
            <table>
			<?php
if (@$_POST['buscar'] == "Buscando") {
			$dbh=mysqli_connect ("localhost", "root", "", "your_amigurumi") or die ('problema conectando porque :' . mysql_error());
			$load=$_POST["load"];
		// seleccionado la base de datos
		//mysql_select_db ("mibase",$dbh);
		// preparando la instruccion sql
		// ya estudiaron su tutorial de sql??
		$q = 'select * from amigurumis WHERE nombre LIKE "'"%$load%'";
		// ejecutando el query
		$tabla1= mysqli_query($dbh, $q) or die ("problema con query");
		while($renglon = mysqli_fetch_row($tabla1))
		{
			// desplegando en celda de tabla html
			echo"<tr>";
			echo "<td>".$renglon[0]."</td>";
			echo"</tr>";
		};

}
else 
?>
            </table>
        </article>

        <footer>
            <ul>
            <li><a href="#"><img src="correo.png" style="width: 50px;height: 50px"></a></li>
            <li><a href="https://www.instagram.com/_your_amigurumi/"><img src="ins.jpg" style="width: 50px;height: 50px"></a></li>
            <li><a href="#"><img src="fb.jpg" style="width: 50px;height: 50px"></a></li>
            </ul>
        </footer>
    </section>

</body>
</html>
