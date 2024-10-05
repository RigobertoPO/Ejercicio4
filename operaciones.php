<?php
    class Matematicas{
        //propiedades
        private $numero1;
        private $numero2;
        //Metodos
        public function __construct($num1, $num2){
            $this->numero1=$num1;
            $this->numero2=$num2;
        }
        public function Suma(){
            return $this->numero1 + $this->numero2;
        }
        public function Resta(){
            return $this->numero1 - $this->numero2;
        }
        public function Multiplica(){
            return $this->numero1 * $this->numero2;
        }
        public function Division(){
            return $this->numero1 / $this->numero2;
        }
    }
?>