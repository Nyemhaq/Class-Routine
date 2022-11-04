<?php 
    define('CON_ROOT', "$_SERVER[DOCUMENT_ROOT]/CR/");//document root = full path of file
    include_once(CON_ROOT.'app/db/db.php');
    date_default_timezone_set('Asia/Dhaka');
    session_start();
    // define('ADMIN_RSR',"../../resources/");
    // echo(CON_ROOT);
?>