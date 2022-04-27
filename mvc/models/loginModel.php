<?php
    class loginModel extends db{
        public function GetThanhVien(){
            $query = "select * from thanhvien ";
            return mysqli_query($this->conn, $query);
        }



    }
?>