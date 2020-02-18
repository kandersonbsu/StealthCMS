<?php
require "header.php";
?>

<main>
    <head>
        <link rel="stylesheet" type="text/css" href="css/design.css">
    </head>
    <body id="signupbody">
        <div id="createAcct">
            <h1 id="signup">Signup</h1>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="username" placeholder="Username" class="d-block">
                <input type="text" name="email" placeholder="Email" class="d-block">
                <input type="password" name="password" placeholder="Password" class="d-block">
                <input type="password" name="passwordConf" placeholder="Confirm Password" class="d-block">
                <button type="submit" name="signup-submit" id="signupButton">Signup</button>
            </form>
        </div>
    </body>
</main>

<?php
require "footer.php";
?>

