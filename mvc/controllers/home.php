<?php
class home extends controller{
    function show(){
        $teo = $this->model("homeModel");
        $this->view("masterLayout",[
            "content" => $teo -> showSP(),
            "Page" => "home"
        ]);
    }






}


