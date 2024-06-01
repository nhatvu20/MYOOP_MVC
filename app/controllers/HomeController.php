<?php
require_once APP_ROOT.'/app/services/PatientService.php';   //Nếu tạo service mới phải import vào

class HomeController{
    public function index(){
        $patientService = new PatientService();
        $patients = $patientService->getALLPatients();
        // $patients = $patientService->getData();  //Đi thi mở cái này
        include APP_ROOT.'/app/views/home/index.php'; //nhúng (import) file view vào thì sẽ có thể nhận được data từ form theo method = post|get   
    }


    public function delete(){
        include APP_ROOT.'/app/views/home/delete.php'; //nhúng (import) file view vào thì sẽ có thể nhận được data từ form theo method = post|get   
        // Comments đống này lại
        $id = $_GET["id"];  //lấy param trên URL
        $patientService = new PatientService();
        $patients = $patientService->deletePatients($id);
        return $patients;
    }

    public function viewDelete() {
        include APP_ROOT.'/app/views/home/delete.php'; //nhúng (import) file view vào thì sẽ có thể nhận được data từ form theo method = post|get   
    }

    public function viewAdd(){
        include APP_ROOT.'/app/views/patient/add.php'; //nhúng (import) file view
        // check sự kiện ấn button trong view add.php  
        
        // Comments đống này lại
        // if(isset($_POST["btn_submit"])){ // chú phải check isset vì ban đầu chưa có dữ liệu truyền vào input
        //     $patientService = new PatientService();
        //     //check file PatientService.php
        //     $patients = $patientService->insertPatients($_POST["name"], $_POST["gender"]);
        //     return $patients;
        // }
    }
    
    public function viewUpdate(){
        // Đổ data default vào input    //Đi thi Comments 2 dòng này lại
        $patientService = new PatientService();
        $patient = $patientService->getPatient($_GET["id"]);    //Hàm lấy một đối tượng


        include APP_ROOT.'/app/views/patient/edit.php'; //nhúng (import) file view

        // Đi thi Comments đống này lại
        // check sự kiện ấn button trong view edit.php
        // if(isset($_POST["btn_submit"])){ // chú phải check isset vì ban đầu chưa có dữ liệu truyền vào input
        //     $id = $_GET["id"];
        //     $name = $_POST["name"];
        //     $gender = $_POST["gender"];
        //     //check file PatientService.php
        //     $patients = $patientService->updatePatients($id, $name, $gender);
        //     return $patients;
        // }
    }

    public function insert($name, $gender){
        $patientService = new PatientService();
        $patients = $patientService->insertPatients($name, $gender);
        return $patients;
    }

    public function update($id, $name, $gender){
        $patientService = new PatientService();
        $patients = $patientService->updatePatients($id, $name, $gender);
        return $patients;
    }

}