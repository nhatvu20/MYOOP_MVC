<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href=".././public/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../../../public/bootstrap/css/bootstrap.min.css"> -->
    <!-- ../ là để thoát ra 1 thư mục -->
    <!-- ./ là để từ thư mục đó -->
</head>

<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success mt-3 mb-3">Quản lý</h3>
        <!-- onclick thì file index.php trong public sẽ nhận được $action = viewAdd-->
        <!-- href đến file index trong public DOMAIN la duoc khai bao trong config la http://localhost/MYOOP_MVC/-->
        <a class="btn btn-primary" href="<?= DOMAIN . 'public/index.php?action=viewAdd'?>">
            <i class="bi bi-pencil-square"></i>Thêm mới</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($patients as $patient) {
                    ?>
                    <tr>
                        <th scope="row"><?= $patient->getId(); ?></th>
                        <td><?= $patient->getFullName(); ?></td>
                        <td><?= $patient->getGender(); ?></td>
                        <td>
                            <!-- Gọi đến route để render view -->
                            <!-- onclick thì file index.php trong public sẽ nhận được $action = viewUpdate-->
                            <!-- href đến file index trong public DOMAIN la duoc khai bao trong config la http://localhost/MYOOP_MVC/-->
                            <!-- Chú ý đi thi sửa cả getId -->
                            <a class="btn btn-warning" href="<?= DOMAIN.'public/index.php?id=' . $patient->getId() ?>&action=viewUpdate">
                                <i class="bi bi-pencil-square"></i>Sửa</a>

                        </td>
                        <td>
                            <!-- onclick thì file index.php trong public sẽ nhận được $action = deletePatients-->
                            <!-- href đến file index trong public DOMAIN la duoc khai bao trong config la http://localhost/MYOOP_MVC/-->
                            <!-- Chú ý đi thi sửa cả getId -->
                            <a class="btn btn-danger" href="<?= DOMAIN . 'public/index.php?id=' . $patient->getId() ?>&action=viewDelete">
                                <i class="bi bi-trash3"></i>Xóa</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script> -->
        <script src=".././public/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>