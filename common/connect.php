<?php

function make_query($query){
    require ("config.php");
    global $link;
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));
    $result = mysqli_query($link, $query);

    return $result;
}