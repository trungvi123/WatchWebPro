<?php 
    class db {
        public $con;
        protected $serverName = "localhost";
        protected $userName = "root";
        protected $passWord = "";
        protected $dbName = "hihi";

        function __construct(){
            $this->con = mysqli_connect($this->serverName,$this->userName,$this->passWord,$this->dbName);
        }


    }


?> 