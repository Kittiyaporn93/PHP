<?php
    $customerld = $_POST['customerld'];
    $customerName = $_POST['fullname'];
    $customerAddress = $_POST['customerAddress'];
    $customerEmail = $_POST['email'];
    $customerTelephone = $_POST['call'];

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName ="bookstroe";
    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn)
        die("ไม่สารมารถติดต่อกับ MySQL ได้" );
        mysqli_select_db($conn, $dbName) or die("ไม่สามารถล็อกฐานข้อมูล bookstroe ได้ ");
        mysqli_query($conn, "set character_set_connection=utf8mb4");
        mysqli_query($conn, "set character_set_client=utf8mb4");
        mysqli_query($conn, "set character_set_results=utf8mb4");

        if (empty(trim($customerName)) || empty(trim($customerAddress)) || empty(trim($customerEmail)) || empty($customerTelephone)) {
            echo "<script> alert('กรุณากรอกข้อมูลให้ครบถ้วน');history.back(); </script>";
            exit();
        }

        $sql = "update customer set customerName='$customerName', customerAddress='$customerAddress', customerEmail='$customerEmail', customerTelephone='$customerTelephone' where customerld='$customerld'";
        mysqli_query($conn, $sql) or die("update ลงตาราง customer มีข้อผิดพลาดเกิดขึ้น" .mysqli_error());
        mysqli_close($conn);
        echo '<center><br><br><h2>แก้ไขข้อมูลลูกค้ารหัส '.$customerld.' เรียบร้อย</h2></center>';
        echo '<center><br><br><a href="customer.php?">กลับหน้าcustomer.php</a></center>';
        echo '</center>';
?>