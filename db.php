<?php
define('MYSQL_SERVER', 'sql153.main-hosting.eu');
define('MYSQL_USER', 'u328338304_proj');
define('MYSQL_PASSWORD', '386419');
define('MYSQL_DB', 'u328338304_proj');

function db_connect(){//конект с базой
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) 
        or die("Error: ".mysqli_error($link));
    if(!mysqli_set_charset($link, "utf8")){
        printf("Error: ".mysqli_error($link));}
    return $link;
}