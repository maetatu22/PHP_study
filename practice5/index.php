<?php
  class Menu{
    public $name;
  }

  $curry = new Menu();
  $pasta = new Menu();

  $curry->name = "CURRY";
  $pasta->name = "PASTA";

  echo '<br>';
  echo $pasta->name."<br>";
  echo $curry->name;
?>