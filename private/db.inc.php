<?php

try {
     $db = new PDO('mysql:host=localhost;dbname=smoelenboek', "niels", "niels"); 
} catch (PDOException $e) {
    echo "Failed to connect: $e";
}
    




