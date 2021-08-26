<?php
$views = 0;
$visitors_file = "visitors.txt";

// Загружает сохраненное значение и обновляет $views
if (file_exists($visitors_file))
{
    $views = (int)file_get_contents($visitors_file);
}

// Увеличивает счетчик после загрузки страницы
$views++;

// Сохраняет содержимое переменной в файл visitors.txt
file_put_contents($visitors_file, $views);

// Выводит картинку
$img = "https://static.diary.ru/userdir/6/8/7/6/687665/29160535.jpg";
readfile($img);

