<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
    $colors = array('赤', '青', '黄');
    echo $colors[0];
    $colors[] = "白";
    echo $colors[3];
  ?>

  <?php
    $scores = array(
                '数学' => 70,
                '英語' => 90,
                '国語' => 80
              );
    $scores["国語"] += 5;
    echo $scores['国語'];
  ?>

</body>
</html>