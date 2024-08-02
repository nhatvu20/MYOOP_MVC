<?php
//routing
require_once('../app/config/config.php');
require_once APP_ROOT.'/app/libs/DBConnection.php';

$controller = isset($_GET['controller'])?$_GET['controller']:'home';
$action = isset($_GET['action'])?$_GET['action']:'index';

if ($controller == 'home'){
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    $homeController = new HomeController();
    if($action == 'index'){
        $homeController->index();//gọi đến phương thức index trong HomeController và các cái dưới cũng tưng tự là gọi từ PatientController
    }else {
        echo 'Nothing';
    }
} else if ($controller == 'patient'){   //controller truyền từ file index trong home sau dấu ? của href="index.php?action=viewAdd&controller=patient"
    require_once APP_ROOT.'/app/controllers/PatientController.php';
    $patientController = new PatientController();
    // $patientController->index();
    if($action == 'viewAdd'){    //đây chính là $action truyền từ file index trong home sau dấu ? của href="index.php?action=viewAdd"
        $patientController->viewAdd();
    } else if($action == 'viewUpdate'){ //đây chính là $action truyền từ file index trong home sau dấu ? của href="index.php?action=viewUpdate"
        $patientController->viewUpdate();
    } else if ($action == 'viewDelete'){    //đây chính là $action truyền từ file index trong home sau dấu ? của href="index.php?action=viewDelete"
        $patientController->viewDelete();
        header("Location: index.php?action=deletePatients&controller=patient&id=".$_GET["id"]."");  //Gọi đến action deletePatients ở ngay dưới của file này (index.php)
    }else if($action == "addPatients"){ //được gọi đến đây bằng header trong add.php
        $patientController->insert($_GET['name'], $_GET['gender']);
    } else if ($action == 'updatePatients'){    //được gọi đến đây bằng header trong edit.php
        $patientController->update($_GET['id'], $_GET['name'], $_GET['gender']);
    } else if ($action == 'deletePatients'){    //được gọi đến đây từ file home/index.php
        $patientController->delete();
    }else {
        echo 'Nothing';
    }
}else {
    echo 'Nothing';
}