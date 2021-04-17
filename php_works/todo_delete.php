<?php
// idをgetで受け取る
$id = $_GET['id'];
// idを指定して更新するSQLを作成 -> 実行の処理
$sql = 'DELETE FROM works WHERE id=:id';
...
// 一覧画面にリダイレクト
header('Location:todo_read.php');