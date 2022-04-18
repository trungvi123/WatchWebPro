<?php 
     while($row = mysqli_fetch_array($data['content'])){
        echo "
            <div class=\"col-lg-4 col-md-5 col-sm-6 product__box\">
            <img class=\"product__img\" src=\"{$row['img_source']}\" alt=\"\">
            <div class=\"product__info\">
            <p class=\"type\">{$row['type']}</p>
            <a class=\"product__name hiden-text\" href=\"\">{$row['name']}</a>
            <div class=\"price__box\">
            ";
            if($row['old_price']!= NULL){
                echo "<span class=\"old__price\">{$row['old_price']}đ</span>";
            }else {
                echo "<span class=\"old__price\"></span>";
            }
        echo " 
            <span class=\"new__price\">{$row['new_price']} đ</span>
                </div>
                </div>
               <div class=\"add_cart\">
                  <a href=\"\"><i class=\"add_cart__icon fa-solid fa-cart-plus\"></i></a>
                  </div>
                                    </div>
                                        ";
        }
        
?>                    

