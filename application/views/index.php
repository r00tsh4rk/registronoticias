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
        <!-- Page Content -->
        <div class="container">
         <!-- Page Heading/Breadcrumbs -->
         <div class="row">
            <div class="col-lg-12">
                <h1 style="text-align: center;">Sistema de Creación de Noticias del CSEIIO
                </h1>
            </div>
        </div>
        <div class="row">
            <?php

            $inserta = $this->session->flashdata('insertado');
            $errorlibro = $this->session->flashdata('errorlibro');
            $errorportada = $this->session->flashdata('errorportada');
            $errornoarchivo = $this->session->flashdata('error');

            if($inserta) { ?>

            <div class="alert alert-success alert-dismissible" style="text-aling:center; color:#8c8c8c"  role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Éxito!</strong> <?php echo $inserta;  ?>
            </div>

            <?php } 
            if (validation_errors()) { ?>
            <div class="alert alert-danger alert-dismissible" style="text-aling:center; color:#8c8c8c"  role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Error!</strong> <?php echo validation_errors();  ?>
            </div>
            <?php }
            if ($errorlibro) { ?>
            <div class="alert alert-danger alert-dismissible" style="text-aling:center; color:#8c8c8c"  role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Error!</strong> <?php echo $errorlibro; ?>
            </div>
            <?php } 
            if ($errorportada) { ?>
            <div class="alert alert-danger alert-dismissible" style="text-aling:center; color:#8c8c8c"  role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Error!</strong> <?php echo $errorportada; ?>
            </div>
            <?php } 
            if ($errornoarchivo) { 
                ?>  <!-- Seccion de errores -->
                <div class="alert alert-danger alert-dismissible" style="text-aling:center; color:#8c8c8c"  role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Error!</strong> <?php echo $errornoarchivo; ?>
                </div>
                <?php } ?>
            </div>
            <!-- /.row -->
            <!-- Content Row -->
            <div class="row">
                <div class="col-lg-12"> 
                  <form enctype="multipart/form-data" name="frm_noticias" action="<?php echo base_url();  ?>Upload/SubirInfo" method="POST">

                    <br><hr>
                    <strong>
                        <legend style="text-align: center; color: #d60071;">DATOS PARA INTRODUCCIÓN DE LA NOTA</legend>
                    </strong>

                    <br>

                    <label >Imagen para Introducción</label>
                    <input  type="file" name="imagenMiniatura" class="form-control" >
                    <span class="label label-danger">* El formato admitido para subir la miniatura es: <strong>JPG</strong>.</span><br>
                    <span class="label label-danger">* La imagen no debe pesar mas de 1.5Mb.</span>
                    <br><br>

                    <label >Imagen para Slider</label>
                    <input  type="file" name="imagenSlider" class="form-control" >
                    <span class="label label-danger">* El formato admitido para subir el slider es: <strong>JPG</strong>.</span><br>
                    <span class="label label-danger">* La imagen no debe pesar mas de 1.5Mb.</span>
                    <br><br>

                    <label >Titulo de la Nota</label>
                    <input  type="text" name="titulo_miniatura" class="form-control" >

                    <label >Descripci&oacute;n</label>
                    <input  type="text" name="descripcion" class="form-control">

                    <br>

                    <strong>
                        <legend style="text-align: center; color: #d60071;">NOTICIA COMPLETA</legend>
                    </strong>

                    <br>

                    <label>Cuerpo de la noticia</label>
                    <strong><?php echo $error; ?></strong>       
                    <textarea id="teks" name="teks" style="width: 100%;">

                    </textarea>
                    
                    <br>

                    <strong>
                        <legend style="text-align: center; color: #d60071;">DATOS ADICIONALES</legend>
                    </strong>

                    <br>

                    <label>Autor de la publicación</label>
                    <input type="text" name="quien_publica" value="<?php echo $this->session->userdata('user'); ?>" class="form-control">

                    <br>
                    <div align="center">
                        <input  type="submit" name="btn_enviar" value="Publicar Noticia" class="btn btn-warning btn-lg">
                    </div>


                </form>

            </div>
        </div>
        <!-- /.row -->
        <hr>
    </div>
    <!-- /.container -->
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
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-hover-dropdown.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>


<div class="cuerponoticia">
    <div style="text-align: center;"><img src="http://www.cseiio.edu.mx/registronoticias/imagesnoticia/e4da3b7fbbce2345d7772b0674a318d5_17543.jpg" width="929"><br>
    </div>
    <div style="text-align: center;"><br>
    </div>

    <div style="text-align: center;"><img src="http://www.cseiio.edu.mx/registronoticias/imagesnoticia/e4da3b7fbbce2345d7772b0674a318d5_32692.jpg" width="960"><br></div>
</div>