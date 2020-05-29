<?php
define('DB_SERVER','172.28.0.3');
define('DB_USER','root');
define('DB_PASS' ,'my_secret_pw_shh');
define('DB_NAME','mydatabase');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>