<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is an example">
        <meta name=viewport content="width=device-width, intitial-scale=1">
        <title></title>

    </head>
    <body>
        <header>
            <nav>
                <a href="#">
                    <img src="img/test.png" alt="logo">
                </a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Test1</a></li>
                    <li><a href="#">Test2</a></li>
                    <li><a href="#">Test3</a></li>
                </ul>
                <div>
                    <form action="login.php" method="post">
                        <input type="text" name="email" placeholder="Username/Email...">
                        <input type="password" name="password" placeholder="Password...">
                        <button type="submit" name="login">Login</button>
                    </form>
                    <a href="signup.php">Signup</a>
                    <form action = "logout.php" method="post">
                        <button type="submit" name="logout">Logout</button>
                    </form>
                </div>
            </nav>
        </header>

    </body>

</html>
