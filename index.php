<?php
ob_start();
session_start();
//Global setting
require_once 'config/global.php';

//Chargement controleur et action
if(isset($_GET["controller"])){
    // We load the instance of the corresponding controller
    $controllerObj=chargeControlleur($_GET["controller"]);
    //We launch the action
    launchAction($controllerObj);
}else{
    // We load the default controller instance
    $controllerObj=chargeControlleur(CONTROLLER_DEFECTO);
    // We launch the action
    launchAction($controllerObj);
}


function chargeControlleur($controller){

    switch ($controller) {
        case 'employees':
            $strFileController='controller/employeesController.php';
            require_once $strFileController;
            $controllerObj=new employeesController();
            break;

        case 'home':
            $strFileController='controller/HomeController.php';
            require_once $strFileController;
            $controllerObj=new HomeController();
            break;

        case 'admin':
            $strFileController='controller/AdminController.php';
            require_once $strFileController;
            $controllerObj=new AdminController();
            break;
        
        default:
            $strFileController='controller/HomeController.php';
            require_once $strFileController;
            $controllerObj=new HomeController();
            break; 
    }
    return $controllerObj;
}

function launchAction($controllerObj){
    if(isset($_GET["action"])){
        $controllerObj->run($_GET["action"]);
    }else{
        $controllerObj->run(DEFECT_ACTION);
    }
}


?>