<html>
    <head><title> รายชื่อลูกค้า</title></head>
<body>
    <?php
    
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

        $sql = "SELECT * FROM customer ORDER BY customerld";
        $result = mysqli_query($conn, $sql);

    echo '<center>';
    echo '<br><h3>รายชื่อลูกค้า</h3>';
    echo '<table width="800" border="0">';
    echo'<tr><td align="left"><a href="Insertcustomer.php">เพิ่มข้อมูลลูกค้า</a></td><tr>';

    echo '<br><table width="800" border="1">';
    echo '<tr bgcolor="">';
    echo '<th width="150">รหัส</th>';
    echo '<th width="200">ชื่อ-นามสกุล</th>';
    echo '<th width="200">ที่อยู่</th>';
    echo '<th width="200">อีเมล</th>';
    echo '<th width="200">หมายเลขโทรศัพท์</th>';
    echo '<th width="80">แก้ไข</th>';
    echo '<th width="80">ลบ</th></tr>';

    while ($rs = mysqli_fetch_array($result))
    {
        echo '<tr align="center" bgcolor="">';
        echo '<td>' .$rs["customerld"]. '</td>';
        echo '<td align="left">'.$rs["customerName"].'</td>';
        echo '<td align="left">'.$rs["customerAddress"].'</td>';
        echo '<td align="left">'.$rs["customerEmail"].'</td>';
        echo '<td align="left">'.$rs["customerTelephone"].'</td>';

        
        echo '<td><a href="Update.php?customerld=' . $rs["customerld"] . '"> [แก้ไข] </a></td>';
        echo '<td><a href="Delete.php?customerld=' . $rs["customerld"] . '" onclick="return confirm(\'Confirm Delete Customer Id ' . $rs["customerld"] . '\')"> [ลบ] </a></td>';
        echo '</tr>';
    }

    echo '</table>';
    mysqli_close($conn);
//winner
?>
</body>
</html>