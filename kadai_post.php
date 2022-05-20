<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            background-color: #CCFFFF;
        }
    </style>
    <title>アンケート</title>
</head>

<body>
    <div class="menu">
        <h3>今一番行きたい国はどこですか？</h3>
    </div>
    <!-- <P>※kadai_post_confirm.phpにpostで送ってください。</P> -->
    <form action="kadai_write.php" method="post"> 
        Name: <input type="text" name="name"> <br>
        email: <input type="text" name="email"> <br>
        今一番訪れたい国:
        <input type="radio" name="country" value="イタリア" id = sample1><label for = "sample1">イタリア</label>
        <input type="radio" name="country" value="フランス" id = sample2><label for = "sample2">フランス</label>
        <input type="radio" name="country" value="イギリス" id = sample3><label for = "sample3">イギリス</label>
        <input type="radio" name="country" value="アメリカ" id = sample4><label for = "sample4">アメリカ</label>
        <input type="radio" name="country" value="オーストラリア" id = sample5><label for = "sample5">オーストラリア</label> <br>
        </label>
        <input type="submit" value="送信">
    </form>
</body>

</html>
