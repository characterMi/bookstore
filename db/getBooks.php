<?php
// توضیحات در فایل بالایی نوشته شده
include("db.php");
include("lib/showBooks.php");

$sql = "SELECT * FROM books";
$result = $connection -> query($sql);

show_books($result -> num_rows > 0, $result);
?>