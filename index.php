<?php
    include("ok.php");
    
    $sql = "SELECT * FROM tbl_convoc where imagen ORDER BY imagen DESC"; 
    $result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Xochiatipan Hidalgo</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">


  <link rel="icon" type="image/png" href="images/favicon.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">

  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">

  <link rel="stylesheet" href="plugins/animate-css/animate.css">

  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">

  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">

  <link rel="stylesheet" href="css/style.css">

</head>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v9.0" nonce="bieNMbMB"></script>
<body>
  <div class="body-inner">
  
    <header id="header" class="header-two">
      <div class="site-navigation">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">

                <div class="logo">
                    <img loading="lazy" src="images/fav.png" alt="Constra">
                  </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbar-collapse" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav ml-auto align-items-center">
                    <li class="nav-item dropdown active">
                      <a href="#" class="nav-link">Inicio </i></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="tumun.html">tu Municipio</a></li>
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
                      <a href="sevac" class="nav-link dropdown-toggle" >LGCG7 </a>
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
            
          </div>
          
        </div>
        

      </div>
      
    </header>
    

    <div class="banner-carousel banner-carousel-2 mb-0">

                          <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg5.jpg)">
                          <?php
                          require("ok.php");
                          $query=mysqli_query($conn,"SELECT titulo, sub, texto From tbl_aviso;");
                          while($fila=mysqli_fetch_array($query)){        
                    echo '
                            <div class="container">
                              <div class="box-slider-content">
                                <div class="box-slider-text">
                                  <h3 class="box-slide-sub-title">'.$fila['titulo'].'</h3>
                                  <h2 class="box-slide-title">'.$fila['sub'].'</h2>
                                  <p class="box-slide-description">'.$fila['texto'].'</p>
                                </div>
                              </div>
                            </div>
                            ';
                          }
                          ?>
                          </div>

      <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg4.jpg)">
      <?php
                          require("ok.php");
                          $query=mysqli_query($conn,"SELECT titulo, sub, texto From tbl_aviso;");
                          while($fila=mysqli_fetch_array($query)){        
                    echo '
                            <div class="container">
                              <div class="box-slider-content">
                                <div class="box-slider-text">
                                  <h3 class="box-slide-sub-title">'.$fila['titulo'].'</h3>
                                  <h2 class="box-slide-title">'.$fila['sub'].'</h2>
                                  <p class="box-slide-description">'.$fila['texto'].'</p>
                                </div>
                              </div>
                            </div>
                            ';
                          }
                          ?>
      </div>
    </div>



    <section id="ts-features" class="ts-features pb-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="ts-service-box">
              
              <div class="d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/fact4.png" alt="service-icon" />
                </div>
                <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="dondeir">¿a DONDE IR?</a></h3>
                  <p>Los mejores lugares para visitar.</p>
                  <a class="learn-more d-inline-block" href="dondeir" aria-label="service-details"><i
                      class="fa fa-caret-right"></i> Leer mas</a>
                </div>
              </div>
            </div><!-- Service1 end -->
          </div><!-- Col 1 end -->

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="ts-service-box">
             
              <div class="d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/fact3.png" alt="service-icon" />
                </div>
                <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="quehacer">¿QUE HACER?</a></h3>
                  <p>Aqui inicia tu próxima aventura.</p>
                  <a class="learn-more d-inline-block" href="quehacer" aria-label="service-details"><i
                      class="fa fa-caret-right"></i> leer mas</a>
                </div>
              </div>
            </div><!-- Service2 end -->
          </div><!-- Col 2 end -->

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="ts-service-box">
              
              <div class="d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon" />
                </div>
                <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="hospedaje">¿DONDE HOSPEDARSE?</a></h3>
                  <p>Hoteles y Restaurantes para vacacionar.</p>
                  <a class="learn-more d-inline-block" href="hospedaje" aria-label="service-details"><i
                      class="fa fa-caret-right"></i> leer mas</a>
                </div>
              </div>
            </div><!-- Service3 end -->
          </div><!-- Col 3 end -->
        </div><!-- Content row end -->
      </div><!-- Container end -->
    </section><!-- Feature are end -->

    <section id="facts" class="facts-area dark-bg">
      <div class="container">
        <div class="row text-center">
          
          <div class="col-lg-12">
            <h3 class="section-sub-title">Noticias Recientes</h3>
            <h2 class="section-title">Xochiatipan te informa</h2>
          </div>
           
        </div><!-- Content row end -->
   </div><!-- Container end -->
</section><!-- Feature are end -->
     


    </section><!-- Facts end -->

<!-- inicia noticia      -->      


<section id="main-container" class="main-container">
  <div class="container">

    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="post-content">
          <div id="testimonial-slide" class="testimonial-slide">
            <?php
                      require("ok.php");
                      $query=mysqli_query($conn,"SELECT titulo, fecha, descr, imagen, autor From tbl_noticias ORDER BY fecha DESC;");
                      while($fila=mysqli_fetch_array($query)){
                        echo '
                <div class="quote-item">
                    <div class="post-media post-image">
                     <img loading="lazy" src="'.$fila['imagen'].'" class="img-fluid" alt="post-image">
                    </div>
                     <div class="post-body">
                      <div class="entry-header">
                        <div class="post-meta">
                          <span class="post-author"><i class="far fa-user"></i><a href="#"> '.$fila['autor'].'</a></span>
                          <span class="post-cat"><i class="far fa-folder-open"></i><a href="#"> Noticia</a></span>
                          <span class="post-meta-date"><i class="far fa-calendar"></i>Fecha de Publicación: '.$fila['fecha'].'</span>
                        </div>
                      <h2 class="entry-title">'.$fila['titulo'].'</h2>
                    </div>
                    <div class="entry-content">'.$fila['descr'].'</div>
                  <hr/>
                </div>
              </div>
              ';
              }
            ?>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="sidebar sidebar-right">
            <div class="widget recent-posts">
              <h3 class="widget-title">Convocatorias</h3>
              <ul class="list-unstyled">
                  <?php
                            require("ok.php");
                            $query=mysqli_query($conn,"SELECT descripcion, imagen, fecha From tbl_convoc ORDER BY fecha DESC;");
                            while($fila=mysqli_fetch_array($query)){
                              
                              echo '
                    <li class="d-flex align-items-center">
                      <div class="posts-thumb"><a href="'.$fila['imagen'].'"><img loading="lazy" alt="img" src="'.$fila['imagen'].'"></a></div>
                      <div class="post-info"><h4 class="entry-title"><a>'.$fila['descripcion'].'</a></h4></div>
                    </li>
                    ';
                  }
                  ?>
              </ul>

          </div><!-- Recent post end -->
        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

    </div><!-- Main row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->



<!-- termina noticia             -->


<section id="main-container" class="main-container">
    <div class="container"><hr/>
      <div class="col-12">
        <div class="general-btn text-center">
              
              
            </div>
          </div>
          <div class="col-lg-12">
          <h3 class="column-title">Quejas</h3>
          <div id="testimonial-slide" class="testimonial-slide">
           <?php
                      require("ok.php");
                      $query=mysqli_query($conn,"SELECT motivo, mensaje, fecha From tbl_buzon ORDER BY fecha DESC;");
                      while($fila=mysqli_fetch_array($query)){
                        echo '
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">'.$fila['mensaje'].'</span>
                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/anon.png" alt="buzon">
                      <div class="quote-item-info"><h3 class="quote-author">Anonimo</h3>
                          <span class="quote-subtext">'.$fila['motivo'].'</span><br>
                          <span class="quote-subtext">'.$fila['fecha'].'</span>
                      </div>
                    </div>
                </div>
              </div>
              ';
            }
            ?>
          </div><hr/>
        </div>
      </div>
    </div>
  </section>
  
    <section id="news" class="news">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">escribenos de manera anonima</h2>
            <h3 class="section-sub-title">Buzon y quejas</h3>
          </div>
        </div>
        <div class="gap-10"></div>
<div class="row">
  <div class="col-md-12">
    <h3 class="column-title">tus datos se encriptaran al enviar.</h3>
    <div class="alert alert-primary alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
    <form id="fupForm" name="form1" method="post">
      <div class="error-container"></div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Email</label>
            <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email"
              required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Motivo</label>
            <input class="form-control form-control-subject" name="motivo" id="motivo" placeholder="" required>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Mensaje</label>
        <textarea class="form-control form-control-message" name="mensaje" id="mensaje" placeholder="" rows="10"
          required></textarea>
      </div>
      <div class="general-btn text-center mt-4">
      <button class="btn btn-primary solid blank" id="myBtn" type="submit" name="Submit">Enviar</button>
        </div>
    </form>
  </div>

</div>
</div>


      </div>
    
    </section>
  
   
<script>
window.onload = function () {
    Cargar();    
}
$(document).ready(function() {
	$('#myBtn').on('click', function() {
		$("#myBtn").attr("disabled", "disabled");
		var email = $('#email').val();
		var motivo = $('#motivo').val();
		var mensaje = $('#mensaje').val();
		if(email!="" && motivo!="" && mensaje!=""){
			$.ajax({
				url: "enviaqueja.php",
				type: "POST",
				data: {
					email: email,
					motivo: motivo,
					mensaje: mensaje,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
            
						$("#myBtn").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Gracias por Opinar!'); 
            $('#email').val('');
            $('#motivo').val('');
            $('#mensaje').val('');
					}
					else if(dataResult.statusCode==201){
					   alert("Ha ocurrido un error");
					}
					
				}
			});
		}
		else{
      
			alert('Por Favor llena los campos vacios !');
		}
	});
});


</script> 
<footer id="footer" class="footer bg-overlay">
  <div class="copyright">
    <div class="container">
    
      <div class="row align-items-center">
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
   </div>
  </div>
</footer>
  <script language="JavaScript" type="text/javascript" src="jquery-3.5.1.js"></script>
  <script src="plugins/jQuery/jquery.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <script src="plugins/shuffle/shuffle.min.js" defer></script>
  <script src="path/from/html/page/to/jquery.min.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <script src="plugins/google-map/map.js" defer></script>
  <script src="js/script.js"></script>
  </body>
  </html>