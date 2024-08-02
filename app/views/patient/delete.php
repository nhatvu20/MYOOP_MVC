<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href=".././public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Xóa</h1>
        <form method="post">
            <!--$patient truyền từ hàm getPatient ở HomeController-->
            <!--getId, getFullName là các phương thức của đối tượng Patient ở trong models-->
            <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter Name" value = "<?= $patient->getId()?>">
            <div class="form-group">
                <label for="name">Name</label>
                <!--$patient truyền từ hàm getPatient ở HomeController-->
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value = "<?php echo $patient->getFullName()?>">
            </div>
            <div class="form-group">
                <label for="gender">gender</label>
                <!--$patient truyền từ hàm getPatient ở HomeController-->
                <input type="text" class="form-control" name="gender" id="gender" placeholder="gender" value = "<?php echo $patient->getGender()?>">
            </div>
        </form>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
    <script src=".././public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../public/js/jquery-3.7.1.min.js"></script>
    <!-- Chú ý link js nhéeeee ko là ko gọi được hàm đâu (nếu dùng js ở dòng 37) -->
    <script src="../../../public/js/patient.js"></script>
</body>
</html>