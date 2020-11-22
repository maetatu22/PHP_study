<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <?php
    $x = 99 * 99;
    $y = 77 * 77;

    if($x > 9800){
      echo '変数xは9800より大きいです。';
    }
    if($y > 6800){
      echo '変数yは6000より大きいです。';
    }
  ?>

  <?php
    $age = 24;
    if($age >= 30){
      echo 'あなたは30歳以上です。';
    }elseif($age <= 30){
      echo 'あなたは30歳未満です。';
    }
  ?>

  <?php
    $x = 1071;
    if($x % 3 == 0 && $x % 7 == 0){
      echo 'xは3の倍数かつ7の倍数です。';
    }elseif($x % 3 == 0){
      echo 'xは3の倍数ですが7の倍数ではありません。';
    }elseif($x % 7 == 0){
      echo 'xは7の倍数ですが3の倍数ではありません。';
    }else{
      echo 'xは7の倍数でも3の倍数でもありません。';
    }
  ?>

  <?php
    $sum = 222;
    $remainder = $sum % 3;
    switch($remainder){
      case 0:
        echo '大吉です。';
      break;
      case 1:
        echo '中吉です';
      break;
      case 2:
        echo '小吉です';
      break;
      default:
        echo '凶です';
      break;
    } 
  ?>
</body>
</html>