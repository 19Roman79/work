<meta charset="UTF-8">

<?php

$login = $_POST['login'];
$mail = $_POST['mail'];
$password = $_POST['password'];

$arr = ["<",">",":",";","/","|","[","]","{","}","#","$","%","&","?","(",")","~"," "];

function valid ($elem, $arr) {
    $sum = iconv_strlen($elem);
    if ($sum > 0) {
        $elem = str_replace($arr, "", $elem);
        $sumNew = iconv_strlen($elem);
        if ($sum > $sumNew) {
            false;
        } else {
            return $elem;
        };
    } else {
        false;
    };
};

if (iconv_strlen($login) > 3 && iconv_strlen($login) < 30 && valid($login, $arr) && valid($mail, $arr) && valid($password, $arr)) {

    $handle = fopen('user.txt', 'a+');
    $loginSave = explode(":", file_get_contents('user.txt'));

    function validLogin ($elem1, $elem2) {
        for ($i = 0; $i < count($elem2); $i += 2) {
            if ($elem1 == $elem2[$i]) {
                echo "This login already exists";
                false;
                break;
            } else {
                echo $elem1 . " - login registered";
                return $elem1;
            };
        };
    };

    if (validLogin($login,$loginSave)) {
        fwrite($handle, $login . ":" . $mail . ":" . $password . ":");
        fclose($handle);
    } else {
        fclose($handle);
    };

} else {
    echo "Error registration";
};

?>