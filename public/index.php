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
        $homeController->index();
    }else if($action == 'viewAdd'){    //đây chính là $controller truyền từ file index trong home
        $homeController->viewAdd();
    } else if($action == 'viewUpdate'){ //đây chính là $controller truyền từ file index trong home
        $homeController->viewUpdate();
    } else if ($action == 'viewDelete'){    //đây chính là $controller truyền từ file index trong home
        $homeController->viewDelete();
        header("Location: index.php?action=deletePatients&id=".$_GET["id"]."");    //!!! Đi thi comment dòng này lại nếu chỉ muốn nhảy view
    }else if($action == "addPatients"){ //được gọi đến đây bằng header trong add.php
        echo "vào rồi";
        $homeController->insert($_GET['name'], $_GET['gender']);
    } else if ($action == 'updatePatients'){    //được gọi đến đây bằng header trong edit.php
        $homeController->update($_GET['id'], $_GET['name'], $_GET['gender']);
    } else if ($action == 'deletePatients'){    //được gọi đến đây từ dòng 27 trong file index.php
        $homeController->delete();
    }else {
        echo 'Nothing';
    }
} else if ($controller == 'patient'){
    // require_once APP_ROOT.'/app/controllers/PatientController.php';
    // $patientController = new PatientController();//cái này báo lỗi do chưa tạo kệ nó
    // $patientController->index();
}else {
    echo 'Nothing';
}