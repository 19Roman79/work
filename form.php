<?php
$form = [
    'name' => 'Enter name',
    'login' => 'Enter login',
    'password' => 'Enter password'
];
?>

<form action="">
        <?php foreach ($form as $key => $item): ?>
               <p> <input type="text" value="<?= $item;?>"> <?= $key;?><p>
        <?php endforeach;?>
</form>

