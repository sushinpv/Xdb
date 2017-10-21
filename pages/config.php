<?php
    define("DB_SERVER","localhost");
    define("DB_USER","root");
    define("DB_PASSWORD","");
    define("DB_NAME","xdb");
    $connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD) or die("Error connecting to database!");
    mysqli_select_db($connect,DB_NAME) or die(mysqli_error());
?>
