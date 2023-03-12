<?php
$db_host = 'localhost';
$db_name = 'mydatabase';
$db_user = 'myuser';
$db_pass = 'mypassword';

try {
    $db = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306', 'root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
