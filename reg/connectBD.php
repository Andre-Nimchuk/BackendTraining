<?php  
    $host = 'localhost';
    $user = 'cm85227_users';
    $password = '23012001';
    $db = 'cm85227_users';
    
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $user, $password);
    ?>
