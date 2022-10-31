<?php
/*mantener la sesion activa nota:pegar en cada pagina que este dentro del inicio de sesion*/
session_start();
error_reporting(0);
$_SESSION['Email'];
$vsesion = $_SESSION['Email'];
if ($vsesion == null || $vsesion = '') {
	/*alerta de no inicio de sesion*/
	echo '<script language="javascript">alert("Debes iniciar sesion");window.location.href="Login.html"</script>';
	
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>Adoptar</title>
    <!-- font icons -->
    <link rel="stylesheet" href="./vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="./css/leadmark.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Menu de navegacion -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/imgs/Logo.ico" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                     
                    <li class="nav-item">
                        <a href="index.html" class="ml-4 nav-link btn btn-primary btn-sm rounded">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="Catalogo.html" class="ml-4 nav-link btn btn-primary btn-sm rounded">Catalogo</a>
                    </li>
                    <li class="nav-item">
                        <a href="./php/Destruir_Sesion.php" class="ml-4 nav-link btn btn-primary btn-sm rounded">Cerrar Sesión</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="title">Adopta</h1>
            <h1 class="subtitle">Adopta una mascota</h1>
        </div>
    </header>
    <!-- End Of Page Header -->
    <!-- Portfolio Section -->
    <section id="portfolio" class="section portfolio-section">
        <div class="container">
            <h6 class="section-title text-center">Encuentra a un amigo</h6>
            <h6 class="section-subtitle mb-5 text-center">¡Adopta ya!</h6>
            <div class="filters">
                <a href="#" data-filter=".perro" class="active">
                    Perros
                </a>
                <a href="#" data-filter=".gato">
                    Gatos
                </a>
            </div>
            <div class="portfolio-container"> 
                <div class="col-md-6 col-lg-4 web perro">
                    <div class="portfolio-item">
                        <img src="./imgs/Perro1.webp" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Firulais</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                <button type="submit" class="btn btn-primary rounded w-md mt-3">Adoptar</button>
                            </div>
                        </div>   
                    </div>             
                </div>
                <div class="col-md-6 col-lg-4 web perro">
                    <div class="portfolio-item">
                        <img src="./imgs/Perro4.jpeg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">WEB</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div> 
                    </div>                         
                </div>
                <div class="col-md-6 col-lg-4 web perro">
                    <div class="portfolio-item">
                        <img src="./imgs/Perro7.jpeg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
                        <div class="content-holder">
                            <a class="img-popup" href="./imgs/advertising-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">ADVERSTISING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>    
                    </div>              
                </div> 
                <div class="col-md-6 col-lg-4 perro">
                    <div class="portfolio-item">
                        <img src="./imgs/Perro5.jpeg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="./imgs/web-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">WEB</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                     
                </div>

                <div class="col-md-6 col-lg-4 gato"> 
                    <div class="portfolio-item">
                        <img src="./imgs/Gato1.jpeg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
                        <div class="content-holder">
                            <a class="img-popup" href="./imgs/advertising-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">ADVERSITING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                       
                </div> 
                <div class="col-md-6 col-lg-4 web gato">
                    <div class="portfolio-item">
                        <img src="./imgs/Gato2.jpeg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                       <div class="content-holder">
                            <a class="img-popup" href="./imgs/web-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">WEB</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                     
                </div>
                <div class="col-md-6 col-lg-4 advertising gato">
                    <div class="portfolio-item">
                        <img src="./imgs/Gato3.jpeg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">       
                       <div class="content-holder">
                            <a class="img-popup" href="./imgs/advertising-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">ADVERSITING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                       
                </div> 
                <div class="col-md-6 col-lg-4 advertising gato"> 
                    <div class="portfolio-item">
                        <img src="./imgs/Gato4.jpeg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">            
                        <div class="content-holder">
                            <a class="img-popup" href="./imgs/advertising-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">ADVERTISING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                            
                </div>               
               
            </div>   
        </div>            
    </section>
    <!-- End of portfolio section -->
	<!-- core  -->
    <script src="./vendors/jquery/jquery-3.4.1.js"></script>
    <script src="./vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="./vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="./vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="./js/leadmark.js"></script>
</body>

</html>