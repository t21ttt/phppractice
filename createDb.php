<?php
define("host", "localhost");
define("username", "root");
define("password", "");
define("db_name","final1");
$conn = mysqli_connect(host, username, password,db_name);

if (!$conn) {
    echo "There is no connection: " . mysqli_connect_error();
} else {
    echo "Successfully connected to the database!";
}


?>