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
    <meta name="description" content="Library | Search" />
    <title>Library | Search</title>
    <link rel="stylesheet" href="styles/root.css">
    <link rel="stylesheet" href="styles/base-style.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/search.css">
</head>
<body>
    <!-- اضافه کردن هدر به فایل -->
    <?php include("structure/header.php") ?>

    <!-- محتوای اصلی -->
    <main>
      <form>
        <div class="searchbox">
            <input type="text" placeholder="... جستجو برای کتاب" name="q">
            <button>Search</button>
        </div>

        <div class="filters">
            <select name="type" id="type">
                <option value="by_title">
                    جستجو با ...
                </option>

                <option value="by_title">
                    نام کتاب
                </option>

                <option value="by_category">
                    موضوع
                </option>

                <option value="by_author">
                    نویسنده
                </option>
            </select>
        </div>
      </form>

      <h2 style="font-size: 2.5rem;">- نتایج جستجو</h2>
      <section class="books">
        <?php
          include("db/getBooksBySearchTerm.php")
        ?>
      </section>
    </main>

    <!-- اضافه کردن فوتر به فایل -->
    <?php include("structure/footer.php") ?>
    
    <script src="js/header.js"></script>
</body>
</html>