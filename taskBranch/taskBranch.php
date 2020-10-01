<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskBranch</title>
</head>
<body>
    <p><?php echo('回答を<p>タグで囲み、回答を出力してください。'); ?></p>
    <p><?php echo('回答例: 1 + 1 = ' . (1 + 1) . 'です。'); ?></p>
</body>
<body>
    <?php
        echo('<p>課題1</p>');
        echo('<p>課題1-1</p>');
        $string100 = rand(99, 101);
        echo("確認用$string100<br>");
        if($string100 == 100) {
            echo('$string100は100です。<br>');
        } else {
            echo('$string100は100ではありません。<br>');
        }

        echo('<p>課題1-2</p>');
        if($string100 === 100) {
            echo('$string100は100です。<br>');
        } else {
            echo('$string100は100ではありません。<br>');
        }

        echo('<p>課題1-3</p>');
        if($string100 > 100) {
            echo('$string100は101以上です。<br>');
        } else {
            echo('$string100は101以上ではありません。<br>');
        }

        echo('<p>課題1-4</p>');
        if($string100 >= 100) {
            echo('$string100は100以上です。<br>');
        } else {
            echo('$string100は100以上ではありません。<br>');
        }
    ?>

    <?php
    echo('<p>課題2</p>');
    echo('<p>課題2-1</p>');
    $japanese = rand(1, 100);
    $mathematics = rand(1, 100);
    $science = rand(1, 100);
    $socialStu = rand(1, 100);
    $english = rand(1, 100);
    $testAverage = round(($japanese + $mathematics + $science + $socialStu + $english) /5, 1);
    echo("A君の平均点は{$testAverage}点です。<br>");

    echo('<p>課題2-2</p>');
    if($testAverage >= 67.3) {
        echo('A君の平均点は67.3以上です。');
    } else {
        echo('A君の平均点は67.3未満です。');
    }
    ?>
    
    <?php
    echo('<p>課題3</p>');
    echo('<p>課題3-1</p>');
    $case = '1';
    switch($case) {
        case true:
            echo 'bool';
            break;
        
        case 1:
            echo 'int';
            break;
        
        case '1':
            echo 'string';
            break;

        default:
            echo 'other';
    }

    echo('<p>課題3-2</p>');
    switch($case) {
        case $case === true:
            echo 'bool';
            break;    
        
        case $case === 1:
            echo 'int';
            break;
        
        case $case === '1':
            echo 'string';
            break;

        default:
            echo 'other';
    }
    ?>

</body>
</html>