
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HISTORIAL DE CONSUMO</title>

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
                <h2 class="h-ultra">HISTORIAL DE CONSUMO</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">__<span class="">EMAPAT</span>__</h4>
              </div>
             
                <div class="panel panel-skin">
                    <div class="panel-heading">
                      <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>SELECCIONE UN OPCION<small>(esto facil!)</small></h3>
                    </div>
                    <div class="panel-body">
                      <form action="<?php  echo constant('URL') ?>historial/renderinfo" method="POST" role="form" class="contactForm lead">
                        <div class="center mensaje bg-danger"><?php echo $this->mensaje;?></div><br>
                        
                        <input type="hidden" value="<?php echo $varsesion; ?>" name="dni">
                        
                        <input type="hidden" value="<?php echo $medidor_init; ?>" name="medidor">


                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>AÑO:</label>
                              <select class="form-control input-md" name="year">
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                                <option>2028</option>
                                <option>2029</option>
                                <option>2030</option>
                              </select>
                              <div class="validation"></div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>MES:</label>
                              <select class="form-control input-md" name="mes">
                                <option>TODO EL AÑO</option>
                                <option>ENERO</option>
                                <option>FEBRERO</option>
                                <option>MARZO</option>
                                <option>ABRIL</option>
                                <option>MAYO</option>
                                <option>JUNIO</option>
                                <option>JULIO</option>
                                <option>AGOSTO</option>
                                <option>SEPTIENBRE</option>
                                <option>OCTUBRE</option>
                                <option>NOVIEMBRE</option>
                                <option>DICIENBRE</option>
                              </select> 
                              <div class="validation"></div>
                            </div>
                          </div>
                        </div>

                        <input type="submit" value="CONSULTAR"  class="btn btn-skin btn-block btn-lg"><BR><BR>
                        <!-- <p class="lead-footer"></p> -->
                   <!-- DINAMIC -->
                    <div>
                     <?php  
                        if (!empty($_POST['year'])) {
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
                        foreach($this->historial as $row) { 
                          $historias=new Historiales(); 
                          $historias=$row;

                          if(empty($historias->year)){
                             $historias->year="";
                             $historias->mes="";
                             $historias->m3="";
                             $historias->saldo="";
                          }
                        ?>
                           <tr>
                             <td><?php echo $historias->year;?></td>
                             <td><?php echo $historias->mes;?></td>
                             <td><?php echo $historias->m3;?></td>
                             <td><?php echo $historias->saldo;?></td>
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
                    </div>
                   <!-- END -->
                      </form>
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