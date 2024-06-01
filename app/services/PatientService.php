<?php

require_once APP_ROOT.'/app/models/Patient.php';

class PatientService{

    public function getAllPatients(){
        $patients = [];
        $dbConnection = new DBConnection();

        if ($dbConnection != null){
            $conn = $dbConnection->getConnection();

            if ($conn != null){
                $sql = "SELECT * FROM patients";
                $stmt = $conn->query($sql);

                while ($row = $stmt->fetch()){
                    $patient = new Patient($row['id'], $row['name'], $row['gender']);
                    $patients[] = $patient;
                }

                return $patients;
            }
        }
    }
    public function insertPatients($name, $gender){
        $patients = [];
        $dbConnection = new DBConnection();

        if ($dbConnection != null){
            $conn = $dbConnection->getConnection();

            if ($conn != null){
                $sql = "INSERT INTO `testdb`.`patients` (`name`, `gender`) VALUES ('$name', $gender);";
                $stmt = $conn->query($sql);
                if($stmt) {
                    echo "sắc sét";
                    header("Location: ".DOMAIN."public");
                }else {
                    echo "phêu";
                }
                return true;
            }
        }
        return false;
    }

    public function deletePatients($id){
        $patients = [];
        $dbConnection = new DBConnection();

        if ($dbConnection != null){
            $conn = $dbConnection->getConnection();
            // $id = $_GET['id'];
            if ($conn != null){
                $sql = "DELETE FROM `testdb`.`patients` WHERE  `id`= $id;";
                $stmt = $conn->query($sql);
                if($stmt) {
                    echo "sắc sét";
                    header("Location: ".DOMAIN."public");
                    return true;
                }else {
                    echo "phêu";
                    return false;
                }
            }
        }
    }

    public function updatePatients($id, $name, $gender){
        $patients = [];
        $dbConnection = new DBConnection();
        //Hàm này nên viết kiểu mysqli cho dễ sử dụng
        if ($dbConnection != null){
            $conn = $dbConnection->getConnection();
            // $id = $_GET['id'];
            if ($conn != null){
                $sql = "UPDATE `testdb`.`patients` SET `name`='$name', `gender`= $gender WHERE  `id`= $id;";
                $stmt = $conn->query($sql);
                if($stmt) {
                    echo "sắc sét";
                    header("Location: ".DOMAIN."public");
                }else {
                    echo "phêu";
                }
                return $patients;
            }
        }
    }

    public function getPatient($id){
        // $dbConnection = new DBConnection();
        // $patients = false;
        // if ($dbConnection != null){
        //     $conn = $dbConnection->getConnection();
        //     $id = $_GET['id'];
        //     if ($conn != null){
        //         $sql = "SELECT * FROM `testdb`.`patients` WHERE  `id`= $id;";
        //         $stmt = $conn->query($sql);
        //         if($stmt) {
        //             echo "sắc sét";
        //             return $stmt->fetchAll();
        //         }else {
        //             echo "phêu";
        //         }
        //     }
        // }
        // $id = $_GET['id'];
        $conn = mysqli_connect('localhost','root','','testdb');
        $sql = "SELECT * FROM `testdb`.`patients` WHERE  `id`= $id;";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        if(!$row) {
            echo "phêu";
        }else {
            // lấy data trong CSDL -> tạo đối tượng => Để sử dụng (phương thức trong đối tượng) getID(), getFullName(),...
            $patient = new Patient($row['id'], $row['name'], $row['gender']);
            return $patient;
        }
    }
}