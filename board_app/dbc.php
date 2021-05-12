<?php
require_once('env.php');

function dbConnect() {
  $host = DB_HOST;
  $dbname = DB_NAME;
  $user = DB_USER;
  $pass = DB_PASS;
  $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    
  try {
    $dbh = new PDO($dsn,$user,$pass,[
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
  } catch(PDOException $e) {
    echo '接続失敗'. $e->getMessage(); 
    exit();
  };
  
  return $dbh;
  }

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

?>