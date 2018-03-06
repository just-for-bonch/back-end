<?php
session_start();
echo "<p>Добавить ачивку!</p>
<form method=\"post\" action='add_achieve.php'>
<label>Выберите файл:</label><br>
<input type=\"file\" name=\"filename\" id=\"file\"><br>
<label>Введите название:</label><br>
<input type=\"text\" name='name_ach'><br>
<label>Введите награду:</label><br>
<input type='text' name='reward'><br>
<input type='submit' value='Создать ачивку'>
</form>";


?>
