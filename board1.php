<?php

require_once('dbc.php');
require_once('functions.php');

$boardData = getAllboard();

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

<!-- 投稿画面 -->
<h2>APEX掲示板</h2>
  <form action="board2.php" method="POST" id="toukou_post">
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

  <script>
    'use strict';

    {
      document.getElementById('toukou_post').addEventListener('submit', e => {
        e.preventDefault();

        if (!confirm('この内容で投稿しますか？')) {
          return;
        }

        e.target.submit();
      })
    }
  </script>

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
      <!-- <p><a href="/delete.php?id=<?php echo $column['id'] ?>">削除</a></p> -->
    </ul>
  </div>

  <?php endforeach; ?>

</body>
</html>