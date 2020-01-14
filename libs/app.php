<?php
require_once 'controllers/error.php';

class App{
    function __construct(){
        // echo "<p>Nueva app</p>";
        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        //var_dump($url);

        if (empty($url[0])) {
        $archivoController = 'controllers/inicio.php';
        require_once $archivoController;
        $controller = new Inicio();
        $controller->loadModel('inicio');   
        $controller->render();
        return false;        
       }

        $archivoController = 'controllers/' . $url[0].'.php';
        if(file_exists($archivoController)){
            require_once $archivoController;
           
            //inicializa el conttrolador  
           
            $controller = new $url[0];
            $controller->loadModel($url[0]);   
            
            //si hay un metodo que se quiera cargar

            if(isset($url[1])){
                $controller->{$url[1]}(); 
            }else{
                $controller->render();
            }
        }else{
            $controller = new Errore();
        }
    }
}
?>
