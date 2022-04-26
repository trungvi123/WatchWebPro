<?php 
    class admin extends controller{
        function defaultAction(){
            echo "Trang nay danh cho Admin";
        }
        // Trang tuy chon cua admin
        public function quanLy(){
            $this->view("adminLayout",[
                "Page" => "quanLy_page",
            ]);
        }

        // Trang hiện tất cả sp
        public function quanLySanPham(){
            $tmp = $this->model("SanPhamModel");
            $this->view("adminLayout",[
                "Page" => "qlSanPham_page",
                "contentAll" => $tmp -> GetAllSp(),
                "type" => $tmp -> GetAllTypeSp(),
            ]);
        }

        // Xu lis dữ liệu các form truyền vào
        public function handle(){
            $tmp = $this->model("SanPhamModel");
            $this->viewForHandle("SpHandle",[
                "connect" => $tmp -> GetConnect(),
            ]);
        }

        //Thêm sản phẩm
        public function addSp(){
            $tmp = $this->model("SanPhamModel");
            $this->view("adminLayout",[
                "Page" => "addSp_page",
                
            ]);
        }

        

        //Xóa sản phẩm
        public function deleteSp($choose){
            $tmp = $this->model("SanPhamModel");
            $this->view("adminLayout",[
                "Page" => "deleteSp_page",
                "content" => $tmp -> GetSpById($choose),
            ]);
        }

        //Sửa sản phẩm
        public function editSp($choose){
            $tmp = $this->model("SanPhamModel");
            $this->view("adminLayout",[
                "Page" => "editSp_page",
                "content" => $tmp -> GetSpById($choose),
            ]);
        }

        public function quanLyDanhMuc(){
            
        }
        
        public function quanLyUser(){
            
        }

    }



?>
