<?php
require_once('db.inc.php');

if(isset($_POST['register_submit'])){
    $username = htmlspecialchars($_POST['username_uid']);
    $password = htmlspecialchars($_POST['password_uid']);
    $password_confirm = htmlspecialchars($_POST['password_confirm']);
    $admin = 0;

    if($password === $password_confirm) {
        try {
            
            $dbName = 'smoelenboek';
            $tbName = 'users';
            $password = password_hash($password, PASSWORD_DEFAULT);
            $stmt= $db->prepare("INSERT INTO $dbName.$tbName (username, password, admin) VALUES (?,?,?)");
            $stmt->execute([$username, $password, $admin]);

            $db = null;
        } catch (PDOException $e) {
            echo "error: $e";
        }

        header('location: ../index.php');
    } else {
        header('location: ../register.php');
        echo "Password must match";
    }
}
