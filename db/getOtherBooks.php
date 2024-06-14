<?php
// توضیحات در فایل getBookById.php نوشته شده
include("db.php");
include("lib/showBooks.php");

$sql = "SELECT * FROM books";
$result = $connection -> query($sql);
$book_id = isset($_GET["book_id"]);

if (!$book_id) {
    show_books($result -> num_rows > 0, $result);
} else {
    $book_id = $_GET["book_id"];
    $sql = "SELECT * FROM books WHERE id != $book_id";
    $result = $connection -> query($sql);
    
    show_books($result -> num_rows > 0, $result);
}
?>