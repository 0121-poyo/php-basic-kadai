<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        class Food
        {
            private $name;
            private $price;

            public function __construct($name, $price)
            {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price()
            {
                echo $this->price . "<br>";
            }
        }

        class Animal
        {
            private $name;
            private $height;
            private $weight;

            public function __construct($name, $height, $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height()
            {
                echo $this->height . "<br";
            }
        }

        // インスタンス作成
        $banana = new Food("potato", 250);
        $giraffe = new Animal("dog", 60, 5000);

        // 出力
        print_r($banana);
        echo "<br>";
        print_r($giraffe);
        echo "<br>";

        // メソッド呼び出し
        $banana->show_price();
        $giraffe->show_height();
        ?>
    </p>
</body>

</html>