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
            <li><a href="home_ing.php">HOME</a></li>
            <li><a href="quienes_somos.html">ABOUT US</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="#">CATEGORIES</a></li>
			<li><a href="#">LOGIN</a></li>
			<li><a href="#">SHOPPING CART</a></li>
			 
			 <li><a href="#"><img src="carro2.png" style="width: 60px;height: 60px"></a></li>
            </ul>
        </nav>
        <FORM ACTION=browser.php METHOD=post>
        <div class="lateral">
            <div class="list-group">
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">
                   Browser:
                    </h4>
                        <p class="list-group-item-text">
                        <input type="text" class="form-control" placeholder="Enter your search" NAME=busqueda>
                        <input type="submit" class="btnbtn-primary" NAME=OK1 VALUE="Search"/>

                        </p>
                         <h4 class="list-group-item-heading">
					 </form>
					 <FORM ACTION=filter.php METHOD=post>
                    Filter:
                    </h4>
             <select name="OS">
               <option value="1">By size (smallest to largest)</option> 
               <option value="2">By size (largest to smallest)</option>
               <option value="3">By price (lowest to highest)</option>
               <option value="4">By price (highest to lowest)</option> 
            </select>
			
                        <input type="submit" class="btnbtn-primary" NAME=OK2 VALUE="Filter"/>
					</form>
                        <h4 class="list-group-item-heading">
					 </form>
					 <FORM  METHOD=post>
                   Languages:
                    </h4>
             <a href="main.php"><img src="español.png" style="width: 70px;height: 50px"></a>
			<a href="ingles/home_ing.php"><img src="ing.png" style="width: 70px;height: 50px"></a></br>
					</form>
                
                <a href="form.html" class="list-group-item">
                     <h4 class="list-group-item-heading">
                     Registry
                     </h4>
                        <p class="list-group-item-text">
                           Register with us and buy our <br> products at the best price.
                        </p>
                </a>
                 <a href="#" class="list-group-item">
                     <h4 class="list-group-item-heading">
                     Other informations
                     </h4>
                     <p class="list-group-item-text">
                        Our mission.
                    </p>
                     <p class="list-group-item-text">
                       News.
                    </p>
                     <p class="list-group-item-text">
                       Our social networks.
                    </p>
                 </a>
            </div>
        </div>

        <article>
		 <FORM ACTION=muestra.php name=mostrar METHOD=post>
            <table>
                <tr>
                    <td>
					
           <a href="#"><img src="images/pollo.jpeg"style="width: 200px;height: 300px" onclick="window.open('chick.php','muestra','height=600, width=800');" name="pollo"></a> 
		    <!-- -->
           </td>
           <td>
           <a href="#"><img src="images/oso_amor.jpeg"style="width: 200px;height: 300px" onclick="window.open('love.php','lovebear','height=600, width=800');"></a> 
           </td>
           <td>
           <a href="#"><img src="images/yoda.jpeg"style="width: 200px;height: 300px" onclick="window.open('yodaIng.php','yoda','height=600, width=800');"></a> 
           </td>
           <td>
           <a href="#"><img src="images/pulpo_enfadado.jpeg "onclick="window.open('octopus.php','pulpo','height=600, width=800');"style="width: 200px;height: 300px"></a> 
           </td>
           </tr>
           <tr>
            <td>
           <a href="#"><img src="images/ojos.jpeg"style="width: 200px;height: 300px"onclick="window.open('eyes.php','ojos','height=600, width=800');"></a> 
           </td>
           <td>
           <a href="#"><img src="images/dalmata.jpeg"style="width: 200px;height: 300px"onclick="window.open('dalmatian.php','dalmata','height=600, width=800');"></a> 
           </td>
           <td>
           <a href="#"><img src="images/conejo.jpeg"style="width: 200px;height: 300px"onclick="window.open('rabbit.php','rabbit','height=600, width=800');"></a>  
           </td>
           <td>
           <a href="#"><img src="images/mochila_llavero.jpeg"style="width: 200px;height: 300px"onclick="window.open('back.php','mochila_llavero','height=600, width=800');"></a> 
           </td>
          </tr>
        </article>
	</table>
	</form>
        <footer>
            <ul>
            <li><a href="contact.php"><img src="correo.png" style="width: 50px;height: 50px"></a></li>
            <li><a href="https://www.instagram.com/_your_amigurumi/"><img src="ins.jpg" style="width: 50px;height: 50px"></a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100066425989963"><img src="fb.jpg" style="width: 50px;height: 50px"></a></li>
            </ul>
        </footer>
    </section>

</body>
</html>
