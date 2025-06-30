<?php

// 未入力チェック
if (empty($_POST['name'])) {
    echo "名前は必須です。";
    exit;
  }
  if (empty($_POST['mail-address'])) {
    echo "メールアドレスは必須です。";
    exit;
  }

$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$mail = htmlspecialchars($_POST['mail-address'], ENT_QUOTES);

print $name . "様（メール：" . $mail . "）<br>お問い合わせありがとうございます";