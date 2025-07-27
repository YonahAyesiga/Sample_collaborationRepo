<?php
// connect to the database
$connection = mysqli_connect("localhost", "root", "", "db_name");

// display an error message if the connection fails
if(mysqli_connect_errno()){
    echo "Connection to the database failed " . mysqli_connect_errno();

}else {
    echo "Connection to the database was successful! Woow!!!!";
}

?>


