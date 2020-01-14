
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>INFORMACION DE MEDIDOR</title>

   <!-- css -->
  <link href="<?php echo constant('URL');?>public/main/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo constant('URL');?>public/main/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>public/main/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="<?php echo constant('URL');?>public/main/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="<?php echo constant('URL');?>public/main/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo constant('URL');?>public/main/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="<?php echo constant('URL');?>public/main/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="<?php echo constant('URL');?>public/main/css/animate.css" rel="stylesheet" />
  <link href="<?php echo constant('URL');?>public/main/css/style.css" rel="stylesheet">
  <link href="<?php echo constant('URL');?>public/main/css/informacion.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="<?php echo constant('URL');?>public/main/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="<?php echo constant('URL');?>public/main/color/default.css" rel="stylesheet">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
 
 <div id="wrapper">
  <?php  require 'views/headerInicio.php'; ?>
    <?php 
      include_once 'models/bd_usuarios.php';
      
      foreach($this->usuarios as $row){ 
        $usuario=new BD_Usuarios(); 
        $usuario=$row; 
        
        if($usuario->dni==$varsesion){
        $cantidad=$usuario->cantidad;
        $dni=$usuario->dni;

       }
      }

  ?>
     <section id="intro" class="intro informacion">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 class="h-ultra">SELECCIONE EL MEDIDOR</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">__<span class=""><?php echo $cantidad; ?> medidores registrados</span>__</h4>
              </div>
              <div class="well well-trans">
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                  <!--  <form action="mostrar_ca.php" class="formulario" method="POST"> -->
       <?php 
       if (empty($cantidad)) {
         echo "NO EXISTE MEDIDIORES";
       }else{
           
           for ($i=1; $i <= $cantidad ; $i++) { 
             echo "<form action=".constant('URL')."lista/redirec method='POST'>
                   <input type='hidden' name='dni' value='$dni'><input type='hidden' name='secuencia' value='$i'><input type='submit' class='btn btn-skin btn-block btn-lg'  value='MEDIDOR $i'>
                  </form><br>";
           } 
       }
       ?>      
     <!-- </form> -->
               </div>
              </div>

            </div>
      
          </div>
        </div>
      </div>
    </section>

  <?php  require 'views/footer.php'; ?>
 </div>

</body>
</html>