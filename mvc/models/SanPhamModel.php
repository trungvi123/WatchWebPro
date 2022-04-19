<?php 
    class SanPhamModel extends db_sanPham {
        public function GetDongHoNam(){
            $query = "SELECT * FROM sanpham WHERE type = \"ĐỒNG HỒ NAM\" ";
            return mysqli_query($this->con_sanPham,$query);
        }

        public function GetSLDongHoNam(){
            $query = "SELECT count(id) AS SL FROM sanpham WHERE type = \"ĐỒNG HỒ NAM\" ";
            return mysqli_query($this->con_sanPham,$query);
        }

        public function GetDongHoNu(){
            $query = "SELECT * FROM sanpham WHERE type = \"ĐỒNG HỒ NỮ\"";
            return mysqli_query($this->con_sanPham,$query);
        }

        public function GetSLDongHoNu(){
            $query = "SELECT count(id) AS SL FROM sanpham WHERE type = \"ĐỒNG HỒ NỮ\"";
            return mysqli_query($this->con_sanPham,$query);
        }

        public function GetDongHoDoi(){
            $query = "SELECT * FROM sanpham WHERE type = \"ĐỒNG HỒ ĐÔI\"";
            return mysqli_query($this->con_sanPham,$query);
        }

        public function GetSLDongHoDoi(){
            $query = "SELECT count(id) AS SL FROM sanpham WHERE type = \"ĐỒNG HỒ ĐÔI\"";
            return mysqli_query($this->con_sanPham,$query);
        }

        public function GetPhuKien(){
            $query = "SELECT * FROM sanpham WHERE type = \"PHỤ KIỆN\"";
            return mysqli_query($this->con_sanPham,$query);
        }

        public function GetSLPhuKien(){
            $query = "SELECT count(id) AS SL FROM sanpham WHERE type = \"PHỤ KIỆN\"";
            return mysqli_query($this->con_sanPham,$query);
        }


        public function GetSP($id_sp){
            $query = "SELECT * FROM sanpham WHERE id = $id_sp ";
            return mysqli_query($this->con_sanPham,$query);
        }
    }

?>