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
    
    <title>REGISTRAR</title>
</head>
<body>
<nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">EMAPAT</a>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="<?php echo constant('URL');?>login">Login</a></li>
        <li class="tab"><a href="#">Registrarse</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
        <div class="row ">
            <form method="post" action="<?php echo constant('URL');?>reguistrar/registrar"  class="col s12 " id="formulario"> 
                <div class="row  card-panel pan" >
                <div class="#e64a19 deep-orange darken-2 white-text flow-text center-align"><p><?php echo $this->mensaje;?></p></div>    
                    <h5 class="center-align">Registrarse</h1>
                <div class="row ">
                    <div class="form-field  ">
                        <label for="dni" class="black-text">Dni</label>
                        <input placeholder="dni....." required="" id="dni" name="dni" type="number" >
                    </div>
                </div>
                <div class="row">
                        <div class="form-field ">
                            <label for="nombre" class="black-text">Nombre</label>
                            <input placeholder="nombre....." required="" id="nombre" name="nombre" type="text" >
                        </div>
                </div>
                <div class="row">
                        <div class="form-field ">
                            <label for="apellido"  class="black-text">Apellido </label>
                            <input placeholder="apellido....." required="" id="apellido"  name="apellido" type="text" >
                        </div>
                </div>

                <!-- <div class="row">
                    <div class="form-field ">
                        <label for="numero_medidor"  class="black-text">Numero de medidor</label>
                        <input placeholder="numero_medidor....." id="numero_medidor" name="numero_medidor" required="" type="text" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-field ">
                        <label for="codigo" class="black-text">Codigo</label>
                        <input placeholder="codigo....." required="" id="codigo" name="codigo" type="number" >
                    </div>
                </div> -->

                <div class="row">
                    <div class="form-field ">
                        <label for="clave" class="black-text">Contraseña</label>
                        <input placeholder="clave....." id="clave" required="" name="clave" type="password" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-field ">
                        <label for="clave" class="black-text">Confirma contraseña</label>
                        <input placeholder="clave....." id="clave" required="" name="clave_confirma" type="password" >
                    </div>
                </div>
                <h6>DEBE INSERTAR UNO DE LOS DOS CAMPOS NECESARIAMENTE PARA MANTENERLO INFORMADO</h6>
                <div class="row">
                        <div class="form-field ">
                            <label for="correo" class="black-text">Correo</label>
                            <input placeholder="correo....." id="correo" name="correo" type="email" >
                        </div>
                </div>

                <div class="row">
                    <div class="form-field ">
                        <label for="numero_celular" class="black-text">Numero de Celular</label>
                        <input placeholder="numero....." id="clave" name="numero_celular" type="number" >
                    </div>
                </div>

                <div class="row">
                   <div class="form-field center">
                        <button class="waves-effect waves-light btn-small" type="submit " name="registrarse" id="registrarse">Registrarse</button>
                   </div>
                </div>
            </div>
            </form>
            <?php
              if ($this->mensaje=="REGISTRADO CON EXITO") {
            ?>
                <h1>ROMARIO OKEY</h1>    
              <?php
              }
              ?>
        </div>
    </div>
</body>
</html>