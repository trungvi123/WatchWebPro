<?php
class register extends controller{
    public function defaultAction(){
        $this->showRegister();
        // Khi ng dùng k nhập url
    }

    public function showRegister(){
        $this->view("masterLayout3",[
            "Page" => "register_page"
        ]); 
    }

    public function registerHandle(){
        $tmp = $this->model("registerModel");
        $this->viewForHandle("registerHandle",[
            "connect" => $tmp -> GetConnect(),
            "content" => $tmp -> GetPhoneNumber()
        ]); 
    }




}

