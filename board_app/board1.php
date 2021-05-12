<?php

require_once('dbc.php');

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

$boardData = getAllboard();

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
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="board.css">
  <title>掲示板</title>
</head>
<body>
<h2>APEX掲示板</h2>
  <form action="board2.php" method="POST">
    <div>
    <label for="model">機種 : </label>
        <input type="radio" name="model" value="1" checked="checked">PS4
        <input type="radio" name="model" value="2">PC
        <input type="radio" name="model" value="3">Switch
    </div>

    <div>
    <label for="purpose">目的 : </label>
    <select name="purpose">
        <option value="1">カジュアルマッチ</option>
        <option value="2">ランクマッチ</option>
        <option value="3">訓練場</option>
    </select>
    </div>

    <div>
    <label for="user_id">ID : </label>
    <input id="user_id" type="text" name="user_id">
    </div>

    <div>
    <label for="characters">募集キャラ : </label>
    <select name="characters">
        <option value="1">特になし</option>
        <option value="2">ブラッドハウンド</option>
        <option value="3">ジブラルタル</option>
        <option value="4">ライフライン</option>
        <option value="5">パスファインダー</option>
        <option value="6">レイス</option>
        <option value="7">バンガロール</option>
        <option value="8">コースティック</option>
        <option value="9">ミラージュ</option>
        <option value="10">オクタン</option>
        <option value="11">ワットソン</option>
        <option value="12">クリプト</option>
        <option value="13">レヴナント</option>
        <option value="14">ローバ</option>
        <option value="15">ランパート</option>
        <option value="16">ホライゾン</option>
        <option value="17">ヒューズ</option>
        <option value="18">ヴァルキリー</option>
    </select>
    </div>
    
    <div>
    <label for="rank">ランク帯 : </label>
    <select name="rank">
        <option value="1">特になし</option>
        <option value="2">ブロンズ帯</option>
        <option value="3">シルバー帯</option>
        <option value="4">ゴールド帯</option>
        <option value="5">プラチナ帯</option>
        <option value="6">ダイヤ帯</option>
        <option value="7">マスター帯</option>
        <option value="8">プレデター帯</option>
    </select>
    </div>

    <div>
    <label for="level">レベル : </label>
    <select name="level">
        <option value="1">特になし</option>
        <option value="2">100以上</option>
        <option value="3">200以上</option>
        <option value="4">300以上</option>
        <option value="5">400以上</option>
        <option value="6">500</option>
    </select>
    </div>

    <div>
    <label for="number_player">募集人数 : </label>
    <select name="number_player">
        <option value="1">1人</option>
        <option value="2">2人</option>
    </select>
    </div>

    <div>
    <label for="message">ひと言メッセージ : </label>
    <textarea id="message" name="message"></textarea>
    </div>

    <div class="btn">
      <input type="submit" name="btn_submit" value="送信">
    </div>
  </form>



  <?php foreach($boardData as $column): ?>

  <div class="wrap">
    <ul>
      <li>機種 : <?php echo h(setModelName($column['model'])); ?><span>投稿日時 : <?php echo h($column['post_at']); ?><span><li>
      <!-- <li>投稿日時 : <?php echo h($column['post_at']); ?></li> -->
      <p>目的 : <?php echo h(setPurposeName($column['purpose'])); ?></p>
      <p>ID : <?php echo h($column['user_id']); ?></p>
      <p>募集キャラクター : <?php echo h(setCharactersName($column['characters'])); ?></p>
      <p>募集ランク : <?php echo h(setRankName($column['rank'])); ?></p>
      <p>募集レベル : <?php echo h(setLevelName($column['level'])); ?></p>
      <p>募集人数 : <?php echo h(setNumber_playerName($column['number_player'])); ?></p>
      <p>メッセージ : <?php echo h($column['message']); ?></p><br>
      <p><a href="/delete.php?id=<?php echo $column['id'] ?>">削除</a></p>
    </ul>
  </div>

  <?php endforeach; ?>
</body>
</html>