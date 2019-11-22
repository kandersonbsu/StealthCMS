<?php
require "header.php";
?>

<main>
<h1>Signup</h1>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="passwordConf" placeholder="Confirm Password">
        <button type="submit" name="signup-submit">Signup</button>
    </form>
</main>

<?php
require "footer.php";
?>

