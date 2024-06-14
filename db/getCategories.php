<?php
// توضیحات در فایل getBookById.php نوشته شده
include("db.php");
// گرفتن تمام دسته بندی ها از دیتابیس
$sql = "SELECT * FROM categories";
$result = $connection -> query($sql);
$category_id = isset($_GET["category_id"]);

if ($result -> num_rows > 0) {
    $active_category = null;

    while ($row = $result -> fetch_assoc()) {
        if ($category_id) {
            $active_category = $_GET["category_id"] == $row['id'] ? "active" : "";
        }
    
        echo "<a href='/bookstore/categories.php?category_id=".$row['id']."' class='category ".$active_category."'>".
                "<img src='".$row['image_src']."' alt='".$row['title']."'>
                <h4>".$row['title']."</h4>
              </a>";
    }
} else {
    echo "<h3 style='color: red; margin-block: 1rem;'>هیچ دسته بندی پیدا نشد !</h3>";
}
?>