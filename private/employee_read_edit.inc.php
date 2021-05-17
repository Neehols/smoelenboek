<?php
require_once('db.inc.php');

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$id = substr($url, -1);

try {
    $stmt = $db->prepare("SELECT * FROM `employees` WHERE employee_id = ?");
    $stmt->execute([$id]);
    $result = $stmt->fetchAll();

} catch (PDOException $e) {
    echo "error: $e";
}