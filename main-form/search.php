<?php

$word = $_POST['word'];

if ($word != ''){

$mysql = new mysqli('localhost','root','','dictionary');
if ($mysql->connect_error) {
die("Connection failed: " . $mysql->connect_error);
}

$result = $mysql->query("SELECT * FROM `Words` WHERE (name = '$word' or word_en '$word')");

$mysql->close();
}
$res = $result->fetch_assoc();