<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/responsive.css">
        <title>Smoelenboek</title>
    </head>
    <body>

    <?php require_once('private/login.inc.php'); ?>

    <header>
        <div class="header">
            <div class="logo-home">
                <a href="index.php"><img src="public/images/logo_white.png" alt="logo" id="logo"></a>
            </div>
            <nav class="nav-header">
                <ul class="nav-item-container">
                
                    <!-- User is uitgelogd-->
                    <?php if(!isset($_SESSION["session_id"])) { ?>
                    <li class="nav-item"><a href="login.php">Login</a></li>
                    <li class="nav-item"><a href="register.php">Register</a></li>
                    <?php } ?>

                    <!-- Admin is ingelogd-->
                    <?php if($_SESSION["session_id"] == 1) { ?>
                    <li class="nav-item"><a href="overview.php">Overview</a></li>
                    <li class="nav-item"><a href="employee_add.php">Add employee</a></li>
                    <?php } ?>

                    <!-- User is ingelogd-->
                    <?php if(isset($_SESSION["session_id"])) { ?>
                    <li class="nav-item">
                        <form action="private/logout.inc.php" method="post">
                            <button type="submit" class="logout_button" name="logout_submit">Logout</button>
                        </form>
                    </li>
                    <?php } ?>

                    
                    <button class="toggleNav toggleNavOff" onclick="toggleNavOff()"><img src="public/images/menu_black.png"></button>
                </ul>
            </nav>
        </div>
    </header>
    <button class="toggleNav toggleNavOn" onclick="toggleNavOn()"><img src="public/images/menu_black.png"></button>
    

