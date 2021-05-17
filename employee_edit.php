<?php 
    require_once('header.php');
    require_once('private/employee_read_edit.inc.php');
    require_once('private/employee_edit.inc.php');
?>

<main>
    <h1>Edit employee</h1>
    <?php foreach ($result as $row) { ?>
        <form enctype="multipart/form-data" class="form" action="private/employee_edit.inc.php" method="post">
        <input type="hidden" name="id" value="<?= $row["employee_id"]; ?>">
            <p class="white">Name:</p><input type="text" name="employee_name" value="<?php echo $row["name"]; ?>" placeholder="Name">
            <p class="white">Function:</p><input type="text" name="employee_function" value="<?php echo $row["function"]; ?>" placeholder="Function">
            <p class="white">Day of birth:</p><input type="date" name="employee_birthday" value="<?php echo $row["birthday"]; ?>">
            <p class="white">Employee photo:</p><input type="file" name="employee_photo">
            <button class="overview_btn" type="submit" name="employee_edit_submit"><img width="50px"src="public/images/edit_white.png"></button>
        </form>
    <?php } ?>
</main>

<?php 
    require_once('footer.php');
?>