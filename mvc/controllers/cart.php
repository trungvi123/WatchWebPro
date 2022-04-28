<?php
    class cart extends controller{
        function defaultAction(){
        }
        function store($id){
            $tmp=$this->model('sanPhamModel');
            $product = mysqli_fetch_assoc($tmp->GetSpById($id));
            
            //   unset($_SESSION['cart']);
            if(empty($_SESSION['cart']) || !array_key_exists($id,$_SESSION['cart']) ){
            // neu gio hang rong hoac sp do ch co trang gio hang thi them moi
                $product['quantity'] = 1;
                $_SESSION['cart'][$id] = $product;
            }else {
                // neu sp da co trang gio hang thi cong don so luong
                // cap nhat so luong cho key quantity cua product
                $product['quantity'] = $_SESSION['cart'][$id]['quantity'] + 1;
                // gan product lai cho sesion
                $_SESSION['cart'][$id] = $product;
            }   
            
            // echo "<pre>";
            // echo "</pre>";

            $this->view("masterLayout3",[
                "Page" => "cart_page",
                "content" =>  $_SESSION['cart'],
            ]); 

        }   

    }



?>