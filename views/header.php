<?php
 session_start();
 $varsesion=$_SESSION['dni'];
 $medidor_init=$_SESSION['medidor'];
 
 if ($varsesion==null || $varsesion=='') {
  header("Location:login");
  die();
 }
?>  
   <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">LUNES - DOMINGO, 8am to 10pm </p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right">CONTACTO A +62 008 65 001</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="index.html">
                    <img src="<?php echo constant('URL');?>public/main/img/emapat.png" alt="" width="160" height="50" />
                </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo constant('URL');?>lista">LISTA</a></li>
            <li ><a href="<?php echo constant('URL');?>informacion">INFORMACION</a></li>
            <li ><a href="<?php echo constant('URL');?>historial">HISTORIAL</a></li>
            <li><a href="<?php echo constant('URL');?>consumo">CONSUMO ACTUAL</a></li>
            <li><a href="<?php echo constant('URL');?>reclamos">RECLAMOS</a></li> 
            <li><a href="<?php echo constant('URL');?>mensaje">MENSAJES</a></li> 
            <button type="button" class="btn btn-danger">USER:<?php echo $varsesion; ?></button>
          </ul>
          <ul>
              <a href="<?php echo constant('URL');?>cerrar" class="btn btn-skin btn-block btn-lg">SALIR</a>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>