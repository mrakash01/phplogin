<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'sql6.freesqldatabase.com');
define('DB_USERNAME', 'sql6425705');
define('DB_PASSWORD', 'd5AWJpAKE6');
define('DB_NAME', 'sql6425705');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>
