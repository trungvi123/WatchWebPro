<?php 
    class registerModel extends db{
        public function GetPhoneNumber(){
            $query = "select phonenumber from thanhvien";
            return mysqli_query($this->conn, $query);
        }

        public function GetConnect(){
            return $this->conn;
        }
    }




?>