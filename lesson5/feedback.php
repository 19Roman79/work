<?php

$arr = ["-","<",">","/","#","%","&","0","1","2","3","4","5","6","7","8","9"];

$name = $_POST['name'];

$phone = $_POST['phone'];

strip_tags($name);

if (iconv_strlen($name) >= 2 && is_numeric($phone) && iconv_strlen($phone) == 10) {
    echo str_replace($arr,"",$name);
} else {
    echo "Некорректый ввод";
};

?>