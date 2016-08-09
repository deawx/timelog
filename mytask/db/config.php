<?php
class DatabaseConnection{
    public function __construct(){
        global $pdo;
        try{
$pdo = new PDO('mysql:host=localhost;dbname=timelog;charset=utf8', 'tlog_user', 'tlog123');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

}
catch(PDOException $e){
    echo 'Exception -> ';
    var_dump($e->getMessage());       
    }

        }}



