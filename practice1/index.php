<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <?php echo 5+7; ?><br>

  <?php echo '5+7'; ?><br>

  <?php 
    $fruit = "りんご";
    echo $fruit;
  ?><br>

  <?php
    $sum = 8+9;
    echo $sum;
  ?><br>

  <?php
    $x = 5;
    $y = 2;
    $a = 8;
    $b = 4;
  ?><br>

  <?php
    $x += 10;
    echo $x;
  ?><br>

  <?php
    $y *= 5;
    echo $y;
  ?><br>

  <?php
    $a++;
    echo $a;
  ?><br>

  <?php
    $b--;
    echo $b;
  ?><br>

  <?php
    $name = "にんじゃわんこ";
    $name = "こんにちは！".$name;
    echo $name;
  ?><br>

</body>
</html>