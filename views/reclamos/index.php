
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

    <section id="intro" class="intro informacion">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 class="h-ultra">REALIZA TU RECLAMO AQUI:</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">__<span class="">EMAPAT</span>__</h4>
              </div>
             
                <div class="panel panel-skin">
                    <div class="panel-heading">
                      <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>ESPECIFIQUE :<small>(esto facil!)</small></h3>
                    </div>
                    <div class="panel-body">
                  
                             
                      <form action="<?php  echo constant('URL') ?>reclamos/evalua" method="post" role="form" class="contactForm lead">
                        <div class="center mensaje bg-danger"><?php echo $this->mensaje;?></div><br>  
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <label>ESCOGA UNA OPCION :</label>
                              <select class="form-control input-md " name="tipo">
                                <option>MENSAJE NORMAL</option>
                                <option>POR CORREO</option>
                              </select> 
                            </div>
                          </div>
                          
                        </div>
                      

                        <input type="submit" value="ACEPTAR" name="enviar" class="btn btn-skin btn-block btn-lg">

                        <!-- <p class="lead-footer">@ROMARIOVEGA</p> -->
                      </form>

                        <!-- <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <h4>HABLAMOS AL WHATSAPP</h4>
                             <a href="https://wa.me/51953435804?text=HOLA NECESITO AYUDA"><img src="https://sherpadigital.es/wp-content/uploads/2017/10/whatsapp-icon-150x150.png" height="50" width="50"></a>
                          </div>
                        </div> -->

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