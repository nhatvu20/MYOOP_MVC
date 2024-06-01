<?php 
    $id = $_GET['id'];
    $conn = mysqli_connect('localhost','root','','testdb');
    $sql = "DELETE FROM `testdb`.`patients` WHERE  `id`= $id;";
    $conn->query($sql);
    if($conn) {
        echo "sắc sét";
    }else {
        echo "phêu";
    }
?>