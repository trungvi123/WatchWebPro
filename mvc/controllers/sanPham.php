<?php
class sanPham extends controller{
    public function defauAction(){
    }

    public function showSanPham ($id){
        $tmp = $this->model("sanPhamModel");
        $this->view("masterLayout2",[
            "content" => $tmp -> GetSP($id),
            "Page" => "product_detail",
        ]); 
    }
}