<?php
require_once APP_ROOT.'/app/services/PatientService.php';   //Nếu tạo service mới phải import vào

class PatientController{
    public function delete(){
        // include APP_ROOT.'/app/views/patient/delete.php'; //nhúng (import) file view vào thì sẽ có thể nhận được data từ form theo method = post|get   
        $id = $_GET["id"];  //lấy param trên URL
        $patientService = new PatientService();
        $patients = $patientService->deletePatients($id);
        return $patients;
    }

    public function viewDelete() {
        // Đổ data default vào input
        $patientService = new PatientService();
        $patient = $patientService->getPatient($_GET["id"]);    //Hàm lấy một đối tượng
        include APP_ROOT.'/app/views/patient/delete.php'; //nhúng (import) file view vào thì sẽ có thể nhận được data từ form theo method = post|get   
    }

    public function viewAdd(){
        include APP_ROOT.'/app/views/patient/add.php'; //nhúng (import) file view
    }
    
    public function viewUpdate(){
        // Đổ data default vào input
        $patientService = new PatientService();
        $patient = $patientService->getPatient($_GET["id"]);    //Hàm lấy một đối tượng


        include APP_ROOT.'/app/views/patient/edit.php'; //nhúng (import) file view

    }

    public function insert($name, $gender){
        $patientService = new PatientService();
        $patients = $patientService->insertPatients($name, $gender);    //Gọi đến phương thức insertPatients trong service
        return $patients;
    }

    public function update($id, $name, $gender){
        $patientService = new PatientService();
        $patients = $patientService->updatePatients($id, $name, $gender);
        return $patients;
    }

}