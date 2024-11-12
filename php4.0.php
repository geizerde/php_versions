<?php
// Стартуем сессию
session_start();

// Устанавливаем значение переменной сессии
$_SESSION['username'] = 'Alice';

// Доступ к значению переменной сессии
echo "Привет, " . $_SESSION['username'] . "!"; // Выведет: Привет, Alice!
?>


<?php
// Пример обработки данных формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Используем $_POST для получения данных из формы
    $username = htmlspecialchars($_POST['username']); // Экранируем HTML-символы
    echo "Привет, " . $username . "!";
}
?>

<!-- HTML форма -->
<form method="post">
    Имя пользователя: <input type="text" name="username">
    <input type="submit" value="Отправить">
</form>


<?php
// Подключение файла с помощью include
include 'header.php'; // Если файл не найден, выдаст предупреждение, но код продолжит выполняться

// Подключение файла с помощью require
require 'config.php'; // Если файл не найден, выдаст фатальную ошибку и остановит выполнение скрипта

// Подключение файла только один раз
include_once 'functions.php'; // Подключит файл только один раз, даже если вызвать include_once повторно
?>
