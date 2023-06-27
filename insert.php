<?php
include_once('createDb.php');
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
}
$sql="INSERT INTO tb1(id,fname,lname)values(' $id', '$fname','$lname')";
$result=mysqli_query($conn,$sql);
header("location: display.php");
if($result)
{
    echo "inserted succefully";
}
else{
    echo "fail".mysqli_error($result);
}
?>