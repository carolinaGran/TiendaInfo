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
            <li><a href="main.php">HOME</a></li>
            <li><a href="quienes_somos.html">QUIENES SOMOS</a></li>
            <li><a href="contacto2.php">CONTACTO</a></li>
            <li><a href="#">CATEGORIAS</a></li>
			<li><a href="#">USUARIO</a></li>
			<li><a href="#">CARRITO</a></li>
			 
			 <li><a href="#"><img src="carro2.png" style="width: 60px;height: 60px"></a></li>
            </ul>
        </nav>
        <FORM ACTION=prog36.php METHOD=post>
        <div class="lateral">
            <div class="list-group">
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">
                    Buscador:
                    </h4>
                        <p class="list-group-item-text">
                        <input type="text" class="form-control" placeholder="Introduzca su busqueda" NAME=busqueda>
                        <input type="submit" class="btnbtn-primary" NAME=OK1 VALUE="BUSCAR"/>

                        </p>
                         <h4 class="list-group-item-heading">
					 </form>
					 <FORM ACTION=filtro.php METHOD=post>
                    Filtro:
                    </h4>
             <select name="OS">
               <option value="1">Por tama&ntilde;o(menor a mayor)</option> 
               <option value="2">Por tama&ntilde;o(mayor a menor)</option>
               <option value="3">Por precio(menor a mayor)</option>
               <option value="4">Por precio(mayor a menor)</option> 
            </select>
			
                        <input type="submit" class="btnbtn-primary" NAME=OK2 VALUE="FILTRAR"/>
					</form>
                        <h4 class="list-group-item-heading">
					 </form>
					 <FORM  METHOD=post>
                    Idiomas:
                    </h4>
             <a href="main.php"><img src="español.png" style="width: 70px;height: 50px"></a>
			<a href="home_ing.php"><img src="ing.png" style="width: 70px;height: 50px"></a></br>
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
		 <FORM ACTION=muestra.php name=mostrar METHOD=post>
            <table>
                <tr>
                    <td>
					
           <a href="#"><img src="images/pollo.jpeg"style="width: 200px;height: 300px" onclick="window.open('muestra.php','muestra','height=600, width=800');" name="pollo"></a> 
		    <!-- -->
           </td>
           <td>
           <a href="#"><img src="images/oso_amor.jpeg"style="width: 200px;height: 300px" onclick="window.open('lovebear.php','lovebear','height=600, width=800');"></a> 
           </td>
           <td>
           <a href="#"><img src="images/yoda.jpeg"style="width: 200px;height: 300px" onclick="window.open('yoda.php','yoda','height=600, width=800');"></a> 
           </td>
           <td>
           <a href="#"><img src="images/pulpo_enfadado.jpeg "onclick="window.open('pulpo.php','pulpo','height=600, width=800');"style="width: 200px;height: 300px"></a> 
           </td>
           </tr>
           <tr>
            <td>
           <a href="#"><img src="images/ojos.jpeg"style="width: 200px;height: 300px"onclick="window.open('ojos.php','ojos','height=600, width=800');"></a> 
           </td>
           <td>
           <a href="#"><img src="images/dalmata.jpeg"style="width: 200px;height: 300px"onclick="window.open('dalmata.php','dalmata','height=600, width=800');"></a> 
           </td>
           <td>
           <a href="#"><img src="images/conejo.jpeg"style="width: 200px;height: 300px"onclick="window.open('conejo.php','rabbit','height=600, width=800');"></a>  
           </td>
           <td>
           <a href="#"><img src="images/mochila_llavero.jpeg"style="width: 200px;height: 300px"onclick="window.open('mochlla.php','mochila_llavero','height=600, width=800');"></a> 
           </td>
          </tr>
        </article>
	</table>
	</form>
        <footer>
            <ul>
            <li><a href="contacto2.php"><img src="correo.png" style="width: 50px;height: 50px"></a></li>
            <li><a href="https://www.instagram.com/_your_amigurumi/"><img src="ins.jpg" style="width: 50px;height: 50px"></a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100066425989963"><img src="fb.jpg" style="width: 50px;height: 50px"></a></li>
            </ul>
        </footer>
    </section>

</body>
</html>
<?php
if (@$_POST['buscar'] == "Buscando") {
	
}
else 
?>