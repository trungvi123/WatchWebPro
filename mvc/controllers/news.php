<?php 
    class news extends controller{
        public function defaultAction (){
            $this->showTinTuc();
        }

        public function showTinTuc(){
            $this->view("masterLayout3",[
                "Page" => "news_page",
            ]);
        }

    }
?>