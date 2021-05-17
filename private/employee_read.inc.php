<?php
require_once('db.inc.php');

try {
    $stmt = $db->prepare("SELECT * FROM `employees`");
    $stmt->execute();
    $result = $stmt->fetchAll();

} catch (PDOException $e) {
    echo "error: $e";
}