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
        
        // Trang hiện tất cả danh muc
        public function quanLyDanhMuc(){
            $tmp = $this->model("danhMucModel");
            $this->view("adminLayout",[
                "Page" => "qlDanhMuc_page",
                "content" => $tmp -> GetDanhMuc(),
            ]);
        }

        // Xu lis dữ liệu các form truyền vào
        public function SpHandle(){
            $tmp = $this->model("SanPhamModel");
            $this->viewForHandle("SpHandle",[
                "connect" => $tmp -> GetConnect(),
            ]);
        }

        // Xu lis dữ liệu các form truyền vào
        public function danhMucHandle(){
            $tmp = $this->model("danhMucModel");
            $this->viewForHandle("danhMucHandle",[
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

        //Thêm danhmuc
        public function addDanhMuc(){
            $tmp = $this->model("danhMucModel");
            $this->view("adminLayout",[
                "Page" => "addDanhMuc_page", 
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

        //Xóa danhmuc
        public function deleteDanhMuc($choose){
            $tmp = $this->model("danhMucModel");
            $this->view("adminLayout",[
                "Page" => "deleteDanhMuc_page",
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

        //Sửa danh mục
        public function editDanhMuc($choose){
            $tmp = $this->model("danhMucModel");
            $this->view("adminLayout",[
                "Page" => "editDanhMuc_page",
                "content" => $tmp -> GetSpById($choose),
            ]);
        }

        
        public function quanLyUser(){
            
        }

    }



?>
