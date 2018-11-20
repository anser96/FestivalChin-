<html lang="es" class="">

<head>
<?PHP
$host = "localhost"; 	//TU HOST//
$dbuser = "root";	 	//TU USUARIO DEL HOST//
	//TU CONTRASEÑA//
$db = "noticiasnews";		//TU BASE DE DATOS//
$connect = mysqli_connect ($host, $dbuser, '');
if(!$connect)
echo ("No se pudo conectar a la base de datos");
else
$select = mysqli_select_db($connect,$db);

if(isset($_POST["id"])){
	$id=$_POST["id"];
}
?>
<?
$consulta = "SELECT * FROM galeria ORDER BY id DESC";
$resultado = mysqli_query( $connect, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
 

?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Galleria</title>

    <!-- Lato Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">

    <!-- Stylesheet -->
    <link href="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/gallery-materialize.min.opt.css?10987616346994344605"
        rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="icon" type="image/png" href="./img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="./css/materialize/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="./css/master.css">


</head>

<body>

    <!-- Navbar and Header -->
    <nav class="nav">



        <!-- Fixed Masonry Filters -->
        <div class="categories-wrapper af lighten-1">
            <div class="categories-container orange" style="top: 0px;">
                <ul class="categories db">
                    <li class="k"><a href="#all">Todas</a></li>
                    <!-- <li class=""><a href="#polygon">Polygon</a></li>
                    <li class=""><a href="#bigbang">Big Bang</a></li>
                    <li class=""><a href="#sacred">Sacred Geometry</a></li> -->
                    <li><a href="./index.php">Inicio</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

    


    <!-- Gallery -->
    <div id="portafolio" class="cx gray">
        <div class="db">
            <div class="b e" style="position: relative; height: 5210.61px;">
               <?
               while($row=mysqli_fetch_array($resultado)){
               echo " <div class='d hx hf gu gallery-item gallery-expand polygon ce' style='position: absolute; left: 0px; top: 0px; display: block;'>";
                echo "    <div class='placeholder'>";
                echo "        <div class='gallery-curve-wrapper'>";
                 echo "           <a class='gallery-cover gray'>";
                   echo"             <img class='responsive-img' src='$row[imagen]' alt='placeholder' crossorigin='anonymous'>";
                         echo "   </a>";
                           echo " <div class='gallery-header'>";
                              echo "  <span>$row[titulo]</span>";
                          echo "  </div>";
                            echo " <div class='gallery-body' style='margin-top: 211px; padding: 40px; min-height: 458px; display: none;'>";
                             echo "   <div class='title-wrapper' style=''>";
                                echo"    <h3>$row[descripcion]</h3>";

                              echo "  </div>";
                               echo " <p class='fi'>";
                                  echo " </p>";

                                  echo "    <div class='row'>";
                                  echo "    <div class='col l12 m12 s12'>";
                                  echo "     <div class='row'>";
                                  echo "        <div class='col s12 l12 m12'>";
                                  echo "             <div class='card hoverable'>";
                                  echo "                 <div class='card-image'>";
                                  echo "                   <img width=''  src='$row[imagenA]'>";
                                  echo "<br>";
                                  echo "                   <img width=''  src='$row[imagenB]'>";
                                  
                                  echo "                 </div>";
                                  echo "            </div>";
                                  echo "        </div>";
                                  echo "    </div>";
                                 

                                    echo "   </div>";

                                    echo "   </div>";

                                    echo "   </div>";

                                    echo "  </div>";
                                    echo "   </div>";

                                    echo "  </div>";
               }
                ?>
                


            </div>


        </div>

    </div>

    <!-- /.container -->

    <div class="divider"></div>

	<footer class="page-footer white">

		<div class="row">


			<div class="col l3 s12 m3">
				<a href="http://www.chinu-cordoba.gov.co/Paginas/Inicio.aspx" target="_blank">
					<img src="./img/municipio.png" height="60px" alt="">
				</a>

			</div>
			<div class="col l3 s12 m5">
				<a href="http://www.synergytech.com.co/" target="_blank">
					<img src="./img/logosynergy.png" height="60x" alt="">
				</a>

			</div>
			<div class="col l3 s12 m4">
				<a href="http://www.cordoba.gov.co/" target="_blank">
					<img src="./img/gobernacionCodroba.png" height="60px" alt="">
				</a>

			</div>
			<div class="col l2 s12 m6">
				<a href="https://www.grupobancolombia.com/wps/portal/personas" target="_blank">
					<img src="./img/bancolombia.png" height="80px" alt="">
				</a>

			</div>
			<div class="col l1 s12 m6">
				<a href="http://licosinu.com/" target="_blank">
					<img src="./img/logo_licosinu.png" height="60px" alt="">
				</a>

			</div>



		</div>
		<div class="footer-copyright">
			<div class="container black-text">
				© Copyright Text
				<a class="grey-text right" href="#!">Página diseñada por SynergytTech</a>
			</div>
		</div>
	</footer>
    <!-- Core Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/gallery.min.opt.js?10987616346994344605" crossorigin="anonymous"></script>


    <iframe src="/17758583/digital_wallets/dialog" scrolling="no" tabindex="-1" aria-hidden="true" style="position: fixed; top: 0px; left: 0px; z-index: 99999; height: 0px; width: 0px; border: 0px;"></iframe>
    <div class="hiddendiv common"></div>
    <div class="drag-target" data-sidenav="nav-mobile" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
</body>

</html>