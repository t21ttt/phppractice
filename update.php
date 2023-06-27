<?php
include_once('createDb.php');
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $sql = "UPDATE tb1 SET fname='$fname', lname='$lname' WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  
  if ($result) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

$id = $_GET['id'];
$sql = "SELECT * FROM tb1 WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h1>PHP + MySQL CRUD Demo</h1>
  <p>Create, read, update, and delete records below</p>
  <form class="form-inline m-2" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <label for="id">Id:</label>
    <input type="hidden" class="form-control m-2" id="id" name="id" value="<?php echo $row['id'];?>">
    <label for="fname">FName:</label>
    <input type="text" class="form-control m-2" id="fname" name="fname" value="<?php echo $row['fname'];?>">
    <label for="lname">LName:</label>
    <input type="text" class="form-control m-2" id="lname" name="lname" value="<?php echo $row['lname'];?>">
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
  </form>
</div>
</body>
</html>