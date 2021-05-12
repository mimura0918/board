<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>削除完了</title>
</head>
<body>
<h2></h2>
  <button onclick="location.href='board1.php'">戻る</button><br>
</body>
</html>

<?php

require_once('dbc.php');

// $result = delete($_GET['id']);

// function delete($id) {
//   if(empty($id)) {
//     exit('IDが不正です');
//   }
//   $dbh = dbConnect();
//   $sql = 'DELETE FROM board WHERE id = :id';
//   $stmt = $dbh->prepare($sql);
//   $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);
//   $stmt->execute();
//   echo '投稿を削除しました';
//   return $result;
//   // var_dump($result);
// }

try {
  $dbh = dbConnect();
  $sql = 'DELETE FROM board WHERE id = :id';
  $stmt = $dbh->prepare($sql);
  $stmt->execute(array(':id' => $_GET['id']));
  echo '削除しました';
} catch (Exception $e) {
  echo 'エラーが発生しました:' . $e->getMessage();
}




?>

