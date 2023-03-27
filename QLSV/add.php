<?php
$ht = $_POST['hoten'];
$masv = $POST['masv'];
$lop = $POST['lop'];

// Connect data
require_once 'connect.php';

// SQL 
$addsql = "insert into sinhviend (masv, hoten, lop) value ('$masv', '$ht', '$lop')";
// echo $addsql; exit;

// Executed 
mysqli_query($conn, $addsql);


// 
echo "<h1>Thêm thành công</h1>";
?>