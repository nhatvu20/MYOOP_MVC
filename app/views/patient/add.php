<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bệnh nhân</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href=".././public/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Thêm</h1>
        <form method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                <small id="nameHelp" class="form-text text-muted">Nhập đúng email hộ tôi để đỡ phải regex.</small>
            </div>
            <div class="form-group">
                <label for="gender">gender</label>
                <input type="text" class="form-control" name="gender" id="gender" placeholder="gender">
                <small id="genderHelp" class="form-text text-muted">Nhập 0 hoặc 1</small>
            </div>

            <!-- Kiểu link js -->
            <!-- <input type="submit" name="btn-submit" class="btn btn-primary" onclick="addPatient()"> -->

            <input type="submit" name="btn_submit" class="btn btn-primary">
            <?php 
                // Nếu dùng js thì comment 3 dòng này lại   //Đi thi comment cái này
                if(isset($_POST['btn_submit'])){    //Kiểm tra xem đã bấm nút btn_submit chưa
                    //Hàm header là để chuyển trang gần giống như thẻ <a></a> của HTML
                    // index.php? sau dấu ? là params có thể sử dụng $_GET["controller"] để lấy xuống
                    // Gọi đến file index.php trong thư mục public. với controller là addPatients
                    header("Location: ".DOMAIN."public/index.php?controller=addPatients&name=".$_POST['name']."&gender=".$_POST['gender']);
                }
            ?>
        </form>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
    <script src=".././public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src=".././public/js/jquery-3.7.1.min.js"></script>
    <!-- Chú ý link js nhéeeee ko là ko gọi được hàm đâu (nếu dùng js ở dòng 26) -->
    <script src=".././public/js/patient.js"></script>
</body>
</html>