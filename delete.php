<?php
include_once('createDb.php');


  $id = $_GET['id'];
  $sql = "delete from tb1 where id=$id";
  $result = mysqli_query($conn, $sql);
  if(  $result){
    echo "deletion succeful";
  }
 else{
    echo "not succeful";
 }

?>