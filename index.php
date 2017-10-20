<?php
    require("pages/connect.php");
?>


<html>

    <head>
        <title>Xdb Pace</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>

    <body>

        <div class="header"></div>
        <p id="head-text" class="unselectable">
                Xdb
        </p>

        <form action="index.php" method="post">

          <div class="container">

            <input type="text" placeholder="Login ID" name="username"/>

            <input type="password" placeholder="Password" name="passwd"/>

            <button type="submit">Login</button>
          </div>

        </form>

        <div class="footer"></div>
        <p id="foot-text" class="unselectable">
                Xdb inc. 2017
        </p>

    </body>

</html>
