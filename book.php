<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="images/favicon.png" type="image/png" />
    <link rel="apple-touch-icon" href="images/favicon.ico" type="image/png" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, viewport-fit=cover"
    />
    <meta name="theme-color" content="#49796b" />
    <meta name="description" content="Library | Book" />
    <title>Library | Book</title>
    <link rel="stylesheet" href="styles/root.css">
    <link rel="stylesheet" href="styles/base-style.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/book.css">
</head>
<body>
    <!-- اضافه کردن هدر به فایل -->
    <?php include("structure/header.php") ?>

    <!-- محتوای اصلی -->
    <main>
        <?php include("db/getBookById.php") ?>

        <hr>

        <h2 style="font-size: 2.5rem; margin-bottom: 1rem">- بقیه کتاب ها</h2>

        <section class="books">
            <?php
              include("db/getOtherBooks.php")
            ?>
      </section>
    </main>

    <!-- اضافه کردن فوتر به فایل -->
    <?php include("structure/footer.php") ?>
    
    <script src="js/header.js"></script>
</body>
</html>