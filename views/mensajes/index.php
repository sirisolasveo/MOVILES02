
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MENSAJES NUEVOS</title>

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
                <h2 class="h-ultra">MENSAJES NUEVOS</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
              <form action="<?php  echo constant('URL') ?>mensaje/bandeja" method="POST">
                <input type="hidden" name="dni" value="<?php echo $varsesion ; ?>">
                <input type="hidden" name="medidor" value="<?php echo $medidor_init ; ?>">
                <input type="submit" value="VER" name="ver" class="btn btn-primary btn-block btn-lg">
              </form>
                  <!-- <h4 class="h-light">__<span class="">EMAPAT</span>__</h4> -->
              </div>
              <div class="well well-trans">
                <div class="wow fadeInRight" data-wow-delay="0.1s">

                  <ul class="lead-list">

                     <?php  
                        if (isset($_REQUEST['ver'])) {
                        ?>
                        <table width="100%;" class="table table-striped table-bordered">
                        <thead class="bg-primary">
                          <tr>
                             <th scope="col">#</th>
                             <th scope="col">FECHA</th>
                             <th scope="col">MENSAJE</th>
                           </tr>  
                        </thead>
                        <tbody>
                        <?php 
                        // include_once 'models/historial.php';
                        include_once 'models/mensajes.php';
                        foreach($this->date as $row) { 
                          $dates=new Mensajesis(); 
                          $dates=$row;
                        ?>
                           <tr>
                            <?php 
                              if ($dates->estado=="PROCEDE" || $dates->estado=="procede") {
                                echo "<td><span class='fa fa-check fa-2x icon-success'></span></td>";
                              }else{
                                echo "<td><span class='fa fa-exclamation-triangle fa-2x'></span></td>";
                              }
                            ?>
                             <td><?php echo $dates->fecha;?></td>
                             <td><?php echo $dates->mensaje;?></td>
                           </tr>  
                           <?php 
                             }
                           ?>
                        </tbody>
                       </table>
                       <?php 
                        }else{
                          echo "CARGANDO.....";
                        }
                      
                       ?> 
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