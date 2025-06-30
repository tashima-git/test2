<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
</head>

<body>

    <h1>お問い合わせフォーム</h1>

    <form action="contactresult.php" method="POST">
        <label>お名前：<input type="text" name="name" required></label>
        <br />
        <label>メールアドレス：<input type="text" name="mail-address" required></label>
        <br />
        <input type="submit" name="submit" value="送信する" />
    </form>

</body>
</html>