<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/design.css">
        <meta charset="utf-8">
        <meta name="description" content="This is an example">
        <meta name=viewport content="width=device-width, intitial-scale=1">
        <title>Call Center Management Simulator</title>

    </head>
    <body>
        <header class="header">
            <nav>
                <div class="Picture">
                    <a href="#" id="picture">
                        <img src="img/test.png" alt="logo" id="picture">
                    </a>
                    <ul id="linkList">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Test1</a></li>
                        <li><a href="#">Test2</a></li>
                        <li><a href="#">Test3</a></li>
                    </ul>
                </div>
                <div class="Login">
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="email" placeholder="Username/Email...">
                        <input type="password" name="password" placeholder="Password...">
                        <button type="submit" name="login-submit">Login</button>
                    </form>
                    <div id = "signup">
                    <a href="signup.php">Signup</a>
                    <form action = "logout.php" method="post">
                        <button type="submit" name="logout">Logout</button>
                        </div>
                    </form>
                </div>
            </nav>
        </header>
    </body>

</html>
