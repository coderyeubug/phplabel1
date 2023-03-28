<?php
// if(isset($_POST['btn-submit'])) {
//     $name = $_POST['hoten'];
//     $masv = $_POST['masv'];
//     $class = $_POST['lop'];
//     echo $name;
//     echo $masv;
//     echo $class;
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add databases</title>

    <!-- Link Bootstrap 4 -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Form Thêm Sinh Viên</h1>
        <!-- add data to add.php -->
        <form action="./add.php" method="post">
            <div class="form-group"><label for="hoten">Họ tên</label><input type="text" id="hoten" name="hoten" class="form-control"></div>
            <div class="form-group"><label for="masv">Mã sinh viên</label><input type="text" id="masv" name="masv" class="form-control"></div>
            <div class="form-group"><label for="lop">Lớp</label><input id="lop" name="lop" type="text" class="form-control"></div>
            <button name="btn-submit" type="submit" class="btn btn-primary">Thêm sinh viên</button>
        </form>
    </div>
</body>
</html>