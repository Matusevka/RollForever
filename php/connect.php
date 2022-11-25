<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "mainsite";

    $link = new mysqli($servername, $username, $password, $db);
    if ($link -> connect_errno) {
        die("Ошибка".$link -> connect_error);
    };
    $link -> set_charset("utf8");
?>