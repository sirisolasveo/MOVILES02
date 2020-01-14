
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
  <?php  require 'views/header.php'; ?>
  <?php 
   include_once 'models/usuarios.php';
      foreach($this->usuarios as $row) { 
        $usuario=new Usuarios(); 
        $usuario=$row; 
        
        if($usuario->dni==$varsesion && $usuario->medidor==$medidor_init){

        $codigo=$usuario->codigo;
        $propietario=$usuario->propietario;
        $dni=$usuario->dni;
        // $apellidos=$usuario->apellidos;
        $tipo=$usuario->catetar;
        $medidor=$usuario->medidor;

       }
      }


     switch ($tipo) {
       case 502:
        $tipo="SOCIAL";
         break;
       case 504:
        $tipo="DOMESTICO";
         break;
        case 505:
        $tipo="COMERCIAL";           
         break;
         case 506:
       $tipo="INDUSTRIAL";
         break;
         case 507:
       $tipo="ESTATAL";
         break;

       default:
       $tipo="NO DEFINIDO";           
         break;
     }


  ?>

     <section id="intro" class="intro informacion">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 class="h-ultra">INFORMACION DEL MEDIDOR</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">__<span class="">EMAPAT</span>__</h4>
              </div>
              <div class="well well-trans">
                <div class="wow fadeInRight" data-wow-delay="0.1s">

                  <ul class="lead-list">
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>CODIGO</strong><br /><?php  echo $codigo; ?></span></li>

                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>DNI</strong><br /><?php  echo $dni; ?></span></li>

                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>PROPIETARIO</strong><br /><?php  echo $propietario; ?></span></li>

                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>
                    CATEGORIA</strong><br /><?php  echo $tipo; ?></span></li>

                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>N° DE MEDIDOR:</strong><br /><?php  echo $medidor; ?></span></li>
                    

                  </ul>

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