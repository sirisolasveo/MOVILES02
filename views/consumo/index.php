
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CONSUMO ACTUAL</title>

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
                <h2 class="h-ultra">CONSUMO ACTUAL</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">__<span class="">EMAPAT</span>__</h4>
              </div>
              
              <div class="panel panel-skin">
                    <div class="panel-heading">
                      <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>RESULTADOS<small>(esto facil!)</small></h3>
                    </div>
                    <div class="panel-body">
                   
                      <form action="<?php  echo constant('URL') ?>consumo/mes_actual" method="post" role="form" class="contactForm lead">  
                       <div class="center mensaje bg-danger"><?php echo $this->mensaje;?></div><br>

                        <input type="hidden" value="<?php echo $varsesion; ?>" name="dni" id="first_name" class="form-control input-md" >
                       
                        <input type="hidden" value="<?php echo $medidor_init; ?>" name="medidor" id="first_name" class="form-control input-md" >
                        
                    <div>
                     <?php  
                        if (isset($_REQUEST['enviar'])) {
                        ?>
                        <table width="100%;" class="table table-striped table-bordered">
                        <thead class="bg-primary">
                          <tr>
                             <th scope="col">Año</th>
                             <th scope="col">Mes</th>
                             <th scope="col">M3</th>
                             <th scope="col">Monto(soles)</th>
                           </tr>  
                        </thead>
                        <tbody>
                        <?php 
                        include_once 'models/historial.php';
                        foreach($this->date as $row) { 
                          $dates=new Historiales(); 
                          $dates=$row;
                          $year_actual=$dates->year;
                          $mes_actual=$dates->mes;
                          $m3=$dates->m3;
                          $saldo_actual=$dates->saldo; 

                          }

                          if (empty($dates->year)) {
                                                      
                          $year_actual="";
                          $mes_actual="";
                          $m3="";
                          $saldo_actual="";                          

                          }
                        ?>
                           <tr>
                             <td><?php echo $year_actual;?></td>
                             <td><?php echo $mes_actual;?></td>
                             <td><?php echo $m3;?></td>
                             <td><?php echo $saldo_actual;?></td>
                           </tr>  
                        </tbody>
                       </table>
                       <?php 
                        }else{
                          echo "CARGANDO.....";
                        }
                      
                       ?> 
                    </div>
                        <input type="submit" value="VER" name="enviar" class="btn btn-skin btn-block btn-lg"><br>
                      </form>
                       <!-- DINAMIC -->
                   <!-- END -->
                        <a href="<?php echo constant('URL');?>reclamos" class="btn  btn-block btn-lg bg-dark">NO ESTOY DE ACUERDO</a>
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