<!DOCTYPE html>
<html lang="es">

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
?>

<?
$consulta = "SELECT * FROM noticias";
#$consulta2 = "SELECT * FROM noticias WHERE id='$_POST[id]'";
#$resultado2 = mysqli_query( $connect, $consulta2) or die ("la consulta no sirve joder");
$resultado = mysqli_query( $connect, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
?>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/png" href="./img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="./css/materialize/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="./css/master.css">
    <title>Festival de Chinú</title>
</head>

<body>
    <!-- NAV -->
    <div class="navbar-fixed">
        <nav class="green-fest z-depth-0">
            <div class="nav-wrapper">
                <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                    <i class="material-icons">menu</i>
                </a>
                <a href="./index.php" class="brand-logo"> <img src="./img/logo.png" alt=""> </a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="nav navText" href="#!" data-target="dropdown1">Quienes Somos<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="nav navText" href="#!" data-target="dropdown2">Reseña Histórica<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="nav navText" href="#!" data-target="dropdown3">Concursos<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="navText" href="./programacion.html">Programación</a></li>
                    <li><a class="navText" href="./noticias.html">Noticias</a></li>
                    <li><a class="navText" href="./juntaD.html">Galería</a></li>

                    <li><a class="navText" href="./contacto.html">Contacto</a></li>
                    <li><a class="waves-effect waves-light btn-large yellow-fest" href="./inscripcion.html">Inscríbete</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- SIDENAV -->
    <ul class="sidenav collapsible" id="mobile-nav">
        <li>
            <div class="collapsible-header">Quienes Somos<i class="material-icons">arrow_drop_down</i></div>
            <div class="collapsible-body ">
                <ul>
                    <li><a href="./juntaD.html">Junta Directiva</a></li>
                    <!-- <li><a href="#!">Presidentes</a></li> -->
                </ul>
            </div>

        </li>
        <li>
            <div class="collapsible-header">Reseña Histórica<i class="material-icons">arrow_drop_down</i></div>
            <div class="collapsible-body ">
                <ul>
                    <li><a href="#!">Historia del Festival</a></li>
                    <li><a href="#!">Homenajeados</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="collapsible-header">Concursos<i class="material-icons">arrow_drop_down</i></div>
            <div class="collapsible-body ">
                <ul>
                    <li><a href="./reglamento.html">Reglamentos</a></li>
                    <li><a href="./concursos.html">Concursos a Realizar</a></li>
                    <li><a href="./premios.html">Premios</a></li>
                </ul>
            </div>

        </li>
        <li><a href="./programacion.html">Programación</a></li>
        <li><a href="#!">Noticias</a></li>
        <li><a href="#!">Galería</a></li>
        <li><a href="./contacto.html">Contáctenos</a></li>
        <li><a href="./inscripcion.html">Inscríbete</a></li>
        <li>
            <div class="divider"></div>
        </li>
    </ul>

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content green-fest">
        <li><a href="./juntaD.html">Junta Directiva</a></li>
        <!-- <li><a href="#!">Presidentes</a></li> -->
    </ul>
    <ul id="dropdown2" class="dropdown-content green-fest">
        <li><a href="#!">Historia del Festival</a></li>
        <li><a href="#!">Homenajeados</a></li>
    </ul>
    <ul id="dropdown3" class="dropdown-content green-fest">
        <li><a href="./reglamento.html">Reglamentos</a></li>
        <li><a href="./concursos.html">Concursos a Realizar</a></li>
        <li><a href="./premios.html">Premios</a></li>
    </ul>

    <!-- Content -->

<div class="fixed-action-btn">
		<a class="btn-floating btn-large red" href="https://gator3185.hostgator.com:2096/" target="_blank"> 
		  <i class="large material-icons">mail</i>
		</a>
		
	  </div>

    <div class="row">
        <div class="container">
            <main class="col s12 m8 l9">
                <img src="./img/NOTICIAS.png" height="100px" alt="" class="responsive-img programacion">
                <div class="row ">
                    <div class="col l12 m12 s12">
                    <?
				
				while($row=mysqli_fetch_array($resultado)){

				
				
			echo "	<div class='col l12 m12 s12'>";
			echo "  	<div class='card hoverable'>";
			echo "			<div class='card-image noticia'>";
			echo "				<img src='$row[imagen]' alt=''>";
			echo "				<div class='card-content'>";
			echo "					<h6> <b> $row[titulo] </b></h6>";
            echo "					<p>$row[descripcion]</p>";
             echo "                           <ul class='collapsible'>";
             echo"                               <li>";
               echo "                                 <div class='collapsible-header'><i class='material-icons'>expand_more</i></div>";
                                              
                  
                                               
                  echo "                              <div class='collapsible-body'>";
                  echo "                                 <p>$row[noticia]</p>";
                  echo "                              </div>";
                  echo "                         </li>";
                  echo "                      </ul>";
            
			echo "				</div>";
							
			echo "	</div>";
			echo "		</div>";
			echo "	</div>";

			
				}
                ?>
                  
                 
                 
                 

                </div>

            </main>
        </div>

        <aside class="section">
            <!-- InstaWidget -->
            <div class="row">
                <div class="col s12 m4 l3">
                    <div class="card z-depth-0">
                        <a href="https://instawidget.net/v/user/festivaldechinu" id="link-69c8195731666a8b272387a4057d19645d9a9da1f70c8fc304788b54c482406e">@festivaldechinu</a>
                        <script src="https://instawidget.net/js/instawidget.js?u=69c8195731666a8b272387a4057d19645d9a9da1f70c8fc304788b54c482406e&width=100%&height=100px"></script>
                        <div class="fb-page" data-href="https://www.facebook.com/Festivalchinu/" data-tabs="timeline"
                            data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                            data-show-facepile="true" style="width: auto; height: auto;">
                            <blockquote cite="https://www.facebook.com/Festivalchinu/" class="fb-xfbml-parse-ignore"
                                style="width: auto; height: 100%">
                                <a href="https://www.facebook.com/Festivalchinu/">Festival de Acordeoneros y
                                    Compositores de
                                    Chinú</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>

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

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="./js/materialize/materialize.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

</body>

</html>