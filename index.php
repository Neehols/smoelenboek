<?php 
    require_once('header.php');
    require_once('private/user.inc.php'); 
    require_once('private/employee_read.inc.php');
?>

    <main>
        <h1>Dashboard</h1>

        <!-- User is uitgelogd-->
        <?php if(!isset($_SESSION["session_id"])) { 
            $_SESSION["session_id"] = null;
        ?>
        <p>Welcome to the You & Me Smoelenboek!</p>
        <p>Please login or create an account first to get an overview of everyone.</p>
        <?php } ?>

        <!-- User is ingelogd-->
        <?php if(isset($_SESSION["session_id"])) { ?>
            <p>Welkom <?php echo $user["username"] ?>!</p>

            <div class="dashboard_container">
                <?php foreach ($result as $row) { ?>
                    <div class="employee_container">
                        <div class="employee">
                            <?php
                               $bday = strtotime($row["birthday"]);
                               if(date('m-d') == date('m-d', $bday)) {?>
                               <div class="birthday_img"><img src="public/images/happy_birthday.png"></div>
                            <?php }?>
                            <input type="hidden" name="id" value="<?= $row["employee_id"]; ?>">
                            <div class="employee_img"><img src="../private/<?php 
                                if($row["filepath"] == "employee_images/"){
                                    echo "employee_images/placeholder.jpg";
                                } else {
                                    echo $row["filepath"];
                                }
                            ?>"></div>
                            <div class="employee_text employee_title"><?= $row["name"]; ?></div>
                            <div class="employee_text employee_function"><?= $row["function"]; ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </main>

<?php 
    require_once('footer.php');
?>

