<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskLoop</title>
</head>
<body>
    <?php
        echo("<p>課題1</p>");

        $fruits = [
            "apple" => [
                "japanese" => "りんご",
                "price" => 80,
            ],
            "orange" => [ 
                "japanese" => "オレンジ",
                "price" => 120,
            ],
            "grape" => [
                "japanese" => "ぶどう",
                "price" => 220,
            ],
        ];

        foreach($fruits as $key => $value) {
            echo("英語では" . $key . "と表示され、日本語では" . $value["japanese"] . "、価格は" . $value["price"] . "円です。<br>");
        }

        echo("<p>課題2</p>");

        $testData = [
            "A" => [
                "国語" => 34,
                "数学" => 67,
                "社会" => 45,
                "理科" => 34,
                "英語" => 89,
            ],
            "B" => [
                "国語" => 76,
                "数学" => 72,
                "社会" => 65,
                "理科" => 77,
                "英語" => 80,
            ],
            "C" => [
                "国語" => 98,
                "数学" => 87,
                "社会" => 88,
                "理科" => 92,
                "英語" => 96,
            ],
            "D" => [
                "国語" => 65,
                "数学" => 34,
                "社会" => 71,
                "理科" => 56,
                "英語" => 76,
            ],
            "E" => [
                "国語" => 67,
                "数学" => 55,
                "社会" => 87,
                "理科" => 56,
                "英語" => 69,
            ],
            "F" => [
                "国語" => 81,
                "数学" => 79,
                "社会" => 74,
                "理科" => 82,
                "英語" => 85,
            ],
            "平均" => [
                "国語" => 0,
                "数学" => 0,
                "社会" => 0,
                "理科" => 0,
                "英語" => 0,
            ],

        ];

        foreach($testData as $key => $value) {              //"平均"に各教科の合計値を代入
        $testData["平均"]["国語"] += $value["国語"];
        $testData["平均"]["数学"] += $value["数学"];
        $testData["平均"]["社会"] += $value["社会"];
        $testData["平均"]["理科"] += $value["理科"];
        $testData["平均"]["英語"] += $value["英語"];
        }

        $testData["平均"]["国語"] = round( $testData["平均"]["国語"] / ( count($testData) - 1) , 2);        //"平均"の各教科の算出
        $testData["平均"]["数学"] = round( $testData["平均"]["数学"] / ( count($testData) - 1) , 2);
        $testData["平均"]["社会"] = round( $testData["平均"]["社会"] / ( count($testData) - 1) , 2);
        $testData["平均"]["理科"] = round( $testData["平均"]["理科"] / ( count($testData) - 1) , 2);
        $testData["平均"]["英語"] = round( $testData["平均"]["英語"] / ( count($testData) - 1) , 2);

    ?>

    <table border = "1">
        <tr>
            <td>名前</td>
            <td>国語</td>
            <td>数学</td>
            <td>社会</td>
            <td>理科</td>
            <td>英語</td>
            <td>平均</td>
        </tr>

        <?php foreach($testData as $key => $value) { ?>

        <tr>
            <td><?php echo($key); ?></td>
            <td><?php echo(round($value["国語"] , 1)); ?></td>
            <td><?php echo(round($value["数学"] , 1)); ?></td>
            <td><?php echo(round($value["社会"] , 1)); ?></td>
            <td><?php echo(round($value["理科"] , 1)); ?></td>
            <td><?php echo(round($value["英語"] , 1)); ?></td>
            <td><?php echo(round(array_sum($value) / 5 , 1)); ?></td>
        </tr>

        <?php } ?>

    </table>

</body>
</html>