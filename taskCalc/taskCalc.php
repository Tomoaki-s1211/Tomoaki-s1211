<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskCalc</title>
</head>
<body>
    <p><?php echo('回答を<p>タグで囲み、回答を出力してください。'); ?></p>
    <p><?php echo('回答例: 1 + 1 = ' . (1 + 1) . 'です。'); ?></p>
</body>
<body>
    <?php
    $mon1 = (1 + 3) * 5;
    $mon2 = round(22 / 3, 3);
    $mon3 = ceil(22 / 3);
    $mon4 = floor(22 / 3);
    $mon5 = round( (5 / 36) * 100, 2 );  //サイコロすべての組み合わせ36、そのうち和が8になるのは(2.6)(3.5)(4.4)(5.3)(6.2)の5つ
    ?>

    <p><?php echo("(1+3)×5は $mon1"); ?><p>
    <p><?php echo("22÷3は $mon2 (小数点第3位を四捨五入)"); ?><p>
    <p><?php echo("22÷3は $mon3 (小数点以下切り上げ)"); ?><p>
    <p><?php echo("22÷3は $mon4 (小数点以下切り下げ)"); ?><p>
    <p><?php echo("サイコロを2つ降った時に、総計が8となる確率は $mon5% (小数点第2位を四捨五入)"); ?><p>
</body>
</html>