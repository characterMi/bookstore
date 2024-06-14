<?php
// فانکشنی که پارامتر هارو میگیره و کتاب ها رو توی صفحه نشون میده
function show_book ($condition, $result) {
    if ($condition) {
        // تبدیل دیتای رسیده از دیتابیس به یک آرایه
        $row = $result -> fetch_assoc();
        // مقداری که از دیتابیس میاد به این صورته => همه,داستان,روانشناسی که با استفاده از explode تبدیلش کردم به یک آرایه
        $categories = explode(",", $row['categories']);
        
        // تبدیل عدد به فرمت معمول, مثال = 100000 => 10,000
        $price = number_format($row['price']);  

        // چاپ کردن کتاب های رسیده از دیتابیس
        echo "
            <section class='book'>
                <div class='info'>
                    <div class='cover'>
                        <img src='".$row['cover']."' alt='".$row['title']."'>
                    </div>

                    <div class='about'>
                        <h2>".$row['title']."</h2>
                        <div class='row'>  
                            <h4>اثری از ".$row['author']."</h4>
                            <p class='price'>قیمت : ".$price."</p>
                        </div>
                        <div class='categories'";

                            foreach ($categories as $category) echo "<p>#".$category."</p>";

        echo "
                        </div>

                        <p class='lg-description'>
                            ".$row['description']."
                        </p>
                    </div>
                </div>

                <div class='sm-description'>
                    <p>".$row['description']."
                </div>
            </section>
        ";
    } else {
        // اگر مقداری از دیتابیس برگشت داده نشده بود
        echo "<h3 style='color: red; margin-block: 1rem;'>هیچ کتابی با مشخصه مورد نظر پیدا نشد !</h3>";
    }
}
?>