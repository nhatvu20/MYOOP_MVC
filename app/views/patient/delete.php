

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa</title>
</head>
<body>
    <!-- <?php echo "xóa thành công" ?> -->
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
</body>
</html>