<?php
    @session_start();

    date_default_timezone_set('America/Bogota');
    function redirect($url){
        echo "<script type='text/javascript'>window.location.href='$url';
              </script>";
    }

    function dd($var){
        echo "<pre>";
        die(print_r($var));
    }

    function getUrl($modulo, $controlador, $funcion, $parametros=false, $ajax=false){
        if ($ajax) {
            $pagina = "ajax";
        } else {
            $pagina = "index";
        }

        $url= "$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";

        if ($parametros) {
            foreach($parametro as $indice=>$valor){
                $url.="&$indice=$valor";
            }
        }

        return $url;
    }

    function resolve(){
        if(isset($_GET['modulo'])){
            $modulo=$_GET['modulo'];
            $controlador=$_GET['controlador'];
            $funcion=$_GET['funcion'];

            if (is_dir("../controller/$modulo")) {
                if (file_exists("../controller/$modulo/".$controlador."Controller.php")) {
                    include_once "../controller/$modulo/".$controlador."Controller.php";
                    $nombreClase= $controlador."Controller";
                    $objClase= new $nombreClase();
                    if (method_exists($objClase, $funcion)) {
                        $objClase->$funcion();
                    } else {
                        echo "La funci&oacute;n especificada no existe";
                    }
                } else {
                    echo "El controlador especificado no existe";
                } 
            } else {
                echo "El m&oacute;dulo especificado no existe";
            }
        } else {
            include_once("../view/partials/dashboard.php");
        }
    }

    function comprobarCaracteresEspeciales($cadena){
        if (preg_match("/^[a-zA-Z0-9\-_@. ]{1,70}$/", $cadena)) {
            return true;
        } else {
            return false;
        }
    }

    function alertas($mensaje){
        echo "<script type='text/javascript'>
                alert('$mensaje');
              </script>";
    }

    function homeBasic(){
        redirect(getUrl("Home", "Home", "inicialesBasic"));
    }
?>