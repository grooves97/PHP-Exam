<?php

    $word = $_POST['word'];
    $word_en = $_POST['word_en'];
    if ($word != '' || $word_en != ''){
        $mysql = new mysqli('localhost','root','','dictionary');

        $result = $mysql->query("INSERT INTO `Words`(`Name`,`Word_en`) VALUES('$word','$word_en')");

        $result = $mysql->query("INSERT INTO `Word_en`(`Name`) VALUES('$word_en')");

        $mysql->close();
    }

header('Location: /main-form/main.php');
