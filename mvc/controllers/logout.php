<?php
class logout extends controller{
    public function defaultAction(){
        // Khi ng dùng k nhập url
        $this->logoutHandle();
    }

    public function logoutHandle(){
        $this->viewForHandle("logoutHandle",[]);
    }   

}

