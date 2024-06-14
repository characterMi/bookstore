<?php
// توضیحات در فایل getBookById.php نوشته شده
include("db.php");
include("lib/showBooks.php");

$sql = "SELECT * FROM books";
$result = $connection -> query($sql);
$category_id = isset($_GET["category_id"]);

if (!$category_id) {
    show_books($result -> num_rows > 0, $result);
} else {
    $category_id = $_GET["category_id"];
    // تبدیل آیدی کتگوری به مقدار فارسی برای جستجو در دیتابیس
    $all_categories = ["همه", "تاریخی", "سیاسی", "اقتصادی", "اساطیر", "موفقیت و خودسازی", "داستان", "علمی", "روانشناسی"];
    
    switch ($category_id) {
        case 'all':
            $category_id = $all_categories[0];
            break;
        case 'history':
            $category_id = $all_categories[1];
            break;
        case 'politic':
            $category_id = $all_categories[2];
            break;
        case 'economy':
            $category_id = $all_categories[3];
            break;
        case 'myth':
            $category_id = $all_categories[4];
            break;
        case 'self_improvement':
            $category_id = $all_categories[5];
            break;
        case 'story':
            $category_id = $all_categories[6];
            break;
        case 'science':
            $category_id = $all_categories[7];
            break;
        case 'psychology':
            $category_id = $all_categories[8];
            break;
        default:
            $category_id = $category_id;
            break;
    }

    // تغییر دادن دستور sql برای گرفتن کتاب ها با توجه به دسته بندی ها و موضوع انتخاب شده
    $sql = "SELECT * FROM books WHERE categories LIKE '%$category_id%'";
    $result = $connection -> query($sql);
    
    show_books($result -> num_rows > 0, $result);
}
?>