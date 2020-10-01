<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskArray</title>
</head>
<body>
    <p><?php echo('回答を<p>タグで囲み、回答を出力してください。'); ?></p>
    <p><?php echo('回答例: 1 + 1 = ' . (1 + 1) . 'です。'); ?></p>
</body>
<body>
    <?php
    echo('<p>課題1</p>');
    $japanAverageSalaryArray = [
        2014 => 4150000,
        2015 => 4200000,
        2016 => 4220000,
        2017 => 4320000,
        2018 => 4410000,
    ];

    echo("<p>1.</p>");
    echo("<pre>");
    var_dump($japanAverageSalaryArray);
    echo("</pre>");

    echo("<p>2.</p>");
    $japanAverageSalaryArrayFive = array_sum($japanAverageSalaryArray) / 5;
    echo("過去5年間の平均年収は".$japanAverageSalaryArrayFive."です。");

    echo('<p>課題2</p>');
    $score = [
        'A' => 80,
        'B' => 55,
        'C' => 61,
        'D' => 76,
        'E' => 34,
        'F' => 93,
    ];

    echo("<p>1.</p>");
    echo("<pre>");
    var_dump($score);
    echo("</pre>");

    echo("<p>2.</p>");
    $scoreAverage = array_sum($score) / 6;
    echo("平均点は".$scoreAverage."です。");

    ?>
</body>
</html>