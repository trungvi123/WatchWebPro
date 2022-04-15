<?php 
    class SanPhamModel extends db_sanPham {
        public function GetDongHoNam(){
            $query = "SELECT * FROM sanpham WHERE type = \"ĐỒNG HỒ NAM\" ";
            return mysqli_query($this->con_sanPham,$query);
        }

        public function GetDongHoNu(){
            $query = "SELECT * FROM sanpham WHERE type = \"ĐỒNG HỒ NỮ\"";
            return mysqli_query($this->con_sanPham,$query);
        }

        public function GetDongHoDoi(){
            $query = "SELECT * FROM sanpham WHERE type = \"ĐỒNG HỒ ĐÔI\"";
            return mysqli_query($this->con_sanPham,$query);
        }

        public function GetPhuKien(){
            $query = "SELECT * FROM sanpham WHERE type = \"PHỤ KIỆN\"";
            return mysqli_query($this->con_sanPham,$query);
        }
    }

?>