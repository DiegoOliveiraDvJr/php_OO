<?php

    class Exemplo {
        public static $atributo1 = 'eu sou um atributo estático';
        public $atributo2 = 'eu sou um atributo normal';

        public static function metodo1(){
            echo 'eu sou um metodo estático';
        }
        public function metodo2(){
            echo 'eu sou um metodo normal';
        }
    }

    $x = new Exemplo();


    /*
  echo Exemplo::$atributo1 ;
  echo '<br />';
  Exemplo::metodo1();*/

 //Exemplo::metodo2();


