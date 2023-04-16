<?php
    
    class Usuario{
        private $cc;
        private $pass;
        private $nombre;
        private $apellido;
        private $genero;
        private $gmail;
        
        

        public function getCc() {
            return $this->cc;
        }

        public function getPass() {
            return $this->pass;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getApellido() {
            return $this->apellido;
        }

        public function getGenero() {
            return $this->genero;
        }

        public function getGmail() {
            return $this->gmail;
        }

        public function setCc($cc): void {
            $this->cc = $cc;
        }

        public function setPass($pass): void {
            $this->pass = $pass;
        }

        public function setNombre($nombre): void {
            $this->nombre = $nombre;
        }

        public function setApellido($apellido): void {
            $this->apellido = $apellido;
        }

        public function setGenero($genero): void {
            $this->genero = $genero;
        }

        public function setGmail($gmail): void {
            $this->gmail = $gmail;
        }


    }

?>;

