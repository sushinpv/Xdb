<?php
    $connection = mysqli_connect("localhost","root","") or die(mysqli_error());
    mysqli_select_db($connection,"xdb") or die(mysqli_error());
?>
