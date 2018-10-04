<?php

/*1. Задание 1 (Самостоятельная работа)
Создать переменную с произвольным текстом (длиной >10символов). Провести проверку: если длина
строки больше 10 символов, обрезать строку до 10 символов. С помощью функции заменить все символы
"a-g" на пустоту.*/

$str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam aspernatur delectus exercitationem facilis fugiat molestiae pariatur quaerat quo quod!";

if (iconv_strlen($str) > 10) {
echo substr($str, 0, 10) ."<br>";
}

$arr = ["a","b","c","d","e","f","g"];
echo str_replace($arr, "",$str) ."<br>";

/*2. Задание 2 (Самостоятельная работа)

Задание:
Взять Html разметку:
" <div class="refnamediv">
<h1>htmlspecialchars</h1>
<p> (PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">htmlspecialchars</span> —
<span class="dc-title">Любой текст</span></p>
</div>";
Удалить все html теги. Вывести количество символом после фильтрации.*/

$str1 = '<div class="refnamediv">
<h1>htmlspecialchars</h1>
<p> (PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">htmlspecialchars</span> —
<span class="dc-title">Lorem ipsum dolor sit amet</span></p>
</div>';

echo iconv_strlen(strip_tags($str1)) ."<br>";

/*3. Найти и заменить в строке "http://example.com/user/username" user на author; Вывести результат на экран*/

$str2 = "http://example.com/user/username";
echo str_replace("user","author",$str2) ."<br>";

/*4. Отсортировать массивам [1,22,45,3,23,45,6,76,55,4] по возврстанию;*/

$arr1 = [1,22,45,3,23,45,6,76,55,4];

asort($arr1);
print_r($arr1);
echo "<br>";

/*5. Преобразовать строку "Find me and say Hello Mike!" в массив;*/

$str3 = "Find me and say Hello Mike!";

$arr2 = explode(" ",$str3);
print_r($arr2);
echo "<br>";

/*6. Посчитать, сколько букв "a" встречается в строке "Find me and say Hello Mike!";*/

echo substr_count($str3,'a') ."<br>";

/*7. Дан урл "http://example.com/name=Mike&lastname=Jackson&age=25", необходимо разбить и вытащить параметры и вывести на экран.*/

$url = 'http://example.com/name=Mike&lastname=Jackson&age=25';
$newStr = parse_url($url,PHP_URL_PATH);
echo str_replace("&"," ",$newStr);

/**
 * Created by PhpStorm.
 * User: Роман
 * Date: 03.10.2018
 * Time: 19:28
 */
?>

