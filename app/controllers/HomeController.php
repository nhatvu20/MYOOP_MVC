<?php
require_once APP_ROOT.'/app/services/PatientService.php';   //Nếu tạo service mới phải import vào

class HomeController{
    public function index(){
        $patientService = new PatientService();
        $patients = $patientService->getALLPatients();
        // $patients = $patientService->getData();
        include APP_ROOT.'/app/views/home/index.php'; //nhúng (import) file view vào thì sẽ có thể nhận được data từ form theo method = post|get   
    }
}