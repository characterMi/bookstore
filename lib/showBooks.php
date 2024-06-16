<?php
// این فانکشن هم مثل فانکشن توی فایل بالاییه با این تفاوت که این فانکشن کتاب های زیادی میگیره و برای همین باید روی دیتا حلقه بزنیم و نشونش بدیم
function show_books ($condition, $result) {
    if ($condition) {
        // حلقه زدن برروی دیتا
        while ($row = $result -> fetch_assoc()) {
            $categories = explode(",", $row['categories']);
            
            // تبدیل عدد به فرمت معمول, مثال = 100000 => 10,000
            $price = number_format($row['price']);
    
            echo "
                <a href='/bookstore/book.php?book_id=".$row['id']."' class='book-card'>
                    <img src='".$row['cover']."'"." alt='".$row['title']."'>
                    <div class='about'>
                            <h2>".$row['title']."</h2>
                        <div class='main-information'>
                            <p>- ".$row['author']."</p>
                            <div class='price'>
                                <s>".$price."</s>
                                <p>رایگان</p>
                            </div>
                        </div>
                        <p class='description'>".$row['description']."</p>
                        <div class='categories'>";
                        
            foreach ($categories as $category) echo "<p>#".$category."</p>";
    
            echo "
                        </div>
                    </div>
                </a>";
        }
    } else {
        echo "<h3 style='color: red; margin-block: 1rem;'>هیچ کتابی پیدا نشد !</h3>";
    }
}
?>