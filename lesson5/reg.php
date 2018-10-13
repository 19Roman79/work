<?php
$arr = ["-","<",">","/","#","%","&","0","1","2","3","4","5","6","7","8","9"];

$name = $_POST['name'];

$surname = $_POST['surname'];

$year = $_POST['year'];

strip_tags($name);

strip_tags($surname);

$year = substr($year,0,4);

function year ($val) {
    if ($val > 1918 && $val < 2013) {
        return true;
    } else {
        return false;
    }
};

if (iconv_strlen($name) >= 2 && iconv_strlen($surname) >= 2 && year($year)) {
    echo str_replace($arr,"",$name) ." " .str_replace($arr,"",$surname) ." вы  успешно зарегистрированы";
} else {
    echo "Введите корректные данные";
};

?>