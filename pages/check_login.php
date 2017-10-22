<?php
    $user = $_POST['username'];
    $passwd = $_POST['passwd'];

    $connect = mysqli_connect("localhost","root","") or die(mysqli_error());
    mysqli_select_db($connect,"xdb");

    $user = stripslashes($user);
    $passwd = stripslashes($passwd);
    $user = mysqli_real_escape_string($connect,$user);
    $passwd = mysqli_real_escape_string($connect,$passwd);

    $sql = "SELECT * FROM student_login WHERE usn='$user' AND password='$passwd'";
    $result = mysqli_query($connect,$sql);

    $count = mysqli_num_rows($result);

    if($count == 1){
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $passwd;

        header("location: login_success.php");
    }else{
        echo "Wrong credentials!";
    }
?>
