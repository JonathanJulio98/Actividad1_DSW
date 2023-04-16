<?php

    class Mascota{
        private $nombre;
        private $genero;
        private $peso;
        private $tamano;
        private $color;
        private $raza;
        private $fechanac;
        private $vacuna;
        private $propietario;
        
        public function getNombre() {
            return $this->nombre;
        }

        public function getGenero() {
            return $this->genero;
        }

        public function getPeso() {
            return $this->peso;
        }

        public function getTamano() {
            return $this->tamano;
        }

        public function getColor() {
            return $this->color;
        }

        public function getRaza() {
            return $this->raza;
        }

        public function getFechanac() {
            return $this->fechanac;
        }

        public function getVacuna() {
            return $this->vacuna;
        }

        public function getPropietario() {
            return $this->propietario;
        }

        public function setNombre($nombre): void {
            $this->nombre = $nombre;
        }

        public function setGenero($genero): void {
            $this->genero = $genero;
        }

        public function setPeso($peso): void {
            $this->peso = $peso;
        }

        public function setTamano($tamano): void {
            $this->tamano = $tamano;
        }

        public function setColor($color): void {
            $this->color = $color;
        }

        public function setRaza($raza): void {
            $this->raza = $raza;
        }

        public function setFechanac($fechanac): void {
            $this->fechanac = $fechanac;
        }

        public function setVacuna($vacuna): void {
            $this->vacuna = $vacuna;
        }

        public function setPropietario($propietario): void {
            $this->propietario = $propietario;
        }


        
        
        
        
        
        
    }

?>;
