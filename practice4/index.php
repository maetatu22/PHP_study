<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    function hello(){
      echo 'Hello,world!'."<br>";
    }
    hello();
    
    function printRectangleArea($height, $width){
      echo $height * $width."<br>";
    }
    printRectangleArea(5, 10);
  ?>

  <?php
    function getCircleArea($radius){
      return $radius * $radius * 3;
    }
    $circleArea = getCircleArea(5);
    echo $circleArea."<br>";
  ?>

</body>
</html>