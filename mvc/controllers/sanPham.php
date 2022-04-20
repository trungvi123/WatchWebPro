<?php
class sanPham extends controller{
    public function defauAction(){
    }

    public function showSanPhamById ($select){
        // biến select là id 
        $tmp = $this->model("sanPhamModel");
        $this->view("masterLayout2",[
            "content" => $tmp -> GetSpById($select),
            "Page" => "product_detail",
        ]); 
    }
    public function showSanPhamByName($select){
        // biến select là c name sp
        $tmp = $this->model("sanPhamModel");
        $this->view("masterLayout2",[
            "content" => $tmp -> GetSpByName($select),
            "Page" => "product_detail",
        ]); 
    }
}