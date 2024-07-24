<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ojuju:wght@200..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">   
    <title>Отзывы</title>
</head>
<header>
    <a href="index.html" id="main-page"><p id="head-text">VOLLE</p></a>
    <input id="searchpole" type="search">
    <a href="" class="icons"><img src="icons/menu.png" alt=""></a>
    <a href="" class="icons"><img src="icons/bin.png" alt=""></a>
    <a href="login.html" class="icons"><img src="icons/account.png" alt=""></a>
</header>
<body>
    <h1 class="title">Reviews</h1>
    <div id="cont">
    <?php
        /* Подключаемся к базе данных */
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "volle");

        /* Выбираем данные */
        $sql="SELECT content FROM message_content";
        $result=mysqli_query($link, $sql);

        while ($line=mysqli_fetch_row($result)) {
        echo "<div class='reviews'><b>Отзыв:</b>".$line[0]."</div><br>";
        }
    ?>
    </div>
</body>
</html>