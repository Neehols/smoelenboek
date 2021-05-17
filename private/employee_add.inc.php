<?php
require_once('db.inc.php');

if(isset($_POST['employee_add_submit'])){
    $name = htmlspecialchars($_POST['employee_name']);
    $function = htmlspecialchars($_POST['employee_function']);
    $birthday = $_POST['employee_birthday'];


    $target = "employee_images/";
    $fileName = $_FILES['employee_photo']['name'];
    $fileTarget = $target . $fileName;
    $tempFileName = $_FILES["employee_photo"]["tmp_name"];
    $photo = move_uploaded_file($tempFileName, $fileTarget);
   
    try {
        $dbName = 'smoelenboek';
        $tbName = 'employees';
        $stmt= $db->prepare("INSERT INTO $dbName.$tbName (name, function, birthday, filename, filepath) VALUES (?,?,?,?,?)");
        $stmt->execute([$name, $function, $birthday, $fileName, $fileTarget]);

        $db = null;
    } catch (PDOException $e) {
        echo "error: $e";
    }
        header('location: ../overview.php');
} 
