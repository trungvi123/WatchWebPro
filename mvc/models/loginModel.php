<?php
    class loginModel extends db{
        public function GetThanhVien(){
            $query = "select * from thanhvien";
            return mysqli_query($this->conn, $query);
        }

        public function GetAdmin(){
            $query = "select * from admin";
            return mysqli_query($this->conn, $query);
        }
    }
?>