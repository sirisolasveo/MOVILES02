<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylecheet" type="tex/css" href="<?php echo constant('URL');?>public/materialize/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>public/materialize/css/materialize.min.css">
    <script type="text/js" src="<?php echo constant('URL');?>public/materialize/js/materialize.js"></script>
 <script type="text/js" src="<?php echo constant('URL');?>public/materialize/js/materialize.min.js"></script>
    <title>INICIO</title>
</head>
<body>
<nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">EMAPAT</a>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="<?php echo constant('URL');?>login">Login</a></li>
        <li class="tab"><a href="<?php echo constant('URL');?>reguistrar">Registrarse</a></li>
      </ul>
    </div>
  </nav>
  <?php
  if(isset($_GET["usuario"])){
     
   }else{  
  ?> 
    <div class="center"><br><br><br>  
     <img src="<?php echo constant('URL');?>/public/img/applogo.png">
    </div>
  <?php 
   }
   ?>
</body>
</html>