<?php
$connection= mysqli_connect("localhost","root","","db_form");
$id=$_GET['deleteid'];

$q=mysqli_query($connection,"delete from tbl_student where st_id='{$id}'")or die("Error".mysqli_error($connection));
if($q)
{
    echo"<script>alert('Record Deleted');window.location'3table2.php';</script>";
}
?>


