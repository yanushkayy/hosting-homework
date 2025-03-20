<?php

session_start();

if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
    echo "Привет, " . htmlspecialchars($_SESSION['username']) . "!" . PHP_EOL;
    echo "<a href='exit.php'>Выйти</a>>"
} else {
    echo "<h1>Информация об авторе</h1>";
    echo "<p>Меня зовут Яна, я изучаю PHP и создаю веб-приложения.</p>";

    echo '<h2>Введите ваше имя:</h2>';
    echo '<form action="post.php" method="POST">
            <label for="username">Имя: </label>
            <input type="text" id="username" name="username" required>
            <input type="submit" value="Отправить">
          </form>';
}