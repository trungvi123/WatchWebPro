<?php
// test cac trang moi tao bang duong dan test/
class testpage extends controller{
    public function defauAction(){
        $this->view("testLayout",[
            "Page" => "moreInfo",
        ]);
    }
}