<?php
require_once APP_ROOT.'/app/services/PatientService.php';

class HomeController{
    public function index(){
        $patientService = new PatientService();
        $patients = $patientService->getALLPatients();
        include APP_ROOT.'/app/views/home/index.php'; //nhúng (import) file view vào thì sẽ có thể nhận được data từ form theo method = post|get   
    }

    public function delete(){
        include APP_ROOT.'/app/views/home/delete.php'; //nhúng (import) file view vào thì sẽ có thể nhận được data từ form theo method = post|get   
        $id = $_GET["id"];  //lấy param trên URL
        $patientService = new PatientService();
        $patients = $patientService->deletePatients($id);
        // include APP_ROOT.'/app/views/home/add.php';
        return $patients;
    }

    public function viewAdd(){
        include APP_ROOT.'/app/views/patient/add.php'; //nhúng (import) file view
        // check sự kiện ấn button trong view add.php  
        if(isset($_POST["btn_submit"])){ // chú phải check isset vì ban đầu chưa có dữ liệu truyền vào input
            $patientService = new PatientService();
            //check file PatientService.php
            $patients = $patientService->insertPatients($_POST["name"], $_POST["gender"]);
            return $patients;
        }
    }
    
    public function viewUpdate(){
        // Đổ data default vào input
        $patientService = new PatientService();
        $patient = $patientService->getPatient($_GET["id"]);    //Hàm lấy một đối tượng
        include APP_ROOT.'/app/views/patient/edit.php'; //nhúng (import) file view
        // check sự kiện ấn button trong view edit.php
        if(isset($_POST["btn_submit"])){ // chú phải check isset vì ban đầu chưa có dữ liệu truyền vào input
            $id = $_GET["id"];
            $name = $_POST["name"];
            $gender = $_POST["gender"];
            //check file PatientService.php
            $patients = $patientService->updatePatients($id, $name, $gender);
            return $patients;
        }
    }
}