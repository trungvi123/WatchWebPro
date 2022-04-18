<?php 
class danhMuc extends controller{
    public $select;
    public function defauAction(){
        echo "Nothing!!";
        // Khi ng dùng k nhập url
    }
    
    public function dongHoNam (){
        $this->select = $this->model("sanPhamModel");
        $this->select2 = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetDongHoNam(),
            "SLSanPham" => $this->select -> GetSLDongHoNam()
        ]);
    }
    
    function dongHoNu (){
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetDongHoNu(),
            "SLSanPham" => $this->select -> GetSLDongHoNu()
        ]);
    }
    function dongHoDoi (){
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetDongHoDoi(),
            "SLSanPham" => $this->select -> GetSLDongHoDoi()
        ]);
    }

    function phuKien (){
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetPhuKien(),
            "SLSanPham" => $this->select -> GetSLPhuKien()
        ]);
    }

}