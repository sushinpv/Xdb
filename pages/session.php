<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"select usn from xdb where usn='$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['usn'];

   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
