<?php
//routing
require_once('../app/config/config.php');
require_once APP_ROOT.'/app/libs/DBConnection.php';

$controller = isset($_GET['controller'])?$_GET['controller']:'home';
$action = isset($_GET['action'])?$_GET['action']:'index';

if ($controller == 'home'){
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->index();
} else if ($controller == 'patient'){
    // require_once APP_ROOT.'/app/controllers/PatientController.php';
    // $patientController = new PatientController();//cái này báo lỗi do chưa tạo kệ nó
    // $patientController->index();
} else if ($controller == 'deletePatients'){    //đây chính là $controller truyền từ file index trong home
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    $patientController = new HomeController();
    $patientController->delete();
} else if($controller == 'viewAdd'){    //đây chính là $controller truyền từ file index trong home
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->viewAdd();
} else if($controller == 'viewUpdate'){ //đây chính là $controller truyền từ file index trong home
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->viewUpdate();
}else {
    echo 'Nothing';
}