<?php
    require_once File::build_path(array('controller','ControllerVoiture.php'));
    require_once File::build_path(array('controller','ControllerUtilisateur.php'));
    require_once File::build_path(array('controller','ControllerTrajet.php'));


    if (isset($_COOKIE['preference'])){
        $controller_defaut = $_COOKIE['preference'];
    }else{
        $controller_defaut = "ControllerVoiture";
    }


    if (isset($_GET['action'])) {

        $controller_class = "Controller" . ucfirst($_GET['controller']);
        if (class_exists($controller_class)) {
            if (in_array($_GET['action'],get_class_methods($controller_class))) {
                $action = $_GET['action'];
                $controller_class::$action();

            }else{
                $controller_class::error("action non définie");
            }
        }else{
            ControllerVoiture::error("class doesn't exist");
        }
    }else{
        $controller_defaut::readAll();
    }
?>


