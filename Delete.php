<?php
    $customerld = $_REQUEST['customerld'];
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName ="bookstroe";
    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn)
        die("ไม่สารมารถติดต่อกับ MySQL ได้" );
        mysqli_select_db($conn, $dbName) or die("ไม่สามารถล็อกฐานข้อมูล bookstroe ได้ ");

    $sql ="delete from customer where customerld='$customerld' ";
    mysqli_query($conn, $sql) or die ("delete จากตาราง customer มีข้อผิดพลาดเกิดขึ้น" .mysqli_roror());
    mysqli_close($conn); 
    header("location:customer.php");

?>
