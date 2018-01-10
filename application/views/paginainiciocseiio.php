<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>CSEIIO - Noticias</title>
  <!-- HOJA DE ESTILO BOOTSTRAP-->
  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- HOJA DE ESTILO PERSONALIZABLE -->
  <link href="<?php echo base_url(); ?>/assets/css/cseiiostyles.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
  <link rel="icon"  href="<?php echo base_url(); ?>/assets/img/favicon.ico" >
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body>
        <br>

        
        <ul class="nav navbar-right top-nav">
          <li class="dropdown">
            <ul class="nav nav-tabs">
              <li class="dropdown">
                <a style="color: #d60071;" href="#" data-toggle="dropdown" data-hover="dropdown" ><i class="fa fa-user"></i> <?php echo $this->session->userdata('user'); ?></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo base_url() ?>Login/salir"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        
        <br>
        <!-- LOGOS DEL GOBIERNO DEL ESTADO -->
        <div style="text-align: center; clear:both;">
          <img style="text-align: center; background-size: cover;"  src="<?php echo base_url(); ?>/assets/img/header.png" >
        </div>
        <br>
        <!-- MENU -->
        <br>
        <div class="container">
          <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
              <ul class="nav nav-tabs">
                <li class="active"><a href="<?php echo base_url(); ?>">Inicio</a></li>
                <li><a href="<?php echo base_url(); ?>CatalogoNoticias" >Todas las Noticias</a></li>
                <li><a href="<?php echo base_url(); ?>PaginaInicioCseiio" >Vista Previa en Pagina Inicial</a></li>
              </ul>
            </div>
          </div>
        </div>
        <header id="myCarousel" class="carousel slide">
          <!-- INDICADORES OOO DE SLIDER -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>

          <!-- SLIDER -->

          <div class="carousel-inner" role="listbox">
            
            <?php foreach ($noticias as $row) { 
              if ($row ) {
                                # code...
              }
              ?>
              <div class="item ">
                <div class="fill">
                  
                </div>
              </div>

              
              <img style="height:100%; width: 100%" src="<?php echo base_url().'sliders/'.$row->slider; ?>"/>

              <?php }  ?>

            </div>

            <!-- CONTROLES DE SLIDER -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left"></span>

           </a>
           <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </header>

        <br>

        <div class="container">
          <!-- INFORMACION GENERAL-->

          <div class="row">
            <div class="col-lg-12">
              <h1 style="text-align: center; color: #737373; font-weight: bold;" class="page-header">
                Colegio Superior para la Educación Integral Intercultural de Oaxaca
              </h1>
            </div>
            <!-- SLIDER DE CONVOCATORIAS: TAMAÑO DE IMAGEN 700 X 400 -->
            <div class="col-md-4 portfolio-item">
              <div id="convocatorias" class="carousel slide" data-ride="carousel">
                <!-- Galeria de imagenes -->
                <div class="carousel-inner">
                  <div class="item active">
                    <a target="_blank" href="http://www.cseiio.edu.mx/descargas/2016/dictamen_cambiosypermutas_novi2016.pdf">
                      <img class="img-responsive"  src="<?php echo base_url(); ?>/assets/img/convocatoria/convocatoria1.png" alt="Conv1">
                    </a>    
                  </div>

                  <div class="item">
                    <a target="_blank" href="http://www.cseiio.edu.mx/descargas/2016/certidems_2016.pdf">
                      <img class="img-responsive" src="<?php echo base_url(); ?>/assets/img/convocatoria/convocatoria2.png" alt="Conv2">
                    </a>  
                  </div>

                  <div class="item">
                    <a target="_blank" href="http://www.cseiio.edu.mx/descargas/2016/convocaieepo.pdf">
                      <img class="img-responsive" src="<?php echo base_url(); ?>/assets/img/convocatoria/convocatoria3.png" alt="Conv3">
                    </a>
                  </div>

                  <div class="item">
                    <a target="_blank" href="http://www.cseiio.edu.mx/descargas/2015/prevencion.pdf">
                      <img class="img-responsive" src="<?php echo base_url(); ?>/assets/img/convocatoria/convocatoria4.png" alt="Conv4">
                    </a>
                  </div>

                  <div class="item">
                   <a href="convocatorias/resultadosuesa.html">
                     <img class="img-responsive" src="<?php echo base_url(); ?>/assets/img/convocatoria/convocatoria5.png" alt="Conv5">
                   </a>
                 </div>
               </div>
               <!-- Controls -->
               <a class="left carousel-control" href="#convocatorias" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#convocatorias" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
            <h3>
              <a href="#">Convocatorias</a>
            </h3>
            <p>Conoce todas las Convocatorias que el CSEIIO tiene para ti, estas pueden ser de ayuda para diversos tramites e información.</p>
          </div>
          <!-- SERVICIOS EN LINEA -->
          <div class="col-md-4 portfolio-item">
            <a href="sistemascseiio.html">
              <img class="img img-responsive" src="<?php echo base_url(); ?>/assets/img/sistemas.png" alt="">
            </a>
            <h3>
              <a href="sistemascseiio.html">Servicios en Línea</a>
            </h3>
            <p>Accede a todos los sistemas que el CSEIIO ofrece, como lo es, SISE, Biblioteca Virtual, Asistencias, etc..</p>
          </div>
          <!-- SLIDER DE CONOCE MAS TAMAÑO DE IMAGEN 700 X 400-->
          <div class="col-md-4 portfolio-item">
           <div id="conocemas" class="carousel slide" data-ride="carousel">
            <!-- Galeria de imagenes -->
            <div class="carousel-inner">
              <div class="item active">
                <a href="escudocseiio.html">
                  <img class="img-responsive"  src="<?php echo base_url(); ?>/assets/img/conocemas/escudo.png" alt="Escudo CSEIIO">
                </a>
              </div>
              <div class="item">
                <a target="_blank"  href="http://www.cseiio.edu.mx/attciudadana/manualdeprocedimiento_cseiio.pdf">
                  <img class="img-responsive" src="<?php echo base_url(); ?>/assets/img/conocemas/manual.png" alt="Manual de Organización">
                </a>
              </div>
              <div class="item">
               <a href="cobertura/mapa.html">
                <img class="img-responsive" src="<?php echo base_url(); ?>/assets/img/conocemas/mapaplanteles.png" alt="Mapa de los Planteles">
              </a>
            </div>
            <div target="_blank"  class="item">
              <a href="http://www.cseiio.edu.mx/attciudadana/reglamento_cseiio.pdf">
                <img class="img-responsive" src="<?php echo base_url(); ?>/assets/img/conocemas/reglamento.png" alt="Reglamento Interno">
              </a>
            </div>
            <div target="_blank" class="item">
              <a href="http://www.ceppemsoax.com/catalogo/index.php">
                <img class="img-responsive" src="<?php echo base_url(); ?>/assets/img/conocemas/CEPPEMS.png" alt="CEPPEMS">
              </a>
            </div>
            <div class="item">
              <a target="_blank"  href="http://www.cseiio.edu.mx/attciudadana/calendario2016-2017.pdf">
                <img class="img-responsive" src="img/conocemas/calendariobics.png" alt="Calendario BICS">
              </a>
            </div>
            <div class="item">
              <a target="_blank"  href="http://www.cseiio.edu.mx/attciudadana/calendariouesa2016_2017.pdf">
               <img class="img-responsive" src="<?php echo base_url(); ?>/assets/img/conocemas/calendariouesa.png" alt="Calendario UESA">
             </a>
           </div>
         </div>
         <!-- Controls -->
         <a class="left carousel-control" href="#conocemas" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#conocemas" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
      <h3>
        <a href="#">Conoce más sobre el CSEIIO</a>
      </h3>
      <p>¡Somos Oaxaca, Somos interculturalidad, Somos CSEIIO!.</p>
    </div>

  </div>

  <br><br>
  <!-- SECCION DE NOTICIAS -->
  <div class="container">
    <div class="col-lg-12">
      <h2 style="text-align: center; color: #737373; font-weight: bold;" class="page-header">Noticias</h2>
    </div>
    <div class="row">
      <form action="" name="busqueda_form" method="POST">
       <?php foreach ($noticias as $row) {
         ?>
         <div class="row">
          <!-- NOTICIA 1 -->
          <div class="col-md-6 portfolio-item">
            <a href="#">
              <img style="height: 300px; width: 500px;" src="<?php echo base_url().'resourcesimg/'.$row->imagenMiniatura; ?>"/>
            </a>
            <h3>
              <a style="text-align: center;" href="#"><?php echo $row->titulo_miniatura; ?></a>
            </h3>
            <p><?php echo $row->descripcion; ?></p>
            <a href="<?php echo base_url()?>BusquedaNoticia/ConsultarNoticia/<?php echo $row->id; ?>">
              <center>
                <button  type="button" class="btn btn-success" >
                 Leer Más
               </button>
             </center>  
           </a>
           <br>
         </div>

         <?php } ?>
       </div>

     </form>
   </div>


 </div>
 <!-- /.container -->
 <br>
 <!-- PIE DE PAGINA-->
 <footer>
  <div class="row">
    <div>
      <br>
      <p>Colegio Superior para la Educación Integral Intercultural de Oaxaca</p>
      <p>Gobierno del Estado de Oaxaca - 2016 - 2022</p>
      <p>Calle Palmeras #304, Colonia Reforma, C.P.  68050, Oaxaca, México</p>
      <p>(951) 520 39 24 y 520 39 25</p>
      <p>www.cseiio.edu.mx</p>
    </div>
  </div>
</footer>
<!-- Jquery -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>

<!-- Core JS para Bootstrap -->
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

<!-- Script para activar el Slider -->
<script>
  $('.carousel').carousel({
        interval: 5000 //Velocidad de aparicion de imagenes
      })
    </script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-hover-dropdown.js"></script>

    <script>
    // very simple to use!
    $(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
  </script>
  <!-- Script para activar el Slider de Galeria -->
  <script>
    function openModal() {
      document.getElementById('myModal').style.display = "block";
    }

    function closeModal() {
      document.getElementById('myModal').style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" actives", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " actives";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
      </script>

    </body>

    </html>

    <!-- Modal de galeria -->
    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">

        <div class="mySlides">
          <div class="numbertext">1 / 14</div>
          <img src="img/galeria/1.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 14</div>
          <img src="img/galeria/2.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 14</div>
          <img src="img/galeria/3.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">4 / 14</div>
          <img src="img/galeria/4.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">5 / 14</div>
          <img src="img/galeria/5.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">6 / 14</div>
          <img src="img/galeria/6.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">7 / 14</div>
          <img src="img/galeria/7.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">8 / 14</div>
          <img src="img/galeria/8.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">9 / 14</div>
          <img src="img/galeria/9.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">10 / 14</div>
          <img src="img/galeria/10.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">11 / 14</div>
          <img src="img/galeria/12.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">12 / 14</div>
          <img src="img/galeria/13.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">13 / 14</div>
          <img src="img/galeria/14.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">14 / 14</div>
          <img src="img/galeria/AAA_7138.jpg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="nextSlider" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
          <p id="caption"></p>
        </div>
      </div>
    </div>