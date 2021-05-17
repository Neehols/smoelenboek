<?php 
    require_once('header.php');
    require_once('private/employee_read.inc.php');
    require_once('private/employee_delete.inc.php');
?>

<main>
    <h1>Overview</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Function</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row) { ?>
            <tr>
                <form action="private/employee_delete.inc.php" method="post">
                    <input type="hidden" name="id" value="<?= $row["employee_id"]; ?>">
                    <td><?= $row["name"]; ?></td>
                    <td><?= $row["function"]; ?></td>
                    <td><?= $row["filename"]; ?></td>
                    <td><a href="employee_edit.php?edit=<?= $row["employee_id"]; ?>" class="overview_btn"><img src="public/images/edit_white.png"></a></td>
                    <td>
                    <form action="private/employee_delete.inc.php" method="post">
                        <input type="submit" value="Delete" name="employee_delete" class="delete" onClick="return confirm('Are you sure you want to delete this employee?')">
                    </form>
                    
                   
                    
                </form>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</main>

<?php 
    require_once('footer.php');
?>