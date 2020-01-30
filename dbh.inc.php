<?php

$servername = "bakomysql.mysql.database.azure.com";
$dbusername = "bakoadmin@bakomysql";
$dbpassword = "P@$$w0rd2019";
$dbname = "bakomysql";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}else{
    echo 'connected';
}