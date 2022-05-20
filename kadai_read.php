<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>アンケート集計</title>
</head>
<body>
    <h1>アンケート集計結果</h1>
    <table border="2" style="border-collapse: collapse; border-color: blue">
    <tr>
      <th>入力日時</th>
      <th>名前</th>
      <th>メールアドレス</th>
      <th>行きたい国</th>
    </tr>
    <?php
    // ファイルを開く
    $openFile = fopen('data/data.txt', 'r');
    // ファイル内容を1行ずつ読み込んで出力
    // 一行ずつ読み込んで$strに入れる
    while ($str = fgets($openFile)) { ?>
        <tr>
        <?php 
        $result = explode(',',$str);
        for ($i = 0; $i < count($result); $i++) { ?>
            <td>
            <?php
            echo $result[$i];
            ?>
            </td>
            <?php
        }; ?>
        <tr>
        <?php
    }; ?>
    <?php
    // ファイルを閉じる
    fclose($openFile);
    ?>
  </table>
</body>
</html>
