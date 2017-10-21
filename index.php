<?php
    include("pages/config.php");
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = mysqli_real_escape_string($connect,$_POST['username']);
        $passwd = mysqli_real_escape_string($connect,$_POST['passwd']);

        $sql = "SELECT * FROM xdb WHERE usn='$user' AND password='$passwd'";
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);

        if($count == 1){
            session_register("myusername");
            $_SESSION['login_user'] = $user;
            header("location: welcome.php");
        }else{
            $error = "Invalid credentials!";
        }
    }
?>

<html>

    <head>
        <title>Xdb Pace</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>

    <body>
    <div class="step-one">
        <div class="step-two">
            <div class="header"></div>
            <p id="head-text" class="unselectable">
                    Xdb
            </p>

            <form action="" method="post">

              <div class="container">

                <input type="text" placeholder="Login ID" name="username" maxlength="10">

                <input type="password" placeholder="Password" name="passwd">

                <button type="submit">Login</button>

                </div>

            </form>

            <div class="footer"></div>
            <p id="foot-text" class="unselectable">
                    Xdb inc. 2017
            </p>
        </div>
    </div>
    </body>

</html>
