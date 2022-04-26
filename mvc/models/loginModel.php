<?php
    class loginModel extends db{
        public function GetThanhVien(){
            $query = "select phonenumber,passwd from thanhvien ";
            return mysqli_query($this->conn, $query);
        }



    }
?>