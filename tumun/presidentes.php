<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Tu Municipio</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="../images/favicon.png">

  <!-- CSS
================================================== -->

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../ok.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="../plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="../plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="../plugins/slick/slick.css">
  <link rel="stylesheet" href="../plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="../plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="css/calendar.css">

</head>
<body>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.2.4/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.2.4/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
  <div class="body-inner">

   
<!-- Header start -->
<header id="header" class="header-two">
  <div class="site-navigation">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-light p-0">

            <div class="logo">
              <a class="d-block" href="../index">
                <img loading="lazy" src="../images/fav.png" alt="Constra">
              </a>
            </div><!-- logo end -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
              aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbar-collapse" class="collapse navbar-collapse">
              <ul class="nav navbar-nav ml-auto align-items-center">
              <ul class="nav navbar-nav ml-auto align-items-center">
                <li class="nav-item dropdown active">
                  <a href="../index" class="nav-link">Inicio </i></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">tu Municipio</a></li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tu Gobierno <i
                      class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="doc/ORGANIGRAMA_pdf_2020_6_4_164829.pdf" target="blank">Organigrama</a></li>
                    <li><a href="../reglaments">Reglamentos</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" target="blank" href="https://ruts.hidalgo.gob.mx/">TRAMITES</a></li>
                <li class="nav-item dropdown">
                  <a href="https://consultapublicamx.inai.org.mx/vut-web/faces/view/consultaPublica.xhtml" class="nav-link">Transparencia </a>
                </li>
                <li class="nav-item dropdown"><a href="../gaceta">Gaceta</a>                     
                </li>
                <li class="nav-item dropdown">
                  <a href="../sevac" class="nav-link dropdown-toggle" >LGCG7 </a>
                </li>
                <li class="nav-item dropdown">
                  <a href="../entregarec" class="nav-link">Entrega de Recepcion </a>
                </li>
                <li class="header-get-a-quote">
                  <a class="btn btn-primary" href="../cita">CITAS</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <!--/ Col end -->
      </div>
      <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(../images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Tu Municipio</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Conoce a detalle temas relacionados con tu municipio</a></li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <div class="col-xl-3 col-lg-4">
        <div class="sidebar sidebar-left">
          <div class="widget">
            <h3 class="widget-title">Dato interesante</h3>
            <ul class="nav service-menu">
              <li ><a href="../tumun.html">Nomenclatura</a></li>
              <li ><a href="historia">Historia</a></li>
              <li><a href="personajes">personajes Ilustres</a></li>
              <li><a href="Cronologiahh">Cronología de hechos Históricos</a></li>
              <li><a href="mediofisico">Medio Físico</a></li>
              <li><a href="turisrico">Atractivo Turístico</a></li>
              <li><a href="giobierno">Gobierno</a></li>
              <li class="active"><a href="#">Cronología de Presidentes</a></li>
            </ul>
          </div><!-- Widget end -->

        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

      <div class="col-xl-8 col-lg-8">
        <div class="content-inner-page">

          <h2 class="column-title mrt-0">Cronología de Presidentes</h2> <hr>
          <div class="row">
            <div class="col-md-12">
            <?php
                          require("../ok.php");
                          $query=mysqli_query($conn,"SELECT presidente, periodo From tbl_cronopresi;");
                          while($fila=mysqli_fetch_array($query)){        
                    echo '
                    <h4>'.$fila['presidente'].'</h4>
                    <p>'.$fila['periodo'].'</p>
                            ';
                          }
                          ?>
              
            </div><!-- col end -->
          </div><!-- 1st row end-->

          <div class="gap-40"></div>

        </div><!-- Content inner end -->
      </div><!-- Content Col end -->


    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<footer id="footer" class="footer bg-overlay">
  <div class="copyright">
    <div class="container"><div class="row align-items-center">
        <div class="col-md-6">
          <div class="copyright-info">
            <span>Copyright &copy;
              <script>
                document.write(new Date().getFullYear())
              </script>, Diseñado &amp; Desarrollado por <a href="https://www.instagram.com/juanbhmx/" target="_blank">Juan Bautista</a></span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="footer-menu text-center text-md-right">
            <ul class="list-unstyled mb-0">
              <li><a href="#">H. AYUNTAMIENDO XOCHIATIPAN, HGO.</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
        <button class="btn btn-primary" title="Back to Top">
          <i class="fa fa-angle-double-up"></i>
        </button>
      </div>

    </div><!-- Container end -->
  </div><!-- Copyright end -->
</footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script language="JavaScript" type="text/javascript" src="../jquery-3.5.1.js"></script>
  <script language="JavaScript" type="text/javascript" src="../cita.js"></script>
  <script src="../plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="../plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="../plugins/slick/slick.min.js"></script>
  <script src="../plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="../plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="../plugins/shuffle/shuffle.min.js" defer></script>
  <script src="../path/from/html/page/to/jquery.min.js"></script>

  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="../plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="../js/script.js"></script>
  <script src="../js/calendar.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>