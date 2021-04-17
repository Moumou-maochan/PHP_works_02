<?php

function connect_to_db(){ 
    $dbn='mysql:dbname=gsacs_d02_05;charset=utf8;
    port=3306;host=localhost';
    $user = 'root';
    $pwd = '';
    try {
    return new PDO($dbn, $user, $pwd);
    } catch (PDOException $e) {
    exit('dbError:'.$e->getMessage());
    }
    }

include('functions.php'); // 関数を記述したファイルの読み込み
$pdo = connect_to_db();

