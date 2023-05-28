<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PELUQUERIA</title>
  </head>
  <link rel="stylesheet" href="style.css">
<!-- IMPORTACION DE JQUERY -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
 <!-- IMPORTACION DE BOOSTRAP -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- IMPORTAR API KEY DE GOOGLE MAP-->
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRG9uYrG-K0hXrFIugt-WO2Rd4lvwrM2Y&libraries=places&callback=initMap">
   </script>
<body>

      <!-- BARRA DE NAVEGACION -->

      <nav class="navbar navbar-inverse">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url();?>/welcome"> ESTUDIO DE COLOR Y CORTE </a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo site_url();?>/menus/vision">VISIÓN Y MISIÓN <span class="sr-only">(current)</span></a></li>
              <li><a href="<?php echo site_url();?>/menus/caballero">CORTES DE CABALLERO</a></li>
              <li><a href="<?php echo site_url();?>/menus/dama">CORTES DE DAMA</a></li>
              <li><a href="<?php echo site_url();?>/menus/maquillaje">MAQUILLAJE</a></li>
              <li><a href="">PEINADOS </a></li>
              <li><a href="">PLANCHADOS</a></li>
            </div><!-- /.container-fluid -->
  </nav>
