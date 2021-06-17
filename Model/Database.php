<?php 

class Database {
//php connection to database via PDO
   public static function openConnection(): PDO
   //static function so we dont have to create an instance/object to use it
{
    
    $dbhost = "localhost";
    $dbuser = "newuser";
    $dbpass = "newuser";
    $db = "pricecalculator";

    $driverOptions = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    return new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
}
}