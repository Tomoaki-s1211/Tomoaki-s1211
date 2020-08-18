<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskDataType</title>
</head>
<body>
    <p><?php echo('回答を<p>タグで囲み、回答を出力してください。'); ?></p>
    <p><?php echo('回答例: 1 + 1 = ' . (1 + 1) . 'です。'); ?></p>
</body>
<body>
    <?php echo("課題1");
    $goko = 5;
    ?>

    <p><?php echo("りんごが${goko}個あります。"); ?></p>

</body>
<body>
    <?php echo("課題2");
    $sentence2 = "string型を使用するときに、ダブルクオート(\")を表示する場合は、バックスラッシュ(\\)が必要です。";
    ?>

    <p><?php echo($sentence2); ?></P>

</body>
<body>
    <?php echo("課題3");
    $sentence3 = 'I\'m Security Enginner';
    ?>

    <p><?php echo($sentence3); ?></p>

</body>
<body>
    <?php echo("課題4");
    const KONBANWA = "こんばんは";
    $taro = "太郎君"
    ?>

    <p><?php echo(KONBANWA."、$taro"); ?></p>

</bod>
</html>