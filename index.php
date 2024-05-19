<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AJAX</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <form action="vendor/signup.php" method="post">
        <pp>Запись</pp>
        <label>Ваше имя</label>
        <input type="text" name="full_name" placeholder="Введите своё имя">
        <label>Комментарий</label>
        <textarea rows="5" cols="33" name="comment" placeholder="Введите комментарий"></textarea>

        <button type="submit">Выложить</button>

        <?php
        if (isset($_SESSION['message'])) {
            echo ' <p class="msg"> ' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>