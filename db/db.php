<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "bookshop";

// ساخت یک کانکشن به دیتابیس
$connection = new mysqli($server_name, $user_name, $password, $db_name);

// چک کردن کانکشن
if ($connection -> connect_error) {
    die("Connection failed: " . $connection -> connect_error);
}
?>