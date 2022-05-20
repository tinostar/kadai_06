<?php
// ファイルkadai_post.php より
$name = $_POST['name'];
$email = $_POST['email'];
$country = $_POST['country'];

// 記入時間を取得
$time = date("Y-m-d H:i:s");

// ファイルをオープン　a = add （どうやって開くか）
$file = fopen('data/data.txt', 'a');

// ファイルに書き込み
fwrite($file, $time . "," . $name . "," . $email . "," . $country . "\n");
// ↑　改行

//ファイルに保存
fclose($file);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="kadai_read.php">確認する</a></li>
        <li><a href="kadai_post.php">戻る</a></li>
    </ul>
</body>

</html>
