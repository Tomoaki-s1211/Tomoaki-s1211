<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskAssociativeArray</title>
</head>
<body>
    <?php
        $score = [
            "aScore" => [
                "japanese" => 85,
                "mathematics" => 64,
                "socialStu" => 45,
                "science" =>77,
                "english" =>80,
            ],
            "bScore" => [
                "japanese" => 56,
                "mathematics" => 89,
                "socialStu" => 73,
                "science" =>85,
                "english" =>78,
            ],
            "cScore" => [
                "japanese" => 98,
                "mathematics" => 87,
                "socialStu" => 88,
                "science" =>92,
                "english" =>96,
            ],
        ];

        echo("<p>課題1</p>");

        echo("<p>1.</p>");
        echo("A君の理科の点数は".$score["aScore"]["science"]."点です。");

        echo("<p>2.</p>");
        echo("B君の英語の点数は".$score["bScore"]["english"]."点です。");

        echo("<p>3.</p>");
        $aAverage = array_sum($score["aScore"]) / 5;
        echo("A君の平均点は".$aAverage."点です。");

        echo("<p>4.</p>");
        $cAverage = array_sum($score["cScore"]) / 5;
        echo("C君の平均点は".$cAverage."点です。");

        echo("<p>5.</p>");
        $allMathematics = $score["aScore"]["mathematics"] + $score["bScore"]["mathematics"] + $score["cScore"]["mathematics"];
        $allMathematicsAverage = $allMathematics / 3;
        echo("3人の数学の平均点は".$allMathematicsAverage."点です。");

    ?>
</body>
</html>