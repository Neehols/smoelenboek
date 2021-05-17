<?php 
    require_once('header.php');
    require_once('private/employee_add.inc.php');
?>

<main>
    <h1>Add employee</h1>
        <form enctype="multipart/form-data" class="form" action="private/employee_add.inc.php" method="post">
            <p class="white">Name:</p><input type="text" name="employee_name" placeholder="Name">
            <p class="white">Function:</p><input type="text" name="employee_function" placeholder="Function">
            <p class="white">Day of birth:</p><input type="date" name="employee_birthday">
            <p class="white">Employee photo:</p><input type="file" name="employee_photo">
            <button class="overview_btn" type="submit" name="employee_add_submit"><img width="50px"src="public/images/save_white.png"></button>
        </form>
    </main>

<?php 
    require_once('footer.php');
?>