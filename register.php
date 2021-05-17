<?php 
    require_once('header.php');
    require_once('private/register.inc.php');
?>

    <main>
        <h1>Register</h1>
        <form class="form" action="private/register.inc.php" method="post">
            <p class="white">Name:</p><input type="text" name="username_uid" placeholder="Username">
            <p class="white">Password:</p><input type="password" name="password_uid" placeholder="Password">
            <p class="white">Confirm password:</p><input type="password" name="password_confirm" placeholder="Password Confirm">
            <button type="submit" name="register_submit">Register</button>
        </form>
    </main>

<?php 
    require_once('footer.php');
?>
