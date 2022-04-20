<?php 
    class db {
        public $con_sanPham;
        protected $serverName = "localhost";
        protected $userName = "root";
        protected $passWord = "";
        protected $dbName = "lv_group";
        function __construct(){
            $this->con_sanPham = mysqli_connect($this->serverName,$this->userName,$this->passWord,$this->dbName);
        }
    }
?> 