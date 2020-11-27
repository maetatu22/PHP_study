<?php
  class Menu {

    public function hello(){
      echo "私はMenuクラスのインスタンスです";
    }

  }

  $curry = new Menu();
  $pasta = new Menu();
  $curry->name = 'CURRY';
  $pasta->name = 'PASTA';

  echo '<br>';
?>