<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h1>PHP + MySQL CRUD Demo</h1>
  <p>Create, read, update, and delete records below</p>
  <table>
  <tr>
    <th>Id</th>
    <th>Fname</th>
    <th>Lname</th>
  </tr>
  <?php
  include_once('createDb.php');
  $sql = "SELECT * FROM tb1";
  $result = mysqli_query($conn, $sql);
 if(mysqli_num_rows($result>0)){
  while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['lname']; ?></td>
      <td><a href="update.php?id=<?php echo $row['id']; ?>">update</a></td>
      <td><a href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
    </tr>
  <?php
  }}
  ?>
</table>
 
</div>
</body>
</html>


