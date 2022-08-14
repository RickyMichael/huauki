<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald:wght@300&family=PT+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <link rel="stylesheet" href="css/main.css">
  <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados'){
      echo '<link rel="stylesheet" href="css/colorbox.css">';
    }else if($pagina == 'conferencia'){
      echo '<link rel="stylesheet" href="css/lightbox.css">';
    }
   ?>
  <meta name="theme-color" content="#fafafa">
  
</head>

<body class="<?php echo $pagina; ?>">

  <!-- Add your site or application content here -->
  <header class="site-header">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </nav>
        <div class="informacion-evento">
          <div class="clearfix">
            <p class="fecha"><i class="fa-solid fa-calendar-days"></i>10-12 DIC</p>
            <P class="ciudad"><i class="fa-solid fa-location-dot"></i>GUADALAJARA, MX</P>
          </div>
            <h1 class="nombre-sitio">GDLWEBCAMP</h1>
          <p class="slogan">La mejor conferencia de <span>diseño web</span></p>
        </div>
        
      </div><!--contenido-header-->
    </div><!--hero-->
  </header>

  <div class="barra clearfix">
    <div class="contenedor clearfix">
      <div class="logo">
        <a href="index.php">
          <img src="img/logo.svg" alt="GDLWEBCAMP">
        </a>
      </div>

      <div class="menu-movil clearfix">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="navegacion-principal clearfix">
        <a href="conferencia.php">Conferencia</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitados.php">Invitados</a>
        <a href="registro.php">Reservaciones</a>
      </nav>
      
    </div><!--contenedor-->
  </div><!--barra-->