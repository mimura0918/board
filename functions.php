<?php

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

function getAllboard() {
  $dbh = dbConnect();
  $sql = 'SELECT * FROM board ORDER BY post_at DESC';
  $stmt = $dbh->query($sql);
  $result = $stmt->fetchall(PDO::FETCH_ASSOC);
  return $result;
  // var_dump($result);
  $dbh = null;
}

function setModelName($model) {
  // if ($model === '1') {
  //   return 'PS4';
  // } elseif ($model === '2') {
  //   return 'PC';
  // } else {
  //   return 'Switch';
  // }
  switch ($model) {
    case 1 :
      echo 'PS4';
      break;
    case 2 :
      echo 'PC';
      break;
    case 3 :
      echo 'Switch';
      break;
  }
}

function setPurposeName($purpose) {
  switch ($purpose) {
    case 1 :
      echo 'カジュアルマッチ';
      break;
    case 2 :
      echo 'ランクマッチ';
      break;
    case 3 :
      echo '訓練場';
      break;
  }
}

function setCharactersName($characters) {
  switch ($characters) {
    case 1 :
      echo '特になし';
      break;
    case 2 :
      echo 'ブラッドハウンド';
      break;
    case 3 :
      echo 'ジブラルタル';
      break;
    case 4 :
      echo 'ライフライン';
      break;
    case 5 :
      echo 'パスファインダー';
      break;
    case 6 :
      echo 'レイス';
      break;
    case 7 :
      echo 'バンガロール';
      break;
    case 8 :
      echo 'コースティック';
      break;
    case 9 :
      echo 'ミラージュ';
      break;
    case 10 :
      echo 'オクタン';
      break;
    case 11 :
      echo 'ワットソン';
      break;
    case 12 :
      echo 'クリプト';
      break;
    case 13 :
      echo 'レヴナント';
      break;
    case 14 :
      echo 'ローバ';
      break;
    case 15 :
      echo 'ランパート';
      break;
    case 16 :
      echo 'ホライゾン';
      break;
    case 17 :
      echo 'ヒューズ';
      break;
    case 18 :
      echo 'ヴァルキリー';
      break;
  }
}

function setRankName($rank) {
  switch ($rank) {
    case 1 :
      echo '特になし';
      break;
    case 2 :
      echo 'ブロンズ';
      break;
    case 3 :
      echo 'シルバー';
      break;
    case 4 :
      echo 'ゴールド';
      break;
    case 5 :
      echo 'プラチナ';
      break;
    case 6 :
      echo 'ダイヤ';
      break;
    case 7 :
      echo 'マスター';
      break;
    case 8 :
      echo 'プレデター';
      break;
  }
}

function setLevelName($level) {
  switch ($level) {
    case 1 :
      echo '特になし';
      break;
    case 2 :
      echo '100以上';
      break;
    case 3 :
      echo '200以上';
      break;
    case 4 :
      echo '300以上';
      break;
    case 5 :
      echo '400以上';
      break;
    case 6 :
      echo '500';
      break;
  }
}

function setNumber_playerName($number_player) {
  switch ($number_player) {
    case 1 :
      echo '1人';
      break;
    case 2 :
      echo '2人';
      break;
    case 3 :
      echo '特になし';
      break;
  }
}


?>