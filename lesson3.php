<?php
/*1.При помощи цикла for выведите все нечетные числа от 1 до 50;*/

for ($i = 0; $i <= 50; $i++ ) {
    if ($i % 2) {
        echo $i;
    }
};

/*2.При помощи цикла while вывести список категорий. Результат Категория 1, Категория 2, и т.д.;*/

$i=1;
while ($i <=5) {
echo "<br>Категория" .$i;
$i++;
}

/*3.Написать скрипт, который выведет Заголовок, Дату и Имя автора, Картину поста (цикл while);*/

$posts = [
    0 => [
        'title' => 'List-based media object 1',
        'slug' => 'list-based-media',
        'author' => 'Author 1',
        'description' => 'Cras sit amet nibh libero, in g
            ravida nulla. Nulla vel metus scelerisque ante sollicitudin.
             Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
             Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
    ],
    1 => [
        'title' => 'List-based media object 2',
        'author' => 'Author 1',
        'description' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
    ],
    2 => [
        'title' => 'List-based media object 3',
        'author' => 'Author 1',
        'description' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
    ]
];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Blog</h1>
    <ul class="list-unstyled">
        <?php
        $i = 0;
        while ($posts[$i]):?>
            <li class="media">
                <h5 class="mt-0 mb-1"><a href=""><?= $posts[$i]['title'];?></a></h5>
                <p><?= date('Y-m-d');?></p>
                <p><?= $posts[$i]['author'];?></p>
                <div class="media-body">
                    <p><?= $posts[$i]['description']; $i++;?><p>
                </div>
            </li>
        <?php endwhile;?>
    </ul>
</div>
</body>
</html>

<?php

/*4.При помощи цикла foreach вывести список категорий. Результат Категория 1, Категория 2, и т.д.*/

$arr = ["Категория1", "Категория2", "Категория3", "Категория4", "Категория5"];

foreach ($arr as $value) {
    echo $value ."<br>";
}

?>

<?php

/*5.При помощи цикла foreach вывести форму с определенными полями.*/
//Вообще не понятно что надо сделать..

$form = [
    'name' => 'Enter name',
    'login' => 'Enter login',
    'password' => 'Enter password'
        ];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="">
        <?php foreach ($form as $key => $item): ?>
               <p> <input type="" value="<?= $item;?>"> <?= $key;?><p>
        <?php endforeach;?>
</form>
</body>
</html>

<?php

/*6. Написать скрипт вывода формы, в котором задействовать подключение конструкци require_once;*/

require_once 'form.php';

/*7. Задача. Переменная $lang может принимать два значения: 'ru' и 'en'. Если она имеет значение 'ru',
то в переменную $arr запишем массив дней недели на русском языке,
а если имеет значение 'en' – то на английском. Решите задачу через 2 if, через switch-case.*/

$lang = "en";
if ($lang == "ru") {
     echo
    "Понедельник," ."<br>",
    "Вторник," ."<br>",
    "Среда," ."<br>",
    "Четверг," ."<br>",
    "Пятница," ."<br>",
    "Суббота," ."<br>",
    "Воскресенье." ."<br>";
} elseif ($lang == "en") {
    echo
        "Monday," ."<br>",
        "Tuesday," ."<br>",
        "Wednesday," ."<br>",
        "Thusday," ."<br>",
        "Friday," ."<br>",
        "Saturday," ."<br>",
        "Sunday." ."<br>";
} else {
    echo "Некорректный ввод" ."<br>";
};

switch ($lang) {
    case ("ru") :
        echo
            "Понедельник," ."<br>",
            "Вторник," ."<br>",
            "Среда," ."<br>",
            "Четверг," ."<br>",
            "Пятница," ."<br>",
            "Суббота," ."<br>",
            "Воскресенье." ."<br>";
        break;
    case ("en") :
        echo
            "Monday," ."<br>",
            "Tuesday," ."<br>",
            "Wednesday," ."<br>",
            "Thusday," ."<br>",
            "Friday," ."<br>",
            "Saturday," ."<br>",
            "Sunday." ."<br>";
        break;
    default: echo "Некорректный ввод" ."<br>";
}


?>




