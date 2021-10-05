<!DOCTYPE html>
<html lang="es">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>¿Que hacer? | Xochiatipan</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/option.js"></script>
<script type="text/javascript" src="js/alertify.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="icon" type="image/png" href="images/favicon.png">
<!-- Latest compiled and minified CSS -->

<!-- Latest compiled and minified JavaScript -->


<!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <div class="body-inner">
   <!-- Header start -->
   <header id="header" class="header-two">
    <div class="site-navigation">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light p-0">

              <div class="logo">
                <a class="d-block" href="index-2.html">
                  <img loading="lazy" src="images/logo.png" alt="Constra">
                </a>
              </div><!-- logo end -->

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div id="navbar-collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav ml-auto align-items-center">
                <li class="nav-item dropdown active">
                      <a href="index" class="nav-link">Inicio </i></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="tumun">tu Municipio</a></li>
                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tu Gobierno <i
                          class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="doc/ORGANIGRAMA_pdf_2020_6_4_164829.pdf" target="blank">Organigrama</a></li>
                        <li><a href="reglaments">Reglamentos</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" target="blank" href="https://ruts.hidalgo.gob.mx/">TRAMITES</a></li>
                    <li class="nav-item dropdown">
                      <a href="https://consultapublicamx.inai.org.mx/vut-web/faces/view/consultaPublica.xhtml" class="nav-link">Transparencia </a>
                    </li>
                    <li class="nav-item dropdown"><a href="gaceta">Gaceta</a>                     
                    </li>
                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" >LGCG7 </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="entregarec" class="nav-link">Entrega de Recepcion </a>
                    </li>
                    <li class="header-get-a-quote">
                      <a class="btn btn-primary" href="cita">CITAS</a>
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
 
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">¿Que hacer?</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Xochiatipan Hidalgo</a></li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 



<section id="news" class="news">
  <div class="container">
    <div class="row">
    <?php
                          require("ok.php");
                          $query=mysqli_query($conn,"SELECT nombre, descr, imagen From tbl_quehacer;");
                          while($fila=mysqli_fetch_array($query)){        
                    echo '
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="#" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="'.$fila['imagen'].'" alt="img">
                </a>
              </div>
              <div class="post-body">
              <h4 class="post-title">
                   <p>'.$fila['nombre'].' </p> 
                </h4>
                   <p>'.$fila['descr'].' </p> 
                <div class="latest-post-meta">
                    <span class="post-item-date"> 
                    </span>
                </div>
              </div>
          </div>
        </div> <hr/>
        ';
        }
    ?>
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section>




<footer id="footer" class="footer bg-overlay">
     

  <div class="copyright">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="copyright-info">
            <span>Copyright &copy;
              <script>
                document.write(new Date().getFullYear())
              </script>, Designed &amp; Developed by <a href="https://instagram.com/@juanbhmx">Juan Bautista</a></span>
          </div>
        </div>

        <div class="col-md-6">
          <div class="footer-menu text-center text-md-right">
           
          </div>
        </div>
      </div><!-- Row end -->

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
<script src="js/option.js"></script>
<!-- initialize jQuery Library -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap jQuery -->
<script src="plugins/bootstrap/bootstrap.min.js" defer></script>
<!-- Slick Carousel -->
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/slick/slick-animation.min.js"></script>
<!-- Color box -->
<script src="plugins/colorbox/jquery.colorbox.js"></script>
<!-- shuffle -->
<script src="plugins/shuffle/shuffle.min.js" defer></script>


<!-- Google Map API Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<!-- Google Map Plugin-->
<script src="plugins/google-map/map.js" defer></script>

<!-- Template custom -->
<script src="js/script.js"></script>

</div><!-- Body inner end -->
</body>

</html>