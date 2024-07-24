<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обратная связь</title>
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
</head>
<header>
    <a href="index.html" id="main-page"><p id="head-text">VOLLE</p></a>
    <input id="searchpole" type="search">
    <a href="" class="icons"><img src="icons/menu.png" alt=""></a>
    <a href="" class="icons"><img src="icons/bin.png" alt=""></a>
    <a href="login.html" class="icons"><img src="icons/account.png" alt=""></a>
</header>
<body>
    <div class="blocks" id="feedback-div">
        <p id="feedback-text">Если у вас вопрос или отзыв, напишите его ниже!</p>
        <form id="form-feedback" action="addmessage.php" method="post">
            <input class="input-feedback" type="text" name="name" id="" placeholder="Введите Имя"><br>
            <input class="input-feedback" type="email" name="email" id="" placeholder="Введите Почту"><br>
            <textarea class="input-feedback" cols="40" rows="5" name="content" id="big-feedback" placeholder="Введите Отзыв" ></textarea><br>   
            <input class="input-feedback" type="submit" value="Отправить!">
        </form>
    </div>
</body>
</html>