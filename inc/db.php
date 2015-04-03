<?php
// Хост (обычно localhost)
$db_host = "localhost";

$db_name = "stats";

$db_user = "root";

$db_pass = "";

$db = mysqli_connect ($db_host, $db_user, "", $db_name) or die ("Невозможно подключиться к БД");
