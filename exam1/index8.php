<?php
  $menus = array(
    array('name' => 'CURRY', 'price' => 900),
    array('name' => 'PASTA', 'price' => 1200),
    array('name' => 'COFFEE', 'price' => 600)
  );

  $totalPrice = 0;
  $maxPrice = 0;
  $maxMenu = "";
  foreach ($menus as $menu){
   echo $menu['name']."は".$menu['price']."円です"."<br>";
   $totalPrice += $menu['price'];
   if($maxPrice < $menu['price']){
     $maxPrice = $menu['price'];
     $maxMenu = $menu['name'];
   }
  };
  echo "合計金額は".$totalPrice."円です"."<br>";
  echo $maxMenu."が最高価格で".$maxPrice."円です";
?>