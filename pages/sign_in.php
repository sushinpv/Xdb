<?php
    $user = $_POST['username'];
    $passwd = $_POST['passwd'];

    #check the length of login ID to determine stud/fac
    $len = strlen($user);

    #establish conncection to database
    $connect = mysqli_connect("localhost","root","") or die(mysqli_error());
    mysqli_select_db($connect,"xdb") or die(mysqli_error());

    #copy credentials from user input $_POST
    $user = stripslashes($user);
    $passwd = stripslashes($passwd);
    $user = mysqli_real_escape_string($connect,$user);
    $passwd = mysqli_real_escape_string($connect,$passwd);

    #query to check for existence of user
    if($len == 10){
        $sql = "SELECT * FROM student_login WHERE usn='$user' AND password='$passwd'";
    }else{
        $sql = "SELECT * FROM faculty_login WHERE fid='$user' AND password='$passwd'";
    }
    $result = mysqli_query($connect,$sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $passwd;

        #depending on login data, display stud/faculty page
        if($len == 10){
            header("location: student_login.php");
        }else{
            header("location: faculty_login.php");
        }
    }else{
        #display message and a button to go back to login page
        header("location: signin_error.php");
    }
?>
