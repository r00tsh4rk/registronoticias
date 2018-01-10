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
                <h1 class="page-header">Noticias
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../index.html">Inicio</a>
                    </li>
                    <li class="active">Noticias</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12"> 
                <br>
                <?php foreach ($busqueda as $row) {
                    ?>

                    <!-- NOTICIA 1 -->
                    <h2 style="text-align: center;"><?php echo $row->titulo_miniatura; ?></h2>

                    <p><?php echo $row->cuerpo_noticia; ?></p>
                    <hr>

                    <div align="center"> 
                      <h5>
                        Por: <?php echo $row->quien_publica; ?>
                    </h5>
                    <h5>
                        Publicado el: <?php echo $row->fecha_publicacion; ?>
                    </h5>
                    <h5>
                        A las: <?php echo $row->hora_publicacion; ?> horas
                    </h5>
                </div>

                <hr>
                <?php } ?>


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
                <p>Calle 5 de mayo num. 217, Barrio de Jalatlaco, C.P. 68080, Oaxaca, México</p>
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