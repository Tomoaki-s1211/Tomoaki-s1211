<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskVariable</title>
</head>
<body>
    <p><?php echo('回答を<p>タグで囲み、回答を出力してください。'); ?></p>
    <p><?php echo('回答例: 1 + 1 = ' . (1 + 1) . 'です。'); ?></p>
</body>
<body>

    <?php
    $appleValue = 110;
    $orangeValue = 80;
    $appleQuantity = 15;
    $orangeQuantity = 12;
    const TAX_PARCENT = 10;
    $tax = TAX_PARCENT / 100;
    $appleTotal = $appleValue * $appleQuantity;
    $orangeTotal = $orangeValue * $orangeQuantity;
    $total = $appleTotal + $orangeTotal;
    $totalTax = $total + $total * $tax;
    $fruitsAverage = round($total / ($appleQuantity + $orangeQuantity))
    ?>

    <p><?php echo("リンゴの総額(税抜き)は $appleTotal です。") ?></p>
    <p><?php echo("オレンジの総額(税抜き)は $orangeTotal です。") ?></p>
    <p><?php echo("総額(税抜き)は $total です。") ?></p>
    <p><?php echo("総額(税込み)は $totalTax です。") ?></p>
    <p><?php echo("フルーツ1個あたりの金額(税抜き)は $fruitsAverage です。") ?></p>

</body>
</html>