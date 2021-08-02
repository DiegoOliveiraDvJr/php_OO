<?php

    class Pai {
        private $nome = 'Diego';
        protected $sobrenome = 'Oliveira';
        public $humor = 'Feliz';
         
        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        public function __get($atributo){
            return $this->$atributo;
        }
        private function executarMania(){
            echo 'assobiar';
        }
        protected function responder(){
            echo 'oi';
        }
        public function executarAcao(){
            $acao = rand(1, 10);

            if($acao >= 1 && $acao <= 8){
                $this->executarmania();
            }else{
                $this->responder();
            }
            
            
        }
    }
    class Filho extends Pai{
         public function __construct(){
                //exibir todos os metodos de um objeto(classe);
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
         }   
    }

    $filho = new Filho();
    
    echo '<pre>';
    print_r($filho);
    echo '</pre>';


    $filho->executarAcao();
    


    
?>