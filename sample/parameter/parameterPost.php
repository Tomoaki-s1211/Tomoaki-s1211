<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>postParameter</title>
    <!-- CSSファイル -->
    <link rel="stylesheet" href="http://localhost/Tomoaki-s1211/sample/csslib/akafuto.css"> <!-- 赤い太字用 -->
</head>
<body>
    <p>str1は、 <span class="akafutoji"><?php echo($_POST['str1']);?></span>です。</p>
    <p>str2は、 <span class="akafutoji"><?php echo($_POST['str2']);?></span>です。</p>
    <p>str3は、 <span class="akafutoji"><?php echo($_POST['str3']);?></span>です。</p>
</body>
</html>