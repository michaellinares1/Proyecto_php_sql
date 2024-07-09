<?php
    class conexion extends PDO{
        private $tipo = "mysql";
        private $host = "localhost:3306";
        private $user = "root";
        private $password = "akjjyglc789";
        private $db = "peluqueria";
        public function __construct(){
            $dsn = $this->tipo . ':host='. $this->host . ';dbname=' . $this->db;
            try{
                parent::__construct($dsn, $this->user, $this->password);
                $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }
            catch(PDOEXCEPTION $e){
                die("Conección errada " . $e->getMessage());
            }            
        }
    }
    /*$con = new conexion();*/