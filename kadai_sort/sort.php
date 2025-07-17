<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 関数
        function sort_2way(&$array, $order)
        {
            if ($order) {
                // 昇順ソート
                sort($array);
            } else {
                // 降順ソート
                rsort($array);
            }
        }

        // ソートする配列
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソート
        sort_2way($nums, true);
        echo "昇順にソートします。<br> ";
        foreach ($nums as $num) {
            echo $num . "<br>";
        };

        // 降順ソート
        sort_2way($nums, false);
        echo "降順にソートします。 <br>";
        foreach ($nums as $num) {
            echo $num . "<br>";
        }
        ?>
    </p>
</body>

</html>