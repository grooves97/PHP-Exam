<?php

function db_connection() {
    $dbConf = include "config" . DIRECTORY_SEPARATOR . "db.php";

    $connection = mysqli_connect(
        $dbConf["host"],
        $dbConf["username"],
        $dbConf["password"],
        $dbConf["database"]
    );

    if ($connection == false || mysqli_errno($connection))
        die(mysqli_error($connection));

    return $connection;
}

function db_query($connection, $query) {
    $result = mysqli_query($connection, $query);

    if ($result === false)
        die(mysqli_error($connection));

    return $result;
}

function db_subdata_constructor($index, $keys, $values) {
    $str = " {$keys[$index]}";

    $value = $values[$index];
    if (is_null($value))
        $str .= "NULL";
    else{
        $str .= "{$value}";
    }

    return $str;
}

function db_data_constructor(array $data) {

    $str = "";
    $keys = array_keys($data);
    $values = array_values($data);

    foreach ($keys as $key => $value)
        $str .= db_subdata_constructor($key, $keys, $values);

    return $str;
}

function db_create(string $table, array $cols = ["*"]){
    $connection = db_connection();

    $keys = array_keys($cols);
    $keys = implode(',', $keys);

    $values = array_values($cols);
    $values = implode(',', $values);

    $query = "CREATE TABLE `{$table}` ({$keys} {$values})";
    $result = db_query($connection, $query);

    mysqli_close($connection);

    return $result;
}

function db_drop(string $table){
    $connection = db_connection();
    $query = "DROP TABLE `{$table}`";
    $res = db_query($connection, $query);

    mysqli_close($connection);

    return $res;
}

function db_alter(string $table, array $args){
    $connection = db_connection();
    $data = db_data_constructor($args);
    $query = "ALTER TABLE `{$table}` ADD {$data}";
    $res = db_query($connection, $query);

    mysqli_close($connection);

    return $res;
}