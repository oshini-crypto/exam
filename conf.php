<?php

define('DB_SERVER', 'localhost');
define('DB_EMAIL', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

$link = mysqli_connect(DB_SERVER, DB_EMAIL, DB_PASSWORD, DB_NAME);

//check connection
if($link == false) {
    die("Could not connect",mysqli_connect_error());
}
?>
