<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投稿完了</title>
</head>
<body>
<h2></h2>
  <button onclick="location.href='board1.php'">戻る</button><br>

<?php

require_once('dbc.php');

$boards = $_POST;

// $id = null;
// $model = $_POST["model"];
// $purpose = $_POST["purpose"];
// $user_id = $_POST["user_id"];
// $characters = $_POST["characters"];
// $rank = $_POST["rank"];
// $level = $_POST["level"];
// $number_player = $_POST["number_player"];
// $message = $_POST["message"];

if (empty($boards['user_id'])) {
  exit('IDを入力してください');
}

if (mb_strlen($boards['user_id']) > 191) {
  exit('IDは191文字以下にしてください');
}

$sql = 'INSERT INTO
          board(model, purpose, user_id, characters, rank, level, number_player, message)
        VALUES
          (:model, :purpose, :user_id, :characters, :rank, :level, :number_player, :message)';

$dbh = dbConnect();
$dbh->beginTransaction();

try {
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':model', $boards['model'], PDO::PARAM_INT);
  $stmt->bindValue(':purpose', $boards['purpose'], PDO::PARAM_INT);
  $stmt->bindValue(':user_id', $boards['user_id'], PDO::PARAM_STR);
  $stmt->bindValue(':characters', $boards['characters'], PDO::PARAM_INT);
  $stmt->bindValue(':rank', $boards['rank'], PDO::PARAM_INT);
  $stmt->bindValue(':level', $boards['level'], PDO::PARAM_INT);
  $stmt->bindValue(':number_player', $boards['number_player'], PDO::PARAM_INT);
  $stmt->bindValue(':message', $boards['message'], PDO::PARAM_STR);
  $stmt->execute();
  $dbh->commit();
  echo '投稿しました';
} catch(PDOException $e){
  $dbh->rollBack();
  echo '投稿失敗'. $e->getMessage(); 
  exit($e);
}



?>