<?php
//db connection
$connection= mysqli_connect("localhost","root","","db_internship");
//query
$q=mysqli_query($connection,"select * from tbl_user1")or die(mysqli_error($connection));
//below function will fetch data as Numerical Array
$row=mysqli_fetch_row($q);
//debug
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
//numerical and associative
$row=mysqli_fetch_array($q);
echo"<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
echo $row['user1_id'].$row['user1_name'].$row['user1_gender'].$row['user1_mobile'];
?>
