<?php
// استفاده از فایل db.php که داخلش یک کانکشن ساختیم
include("db.php");

// استفاده از فانکشنی که ساختیم برای نشون دادن کتاب ها روی صفحه
include("lib/showBook.php");

// چک اگر مقدار book_id در کوعری پارامتر ها ست شده
$book_id = isset($_GET["book_id"]);

if (!$book_id) {
    echo "<h3 style='color: red; margin-block: 1rem;'>هیچ کتابی پیدا نشد !</h3>";
} else {
    // گرفتن مقدار آیدی کتاب از کوعری پارامتر ها => http://localhost/bookstore/book.php?book_id=1
    // مقدار book_id=1 که بعد از ? اومده یک کوعری پارامتره
    $book_id = $_GET["book_id"];
    // دستور sql
    $sql = "SELECT * FROM books WHERE id = $book_id";
    // اعمال دستور sql
    $result = $connection -> query($sql);
    
    // استفاده از فانکشن و پاس دادن پارامتر ها بهش
    show_book($result -> num_rows > 0, $result);
}
?>