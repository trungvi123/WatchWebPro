<div class="row not-ml-mr">
    <div class="col-lg-8">
        
        <table class="table text-center">
            <thead>
            <tr>
                <th colspan="3">Sản Phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Tổng cộng</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $allMoney = 0;
                $count=0;
                if(isset($_SESSION['cart'])){
                    foreach ($_SESSION['cart'] as $value) {
                        if($value){
                            $tong = $_SESSION['cart'][$value['id']]['new_price']*$_SESSION['cart'][$value['id']]['quantity'];
                            $allMoney += $tong;
                            echo "
                            <tr>
                                <td class=\"d-none idItem\">{$_SESSION['cart'][$value['id']]['id']}</td>
                                <td><a href=\"http://localhost/WatchWebPro/cart/delete/{$_SESSION['cart'][$value['id']]['id']}\"><i class=\"fa-solid fa-circle-xmark text-dark mt-4\"></i></a></td>
                                <td><img src=\"{$_SESSION['cart'][$value['id']]['img_source']}\" style=\"width:70px ;height:70px\" alt=\"\"></td>
                                <td width=\"270px\">{$_SESSION['cart'][$value['id']]['name']}</td>
                                <td>{$_SESSION['cart'][$value['id']]['new_price']}</td>
                                <td>
                                    <input type=\"number\" class=\"quantity__input\" min=0 max=99 value=\"{$_SESSION['cart'][$value['id']]['quantity']}\" />
                                </td>
                                <td>{$tong} đ</td>
                            </tr>";
                        }
                    }
                }
                ?>
            </tbody>
        </table>
        <a class="back__input" href="http://localhost/WatchWebPro/"><i class="fa-solid fa-left-long"></i> TIẾP TỤC XEM SẢN PHẨM</a>
        <a href="http://localhost/WatchWebPro/cart/cart" class="update__input">CẬP NHẬT GIỎ HÀNG</a>
        
    </div>
    <div class="col-lg-4">
        <div class="oder__block">
            <table class="table">
                <thead>
                <tr>
                    <th>TỔNG SỐ LƯỢNG</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tổng cộng</td>
                    <td><?php echo $allMoney;?></td>
                </tr>
                <tr>
                    <td>Giao hàng</td>
                    <td>Giao hàng miễn phí</td>
                </tr>
                <tr>
                    <td>Tổng cộng</td>
                    <td><?php echo $allMoney;?></td>
                </tr>
                </tbody>
            </table>

            <button class="btn btn-warning w-100 text-white mt-3 mb-3" >TIẾN HÀNH ĐẶT HÀNG</button>

            <form class="checkout_coupon mb-0" method="post">
                <div class="coupon">
                    <h6 class="widget-title"><i class="fa-solid fa-tag"></i> Mã ưu đãi</h6>
                    <input type="text" name="coupon_code mb-3 mt-3" class="w-100 input__coupon" id="coupon_code" value="" placeholder="Mã ưu đãi" /> 
                    <input type="submit" class="w-100 mb-3 mt-3 apply__coupon" name="apply_coupon" value="Áp dụng mã ưu đãi"/>
                </div>
            </form>
        </div>
    </div>





</div>