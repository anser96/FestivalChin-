<?php
session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {
  $records = $conn->prepare('SELECT id, user, pass FROM user WHERE id = :id');
  $records->bindParam(':id', $_SESSION['user_id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $user = null;

  if (count($results) > 0) {
    $user = $results;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/style.css" /> -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="icon" type="image/png" href="./img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="./css/materialize/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="./css/master.css">
	<title>Festival de Chinú</title>
</head>
<body>



  <nav class="green-fest z-depth-0">
    <div class="nav-wrapper">
    <a href="./index.php" class="brand-logo"> <img src="./img/logo.png" alt=""> </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <?php if (!empty($user)) : ?>
      <?= $user['user']; ?>
      <li><a class="waves-effect waves-light btn-large yellow-fest" href="logout.php">Cerrar Secion</a></li>
<?php else : ?>
  <h1>Please Login or SignUp</h1>

  <a href="login.php">Login</a> 
<?php endif; ?>

        
      </ul>
    </div>
  </nav>


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
                    <ul class="collapsible popout">
                      <li>
                        <div class="collapsible-header"><i class="material-icons">create</i>Crear Noticia</div>
                        <div class="collapsible-body">
                        <form name="form" method="post" action="insertar.php" enctype="multipart/form-data">
                              <label>Título
                              <input name="titulo" type="text" id="titulo" size="60" required>
                              </label>
                      
                              <label for="">Descripcion
                                <input name="descripcion" id="descripcion" data-length="80" required >
                              </label>
                              <p>
                                <label>Noticia <br>
                                <textarea name="noticia" cols="200" rows="20" id="noticia" class="materialize-textarea" data-length="6000"></textarea>
                                </label>
                              </p>
                              <div class="file-field input-field">
                                  <div class="btn">
                                    <span>Imagen</span>
                                    <input type="file" name="imagen" required>
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                  </div>
                                </div>
                                <button class="btn waves-effect waves-light" type="submit" name="guardar" id="guardar">Enviar
                                <i class="material-icons right">send</i>
                                </button>
                    
                                </form>

                          </div>
                        </li>

                        <li>
                        <div class="collapsible-header"><i class="material-icons">create</i>Editar Slider</div>
                        <div class="collapsible-body">
                        <form name="form" method="post" action="slider.php" enctype="multipart/form-data">
                              
                      
                             
                              
                              <div class="file-field input-field">
                                  <div class="btn">
                                    <span>Imagen</span>
                                    <input type="file" name="imagen" required>
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                  </div>
                                </div>
                                <button class="btn waves-effect waves-light" type="submit" name="guardar" id="guardar">Enviar
                                <i class="material-icons right">send</i>
                                </button>
                    
                                </form>

                          </div>
                        </li>
                        <li>
                        <div class="collapsible-header"><i class="material-icons">create</i>Crear Galeria</div>
                        <div class="collapsible-body">
                        <form name="form" method="post" action="insertarG.php" enctype="multipart/form-data">
                              <label>Título
                              <input name="titulo" type="text" id="titulo" size="60" required>
                              </label>
                      
                              <label for="">Reseña
                                <input name="descripcion" id="descripcion" data-length="80" required >
                              </label>
                              
                              <div class="file-field input-field">
                                  <div class="btn">
                                    <span>Imágen principal</span>
                                    <input type="file" name="imagen" required>
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                  </div>
                                </div>
                                <div class="file-field input-field">
                                  <div class="btn">
                                    <span>Imágen 1</span>
                                    <input type="file"  name="imagenA" required>
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                  </div>
                                </div>
                                <div class="file-field input-field">
                                  <div class="btn">
                                    <span>Imágen 2</span>
                                    <input type="file"  name="imagenB" >
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                  </div>
                                </div>
                                <div class="file-field input-field">
                                  <div class="btn">
                                    <span>Imágen 3</span>
                                    <input type="file"  name="imagenC" >
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                  </div>
                                </div>
                                <div class="file-field input-field">
                                  <div class="btn">
                                    <span>Imágen 4</span>
                                    <input type="file"  name="imagenD" >
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                  </div>
                                </div>
                                <div class="file-field input-field">
                                  <div class="btn">
                                    <span>Imágen 5</span>
                                    <input type="file"  name="imagenE" >
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                  </div>
                                </div>
                                
                                <button class="btn waves-effect waves-light" type="submit" name="guardar" id="guardar">Enviar
                                <i class="material-icons right">send</i>
                                </button>
                    
                                </form>

                          </div>
                        </li>
    
                      </ul>
                    
                  
                 
                 
                 

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



