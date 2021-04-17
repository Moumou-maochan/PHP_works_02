<?php
include('functions.php');
$pdo = connect_to_db();
$sql = 'SELECT * FROM works';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();


if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
 } else {
  $record = $stmt->fetch(PDO::FETCH_ASSOC);
 }
 ...

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB連携型todoリスト（入力画面）</title>
</head>

<body>
  <form action="todo_create.php" method="POST">
  <input type="hidden" name="id" value="<?=$record['id']?>">
    <fieldset>
      <legend>勤怠管理（入力画面）</legend>
      <a href="todo_read.php">一覧画面</a>
      <div>
       <input type="date" name="date" value="<?= $record["date"] ?>">
      </div>
      <div>
        <input type="time" name="start_time" value="<?= $record["start_time"] ?>">
      </div>
      <div>
        <input type="time" name="end_time" value="<?= $record["end_time"] ?>">
      </div>
      <div>
        <input type="time" name="break_time" value="<?= $record["break_time"] ?>">
      </div>
      <div>
        <textarea name="comment" id="" cols="30" rows="10" value="<?= $record["comment"] ?>"></textarea>
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>