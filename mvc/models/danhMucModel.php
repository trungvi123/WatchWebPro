<?php 
    class danhMucModel extends db {
        public function GetDanhMuc(){
            $query = "SELECT * FROM danhMuc";
            return mysqli_query($this->conn,$query);
        }
        
        public function GetConnect(){
            return $this->conn;
        }
        
        public function GetSpById($select){
            $query = "SELECT * FROM danhMuc WHERE id = $select";
            return mysqli_query($this->conn,$query);
        }

    }
?>
