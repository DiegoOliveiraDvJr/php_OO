<?php 

    interface EquipamentoEletronicoInterface{

        public function ligar();
        public function desligar();
    }

    class Geladeira implements EquipamentoEletronicoInterface{
        public function abrirPorta(){
            echo 'abrir a porta';
        }
        public function ligar(){
            echo 'Geladeira Ligado';
        }
        public function desligar(){
            echo 'Geladeira Desligar';
        }
    }

    class TV implements EquipamentoEletronicoInterface{
        public function  trocarCanal(){
            echo 'trocar canal';
        }
        public function ligar(){
            echo 'TV Ligado';
        }
        public function desligar(){
            echo 'TV Desligar';
        }
    }
    

    $geladeira = new Geladeira();
    $tv = new TV();

    
    interface MamiferoInterface{
        public function respirar();
    }
    interface TerrestreInterface{
        public function andar();
    }
    interface AquaticoInterface{
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface{
        public function andar(){
            echo 'andando';
        }
        public function respirar(){
            echo 'respirar';
        }
        public function conversar(){
            echo 'conversando';
        }
    }
    class Baleia implements MamiferoInterface, AquaticoInterface{
        public function respirar(){
            echo 'respirar';
        }
        public function nadar(){
            echo 'nadar';
        }
        protected function esguichar(){
            echo 'esguichar';
        }
    }