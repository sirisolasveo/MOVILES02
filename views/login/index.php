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
    
    <title>Documentos</title>
</head>
<body>
<nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">EMAPAT</a>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#">Login</a></li>
        <li class="tab"><a href="<?php echo constant('URL');?>reguistrar">Registrarse</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <h5 class="center-align">Inicio</h5>
        <div class="row ">
            <form method="post" action="<?php echo constant('URL');?>login/validarUsuarios" id="login" class="col s12 "> 
                <div class="row  card-panel ">
                <div class="#e64a19 deep-orange darken-2 white-text flow-text center-align"><p><?php echo $this->mensaje;?></p></div>
                <div class="row ">
                    <div class="form-field ">
                        <label for=dni>Dni</label>
                        <input placeholder="inserte dni" id="dni" name="dni" type="text" required="">
                    </div>
                </div>
                <!-- <div class="row">
                        <div class="form-field ">
                            <label for="numero_medidor">Numero Medidor</label>
                            <input placeholder="numero medidor" id="numero_medidor" name="medidor" type="text" required="" >
                        </div>
                </div> -->
                <div class="row">
                        <div class="form-field ">
                            <label for="clave">Clave</label>
                            <input placeholder="clave" id="clave" required="" name="clave" type="password" >
                        </div>
                </div>
                <div class="row">
                   <div class="form-field center">
                        <button class="waves-effect waves-light btn-small" type="submit " name="ingresar">Ingresar</button>
                   </div>
                </div>
            </div>
           </form>
           <a href="" onclick="mensaje();">RECUPERAR CONTRASEÑA</a>
        </div>
    </div>
</body>
<script>
function mensaje() {
  var txt;
  var person = prompt("INSERTE SU DNI:");
  if (person == null || person == "") {
    txt = "User cancelled the prompt.";
  } else {
    alert("enviado con exito");
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
</html>