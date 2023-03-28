<?php
$ht = $_POST['hoten'];
$masv = $_POST['masv'];
$lop = $_POST['lop'];

// Connect data
require_once 'connect.php';

// SQL 
$addsql = "insert into sinhvien (masv, hoten, lop) value ('$masv', '$ht', '$lop')";
// echo $addsql;

// Executed 
mysqli_query($conn, $addsql);
// if(mysqli_query($conn, $addsql)) {
//     echo 'fhdahfnlas'; 
// } else {
//     echo mysqli_error($conn);
// };



// 
echo "<h1>Thêm thành công</h1>";
?>