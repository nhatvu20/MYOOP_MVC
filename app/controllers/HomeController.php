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
        // include APP_ROOT.'/app/views/patient/delete.php'; //nhúng (import) file view vào thì sẽ có thể nhận được data từ form theo method = post|get   
        // Comments đống này lại nếu không dùng chức năng
        $id = $_GET["id"];  //lấy param trên URL
        $patientService = new PatientService();
        $patients = $patientService->deletePatients($id);
        return $patients;
    }

    public function viewDelete() {
        // Đổ data default vào input    //Comments đống này lại nếu không dùng chức năng
        $patientService = new PatientService();
        $patient = $patientService->getPatient($_GET["id"]);    //Hàm lấy một đối tượng
        include APP_ROOT.'/app/views/patient/delete.php'; //nhúng (import) file view vào thì sẽ có thể nhận được data từ form theo method = post|get   
    }

    public function viewAdd(){
        include APP_ROOT.'/app/views/patient/add.php'; //nhúng (import) file view
    }
    
    public function viewUpdate(){
        // Đổ data default vào input    //Comments đống này lại nếu không dùng chức năng
        $patientService = new PatientService();
        $patient = $patientService->getPatient($_GET["id"]);    //Hàm lấy một đối tượng


        include APP_ROOT.'/app/views/patient/edit.php'; //nhúng (import) file view

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