<?php
class home extends controller{
    function showSanPham(){
        $tmp = $this->model("sanPhamModel");
        $this->view("masterLayout",[
            "contentNam" => $tmp -> GetDongHoNam(),
            "contentNu" => $tmp -> GetDongHoNu(),
            "contentDoi" => $tmp -> GetDongHoDoi(),
            "contentPhuKien" => $tmp -> GetPhuKien(),
            "Page" => "home_page"
        ]);
    }
}


