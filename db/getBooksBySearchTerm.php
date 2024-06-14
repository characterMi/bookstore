<?php
// توضیحات در فایل getBookById.php نوشته شده
include("db.php");
include("lib/showBooks.php");

$sql = "SELECT * FROM books";
$result = $connection -> query($sql);
$search_term = isset($_GET["q"]);

if (!$search_term) {
    show_books($result -> num_rows > 0, $result);
} else {
    $type = isset($_GET["type"]);
    $search_term = $_GET["q"];

    // چک کردن برای اعمال فیلتر
    if ($type) {
        $type = $_GET["type"];

        switch ($type) {
            // اگر نوع براساس عنوان بود, در دیتابیس برای عنوان سرچ میکنیم
            case 'by_title':
                $sql = "SELECT * FROM books WHERE title LIKE '%$search_term%'";
                break;

            case 'by_category':
                // اگر نوع براساس دسته بندی بود, در دیتابیس برای دسته بندی سرچ میکنیم
                $sql = "SELECT * FROM books WHERE categories LIKE '%$search_term%'";
                break;

            case 'by_author':
                // اگر نوع براساس نویسنده بود, در دیتابیس برای نویسنده سرچ میکنیم
                $sql = "SELECT * FROM books WHERE author LIKE '%$search_term%'";
                break;
            
            default:
                $sql = "SELECT * FROM books WHERE title LIKE '%$search_term%'";
                break;
        }

        $result = $connection -> query($sql);
    }

    // و در نهایت با استفاده از این تابع مقادیر گرفته شده از دیتا بیس رو روی صفحه نمایش میدیم
    show_books($result -> num_rows > 0, $result);
}
?>