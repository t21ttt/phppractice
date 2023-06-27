<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h1>PHP + MySQL CRUD Demo</h1>
  <p>Create, read, update, and delete records below</p>
  <form class="form-inline m-2" action="insert.php" method="POST">
     <label for="id">Id:</label>
    <input type="text" class="form-control m-2" id="id" name="id">
    <br>
    <label for="name">FName:</label>
    <input type="text" class="form-control m-2" id="name" name="fname">
    <br>
    <label for="lname">LName:</label>
    <input type="text" class="form-control m-2" id="lname" name="lname">
    
    <button type="submit"  name="submit" class="btn btn-primary">Add</button>
  </form>
</div>
</body>
</html>