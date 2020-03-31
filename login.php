<?php
    require "header.php";
    session_start();
?>
    <head>
        <link rel="stylesheet" type="text/css" href="css/design.css">
        <meta charset="utf-8">
        <meta name="description" content="This is an example">
        <meta name=viewport content="width=device-width, intitial-scale=1">
        <title>Call Center Management Simulator</title>

    </head>
    <?php
        if(isset($_SESSION["username"]))
        {
            echo "<div>Welcome back $_SESSION[username]!</div>";
        }
    ?>



<?php
    require "footer.php";
?>
