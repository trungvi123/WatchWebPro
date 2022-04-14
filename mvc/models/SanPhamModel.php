<?php 
    class SanPhamModel extends db_sanPham {
        public function showSanPham(){
            $query = "SELECT * FROM sanpham";
            return mysqli_query($this->con_sanPham,$query);
        }
    }

?>