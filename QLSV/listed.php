<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listed</title>

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
        <h1>Danh sách sinh viên</h1>
    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Mã sinh viên</th>
        <th>Họ tên</th>
        <th>Lớp</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
        <!-- Cần các thuật toán -->
        <!-- Connect -->
        <?php
        require_once 'connect.php';

        // Statement
        $listed_sql = 'select * from sinhvien order by lop, hoten';

        // Executed
        $result = mysqli_query($conn, $listed_sql);

        // Duyệt qua result
        while ($r = mysqli_fetch_assoc($result)) {
?>

    <tr>
        <td><?php echo $r['masv']?></td>
        <td><?php echo $r['hoten']?></td>
        <td><?php echo $r['lop']?></td>
        <td>
            <a href="" class="btn btn-success">Sửa</a> 
            <a href="delete.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">Xóa</a>
        </td>
    </tr>
            <?php
        }
            ?>
    </tbody>
  </table>
    </div>
</body>
</html>


