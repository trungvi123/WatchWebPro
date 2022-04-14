<?php 
class danhMuc extends controller{
    function dongHoNam (){
        $nam = $this->model("sanPhamModel");
        
        $this->view("masterLayout1",[
            "Page" => "sanPham",
            "content" => $nam -> showDongHoNam()
        ]);
    }
    
    function dongHoNu (){
        
    }
    function dongHoDoi (){
        
    }

}