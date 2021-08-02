<?php

    namespace A;
    class Cliente implements CadastroInterface, \B\CadastroInterface{
        public $nome = 'jorge';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }
        public function __get($attr){
            return $this->$attr;
        }
        public function salvar(){
            echo 'cliente  da namespace A salvo';
        }
        public function remover(){
            echo 'cliente da namespace A salvo';
        }
    }

    interface CadastroInterface{
        public function salvar();
    }

    namespace B;
    class Cliente implements CadastroInterface{
        public $nome = 'Daniel';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }
        public function __get($attr){
            return $this->$attr;
        }
        public function remover(){
            echo 'cliente da namespace B salvo';
        }
    }
    interface CadastroInterface{
        public function remover();
    }

    $c = new \A\Cliente();
    print_r($c);
    echo $c->__get('nome');

