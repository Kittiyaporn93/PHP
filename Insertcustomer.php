<html>
    <head><title> การเพิ่มข้อมูลลูกค้า</title></head>
<body>
<form action="showcustomer.php" method="post" name="form1" id="form1">
<table border="1" align="center" width="500">
<tr>
<td colspan="2" align="center">
<big>เพิ่มข้อมูลลูกค้า</big>
</td>
<tr>
<tr>
<tr>
<td colspan="2" 
<big><font color="red">*required field</big>
</td>
<tr>
<tr>
<td> ชื่อ-นามสกุล : </td>
<td><input type="text" name="fullname" size="25" value=""/> </td>
</tr>
<tr>
<td> ที่อยู่ : 
<td><textarea name="customerAddress"rows="4" cols="43" required></textarea> <font color="red">*</font></td>
</tr>
<td> อีเมล : 
<td><input type="text" name="email" size="25" value=""/></td>
</tr>
</tr>
<td> หมายเลขโทรศัพท์ : 
<td><input type="text" name="call" size="25" value=""/></td>
</tr>
</table>
<tr>
<center>
    <input type="submit" value="บันทึกข้อมูล" />
    <input type="reset" value="ล้างข้อมูล" />
</center>
</td>
</tr>
</from>
</body>
</html>