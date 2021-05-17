<?php
require_once('db.inc.php');

if(isset($_POST['employee_delete'])) { 

    $id = htmlspecialchars($_POST['id']);
    
        try {
            $stmt = $db->prepare("DELETE FROM `employees` WHERE employee_id = ?");
            $stmt->execute([$id]);
        } catch (PDOException $e) {
            echo "error: $e";
        }
        header('location: ../overview.php');
}