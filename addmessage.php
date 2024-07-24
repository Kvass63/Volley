<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=volle", 'root', '');

    if (empty($_POST['name'])) exit("Поле не заполнено");
    if (empty($_POST['email'])) exit("Поле не заполнено");
    if (empty($_POST['content'])) exit("Поле не заполнено");

    $querry = "INSERT INTO message VALUES (NULL , :name, :email, NOW())";
    $msg = $conn->prepare($querry);
    $msg->execute(['name' => $_POST['name'], 'email'=> $_POST['email']]);

    $msg_id = $conn->lastInsertId();

    $querry = "INSERT INTO message_content VALUES (NULL , :content, :message_id)";
    $msg = $conn->prepare($querry);
    $msg->execute(['content' => $_POST['content'], 'message_id' => '$msg_id']);

    header("Location: index.html");
}
catch (PDOException $e) {
    echo "error";
}

?>