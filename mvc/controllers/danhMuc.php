<?php 
class danhMuc extends controller{
    public $select;
    function showSanPham(){}
    
    function dongHoNam (){
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetDongHoNam()
        ]);
    }
    
    function dongHoNu (){
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetDongHoNu()
        ]);
    }
    function dongHoDoi (){
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetDongHoDoi()
        ]);
    }

}