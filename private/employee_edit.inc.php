<?php
require_once('db.inc.php');

if(isset($_POST['employee_edit_submit'])){    
    $id = htmlspecialchars($_POST['id']);
    
    $name = htmlspecialchars($_POST['employee_name']);
    $function = htmlspecialchars($_POST['employee_function']);
    $birthday = $_POST['employee_birthday'];


    $target = "employee_images/";
    $fileName = $_FILES['employee_photo']['name'];
    $fileTarget = $target . $fileName;
    $tempFileName = $_FILES["employee_photo"]["tmp_name"];
    $photo = move_uploaded_file($tempFileName, $fileTarget);

    try {
        $stmt = $db->prepare("UPDATE `employees` SET name = ? , function = ? , birthday = ? , filename = ? , filepath = ? WHERE employee_id = ?");
        $stmt->execute([$name, $function, $birthday, $fileName, $fileTarget, $id]);
    } catch (PDOException $e) {
        echo "error: $e";
    }

    header('location: ../overview.php');
}