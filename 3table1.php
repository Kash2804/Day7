<?php
//db connection
$connection= mysqli_connect("localhost","root","","db_internship");
//query
$q=mysqli_query($connection,"select * from tbl_user1")or die(mysqli_error($connection));
echo"<table border='1'>";
echo"<tr>";
echo"<th>ID</th>";
echo"<th>NAME</th>";
echo"<th>GENDER</th>";
echo"<th>MOBILE</th>";
echo"<th>ACTION</th>";
echo"</tr>";

while($row=mysqli_fetch_array($q)){
    echo"<tr>";
    echo"<td>{$row['user1_id']}</td>";
    echo"<td>{$row['user1_name']}</td>";
    echo"<td>{$row['user1_gender']}</td>";
    echo"<td>{$row['user1_mobile']}</td>";
    echo"<td><a href='delete.php?deleteid={$row['user1_id']}'>Delete</a></td>";
    echo"</tr>";
}
echo"</table>";

echo"<a href='insert.php'>Add Record</a>";

