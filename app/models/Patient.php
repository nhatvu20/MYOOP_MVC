<?php

class Patient{
    // Đi thi phải tạo model mới đủ hàm get với từng trường, chú ý sửa hàm tạo
    private $id;
    private $fullName;
    private $gender;

    public function __construct($id, $fullName, $gender){
        $this->id = $id;
        $this->fullName = $fullName;
        $this->gender = $gender;
    }

    public function getId(){
        return $this->id;
    }

    public function getFullName(){
        return $this->fullName;
    }

    public function getGender(){
        return $this->gender;
    }

    public function setFullName($fullName){
        $this->fullName = $fullName;
    }

}

?>