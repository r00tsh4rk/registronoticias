<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <title><?php echo $titulo ?> / Generador de Noticias</title>

    <!-- Bootstrap Core CSS 

    "<?php //echo base_url(); ?>/assets/img/fondobibliotecaoficio.png"-->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/sb-admin.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>/assets/js/nicEdit.js" type="text/javascript"></script>
   
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            new nicEditor({iconsPath : '<?php echo base_url(); ?>assets/js/nicEditorIcons.gif',buttonList : ['fontSize','left','center','right','justify','bold','italic','underline','upload','image','forecolor','bgcolor','ol','ul'],uploadURI:'<?php echo site_url();?>/SubidaImagenes/niceditupload'}).panelInstance('teks');
        });
    </script>


    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/plugins/morris.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link rel="apple-touch-icon" href="<?php echo base_url(); ?>/assets/img/apple-touch-icon.png">
        <link rel="icon"  href="<?php echo base_url(); ?>/assets/img/favicon.ico" >

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>