<?php
  $prices = array(1000, 650, 750, 800);
  echo '$pricesの値: ';
  foreach ($prices as $price) {
    echo $price.' ';
  }
  echo '<br>';
  echo '-----';
  echo '<br>';

  $totalPrice = 0;
  $maxPrice = 0;
  foreach ($prices as $price){
    $totalPrice += $price;

    if($maxPrice < $price){
      $maxPrice = $price;
    }
  }
  echo "合計金額は".$totalPrice."円です"."<br>";
  echo "最高金額は".$maxPrice."円です";
  
?>