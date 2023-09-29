<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
    // 'Hello, world!'をechoする
    echo 'Hello World!';
  ?>

  <br>

  <?php
    // 7 * 2をechoする
    echo 7 * 2;
  ?>

  <br>

  <?php
    // 8 % 3をechoする
    echo 8 % 3;
  ?>

  <!-- この下で5 + 7を出力 -->
  <?php
    echo 5 + 7;
  ?>

  <br>

  <!-- この下で'5 + 7'を出力 -->
  <?php
    echo "5 + 7";
  ?>

  <!-- この下に変数$fruitを書く -->
  <?php
    $fruit = "りんご";
    echo $fruit;

  ?>

  <br>

  <!-- この下に変数$sumを書く -->
  <?php
    $sum = 8 + 9;
    echo $sum;

  ?>

  <?php

    $x = 5;
    $y = 2;
    $a = 8;
    $b = 4;

  ?>

  <!-- この下で$xの計算をする -->
  <?php
    $x += 10;
    echo $x;

  ?>

  <br>

  <!-- この下で$yの計算をする -->
  <?php
    $y *= 5;
    echo $y;

  ?>

  <br>

  <!-- この下で$aの計算をする -->
  <?php
    $a += 1;
    echo $a;

  ?>

  <br>

  <!-- この下で$bの計算をする -->
  <?php
    $b -= 1;
    echo $b;

  ?>

  <?php
    $name = 'いぬ';
    // 'こんにちは！'という文字列と$nameを連結してechoする
    $name = 'こんにちは！'.$name;
    echo $name;

  ?>

  <?php

    $x = 99 * 99;
    $y = 77 * 77;

    // ここにif文を書く

    if($x > 9800) {
      echo "変数xは9800より大きいです。";
    }
    if($y > 6000) {
      echo "変数yは6000より大きいです。";
    }

  ?>

  <?php
    // $ageという変数に自分の年齢を代入する
    $age = 30;

    if($age >= 30) {
      echo "あなたは30歳以上です。";
    } else {
      echo "あなたは30歳未満です。";
    }


  ?>

  <?php

    $x = 1071;

    // 以下にif-elseif-else文を書く
    if($x %3 == 0 && $x %7 == 0) {
      echo "xは3の倍数かつ7の倍数です。";
    } elseif ($x %3 == 0) {
      echo "xは3の倍数ですが7の倍数ではありません。";
    } elseif ($x %7 == 0) {
      echo "xは7の倍数ですが3の倍数ではありません。";
    } else {
      echo "xは7の倍数でも3の倍数でもありません。";
    }

  ?>

  <?php

    // 変数$numを定義し、好きな数字を代入する
    $num = 23;

    // 変数$remainderを定義し、変数$numを3で割った時の余りを代入する
    $remainder = $num %3;

    // switch文を用いてください
    switch ($remainder) {
      case 0:
        echo "大吉です。";
        break;
       case 1:
         echo "中吉です。";
         break;
        case 2:
          echo "小吉です。";
          break;
         default:
           echo "凶です。";
           break;
    }

  ?>

  <?php

    // この下に配列を作る
    $colors = array('赤', '青', '黄');
    echo $colors[0];

    $colors[] = '白';

    echo $colors[3];

  ?>

  <?php

    // この下に連想配列を作る
    $scores = array(
      '数学' => 70,
      '英語' => 90,
      '国語' => 80
      );


$scores['国語'] += 5;

echo $scores['国語'];
  ?>

  <?php

    // この下にfor文を書く
    for($i = 51; $i <= 100; $i++) {
      echo $i.'<br>';
    }

  ?>

  <?php

    // 変数$iを定義する
    $i = 2;

    // while文を書く
    while($i <= 100) {
      echo $i.'<br>';
      $i+= 2;
    }

  ?>

  <?php

    // この下にfor文を書く
    for($i = 1; $i <= 1000; $i++) {
      if($i >= 501) {
        break;
      }
      echo $i.'<br>';
    }

  ?>

  <?php

    // この下にfor文を書く
    for($i = 1; $i <= 1000; $i++) {
      if($i % 3 == 0) {
        continue;
      }
      echo $i.'<br>';
    }

  ?>

  <?php

    $scores = array('数学' => 70, '英語' => 90, '国語' => 80);

    // この下にforeach文を書く
    foreach($scores as $key => $value) {
      echo $key.'は' .$value.'点です。';
    }

  ?>


</body>
</html>