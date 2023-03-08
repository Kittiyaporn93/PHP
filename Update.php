<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<style>
p {
    color: red;
}
</style>

<body>
<?php
    $customerld = $_REQUEST['customerld'];
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName ="bookstroe";

    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn)
        die("ไม่สามารถติดต่อกับ MySQL ได้");
    mysqli_select_db($conn, $dbName) or die('ไม่สามารถเลือกฐานข้อมูล bookstore ได้');
    
    mysqli_query($conn,"set character_set_connection=utf8mb4");
    mysqli_query($conn,"set character_set_client=utf8mb4");
    mysqli_query($conn,"set character_set_results=utf8mb4");

    $sql = "select * from customer WHERE customerld = '$customerld'";

    $dbQuery = mysqli_query($conn, $sql);

    if (!$dbQuery)
        die("select join มีข้อผิดพลาด".mysqli_error());

    $result=mysqli_fetch_object($dbQuery)

?>
    <form action="Update2.php" method="post">
        <table border="2" align="center">
            <tr>
                <td colspan="2" width="600" align="center"> แก้ไขมูลลูกค้า </td>
            </tr>
            <tr>
                <td colspan="2"><p>*required field</p></td>
            </tr>
            <tr>
                <td>รหัส</td>
                <td><input type="text" name="customerld" value="<?php echo $result->customerld ?>" readonly></td>
            </tr>
            <tr>
                <td>ชื่อ-นามสกุล : </td>
                <td><input type="text" name="fullname" size="25" value="<?php echo $result->customerName ?>"/> </td>
            </tr>
            <tr>
                <td>ที่อยู่ : </td>
                <td><textarea name="customerAddress"rows="4" cols="43" required><?php echo $result->customerAddress ?> </textarea> <font color="red">*</font></td>
            </tr>
            <tr>
                <td>อีเมล์ : </td>
                <td><input type="text" name="email" size="25" value="<?php echo $result->customerEmail ?>"/></td>
            </tr>
            <tr>
                <td>หมายเลขโทรศัพท์ : </td>
                <td><input type="text" name="call" size="25" value="<?php echo $result->customerTelephone ?>"/></td>
                </td>
            </tr>
        </table>
        <br>
        <center>
            <a href="customer.php">ดูข้อมูลที่มี</a><br><br>
            <input type="submit" name="submit" value="บันทึกข้อมูล">
        </center>
    </form>
</body>
</html>