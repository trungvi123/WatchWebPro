<?php
class login extends controller{
    public function defaultAction(){
        $this->showLogin();
        // Khi ng dùng k nhập url
    }
    public function showLogin(){
        $this->view("masterLayout3",[
            "Page" => "login_page",
    ]); 
    }

    public function loginHandle(){
        $tmp = $this->model('loginModel');
        $this->viewForHandle("loginHandle",[ 
            // layout này trực tiếp xử lí dữ liệu và đưa vào session, nếu thông qua trang con
            //  sẽ bị lỗi vì có nhiều lệnh đứng trước session
            "contentTV" => $tmp -> GetThanhVien(),
            "contentAD" => $tmp -> GetAdmin(),
        ]);
    }

}

