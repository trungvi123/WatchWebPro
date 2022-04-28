            
             <!-- nav mobile -->
             <label for="nav_mobile-input" class="nav_bars-btn">
                <i class="fa-solid fa-bars"></i>
              </label>

              <input type="checkbox" hidden class="nav_input" id="nav_mobile-input">
              
              <label for="nav_mobile-input" class="nav_overlay"></label>
              
              <nav class="nav_mobile">

                <label for="nav_mobile-input" class="nav_mobile-close">
                    <i class="fa-solid fa-xmark"></i>
                </label>

                <ul class="nav_mobile-list">
                  <li>
                    <a class="nav_mobile-link" href="http://localhost/WatchWebPro/gioiThieu"> GIỚI THIỆU </a>
                    
                    </li>
                    <li>
                      <a class="nav_mobile-link" href="http://localhost/WatchWebPro/danhMuc/dongHoNam"> ĐỒNG HỒ NAM </a>

                    </li>
                    <li>
                      <a class="nav_mobile-link" href="http://localhost/WatchWebPro/danhMuc/dongHoNu"> ĐỒNG HỒ NỮ </a>

                    </li>
                    <li>
                      <a class="nav_mobile-link" href="http://localhost/WatchWebPro/danhMuc/dongHoDoi"> ĐỒNG HỒ ĐÔI </a>

                    </li>
                    <li>
                      <a class="nav_mobile-link" href="http://localhost/WatchWebPro/danhMuc/PhuKien"> PHỤ KIỆN </a>

                    </li>
                    <li>
                      <a class="nav_mobile-link" href="http://localhost/WatchWebPro/news"> TIN TỨC </a>

                    </li>
                    <li>
                      <a class="nav_mobile-link" href="http://localhost/WatchWebPro/lienHe"> LIÊN HỆ </a>

                    </li>
                  </ul>
                    
          </nav>
            <!-- end nav mobile -->

            
            <a href="http://localhost/WatchWebPro/">
              <img class="logo" src="http://localhost/WatchWebPro/public/img/logo/Logo_main.png" alt="logo">
            </a>


            <ul class="nav__list">
                <li class="nav__list-item"><a class="nav__list-link" href="http://localhost/WatchWebPro/gioiThieu"> GIỚI THIỆU </a> </li>
                <li class="nav__list-item"><a class="nav__list-link" href="http://localhost/WatchWebPro/danhMuc/dongHoNam"> ĐỒNG HỒ NAM </a> </li>
                <li class="nav__list-item"><a class="nav__list-link" href="http://localhost/WatchWebPro/danhMuc/dongHoNu"> ĐỒNG HỒ NỮ </a> </li>
                <li class="nav__list-item"><a class="nav__list-link" href="http://localhost/WatchWebPro/danhMuc/dongHoDoi"> ĐỒNG HỒ ĐÔI </a> </li>
                <li class="nav__list-item"><a class="nav__list-link" href="http://localhost/WatchWebPro/danhMuc/PhuKien"> PHỤ KIỆN </a> </li>
                <li class="nav__list-item"><a class="nav__list-link" href="http://localhost/WatchWebPro/news"> TIN TỨC </a> </li>
                <li class="nav__list-item"><a class="nav__list-link" href="http://localhost/WatchWebPro/lienHe"> LIÊN HỆ </a> </li>
            </ul>

            <div class="nav__box-icon">
                
                <div class="dropdown">
                  <i class="nav__icon fa-solid fa-user" data-toggle="dropdown"></i>
                  <?php 
                    if(isset($_SESSION['user'])){
                      echo "<span class=\"userName\">{$_SESSION['user']['username']}</span>";
                    }else if(isset($_SESSION['AdUser'])){
                      echo "<span class=\"userName\">{$_SESSION['AdUser']['username']}</span>";
                    }
                  ?>
                  <ul class="dropdown-menu text-center dropdown_user">
                    <?php 
                      if(isset($_SESSION['AdUser']) && isset($_SESSION['AdUser']['admin_ChucVu'])){
                        echo "
                        <li class=\"m-1 btn btn-primary w-75\"><a href=\"http://localhost/WatchWebPro/register\" class=\"text-white\">Đăng ký</a></li>
                        <li class=\"m-1 btn btn-success w-75\"><a href=\"http://localhost/WatchWebPro/login\" class=\"text-white\">Đăng nhập</a></li>
                        <li class=\"m-1 btn btn-dark w-75\"><a href=\"http://localhost/WatchWebPro/admin/quanLy\" class=\"text-white\">Quản Lý</a></li>
                        <li class=\"m-1 btn btn-dark w-75\"><a href=\"http://localhost/WatchWebPro/logout\" class=\"text-white\">Đăng xuất</a></li>
                        ";
                      }elseif(isset($_SESSION['user'])){
                        echo "
                        <li class=\"m-1 btn btn-primary w-75\"><a href=\"http://localhost/WatchWebPro/register\" class=\"text-white\">Đăng ký</a></li>
                        <li class=\"m-1 btn btn-success w-75\"><a href=\"http://localhost/WatchWebPro/login\" class=\"text-white\">Đăng nhập</a></li>
                        <li class=\"m-1 btn btn-dark w-75\"><a href=\"http://localhost/WatchWebPro/logout\" class=\"text-white\">Đăng xuất</a></li>
                        ";
                      }else {
                        echo "
                        <li class=\"m-1 btn btn-primary w-75\"><a href=\"http://localhost/WatchWebPro/register\" class=\"text-white\">Đăng ký</a></li>
                        <li class=\"m-1 btn btn-success w-75\"><a href=\"http://localhost/WatchWebPro/login\" class=\"text-white\">Đăng nhập</a></li>
                        ";
                      }
                    ?>
                  </ul>
                </div>

                  <i class="custom__dropdown nav__icon fa-solid fa-magnifying-glass">
                    <div class="custom__dropdown-menu custom__search">
                      <div class="custom__dropdown-items">
                        <input class="custom__dropdown-item search__input" type="text">
                          <i class="fa-solid fa-magnifying-glass search__icon"></i>
                      </div>
                    </div>
                </i>
                
          
                <i class=" custom__dropdown nav__icon fa-solid fa-bag-shopping">
                  <div class="custom__dropdown-menu custom__cart">
                      <span id="custom__dropdown-text" >Chưa có sản phẩm nào trong giỏ hàng</span>
                  </div>
                </i>
            </div>
