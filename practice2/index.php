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
</body>
</html>