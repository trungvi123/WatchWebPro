

<main>
<!-- Trang này là nội dung main của trang index -->
    <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
          
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/slide1.jpg" alt="blancpain">
              </div>
              <div class="carousel-item">
                <img src="http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/slide2.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img src="http://mauweb.monamedia.net/dongho/wp-content/uploads/2018/03/slide3.jpg" alt="New York">
              </div>
            </div>
          
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          
    </div>

    <h2 class="h2_title">ĐỒNG HỒ NAM</h2>
      <section class="row">
        <?php 
          while($row = mysqli_fetch_array($data['contentNam'])){
          echo "
          <div class=\"col-lg-3 col-md-4 col-sm-6 product__box\">
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
      </section>

      <section class="row not-mr-lr service">
        <div class="col-lg-4 service__item">
          <i class="service__icon fa-solid fa-truck"></i>
          <div class="service__content">
            <h3>Miễn Phí Giao Hàng</h3>
            <p>Giao hàng trên toàn đất nước</p>
          </div>
        </div>
        <div class="col-lg-4 service__item">
          <i class="service__icon fa-solid fa-gift"></i>
          <div class="service__content">
            <h3>Quà Tặng Đặt Biệt</h3>
            <p>Giao hàng trên toàn đất nước</p>
          </div>
        </div>
        <div class="col-lg-4 service__item">
          <i class="service__icon fa-solid fa-piggy-bank"></i>
          <div class="service__content">
            <h3>Tiết Kiệm Khi Mua Ở LV-Group</h3>
            <p>Giao hàng trên toàn đất nước</p>
          </div>
        </div>
      </section>
      
    <h2 class="h2_title">ĐỒNG HỒ NỮ</h2>
      <section class="row">
        <?php 
          while($row = mysqli_fetch_array($data['contentNu'])){
          echo "
          <div class=\"col-lg-3 col-md-4 col-sm-6 product__box\">
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
      </section>

      <section class="banner mt-5">
        <div class="row not-mr-lr">
          <div class="col-lg-6 col-md-6 banner__item overflow-hidden position-relative p-0">
            <img class="banner__img" src="./public/img/banner/img1.jpg" alt="">
            <div class="banner__text">
              <h3>Romance in the air</h3>
              <h4>WEAR YOUR STYLE WITH VERVE & ATTITUDE</h4>
              <a href="">DETAILS</a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6  banner__item overflow-hidden position-relative p-0">
            <img class="banner__img" src="./public/img/banner/img2.jpg" alt="">
            <div class="banner__text">
              <h3>Analog & Digital</h3>
              <h4>SMART WATCHES LATEST FASHION STATEMENT</h4>
              <a href="">DETAILS</a>
            </div>
          </div>
        </div>

      </section>

      <h2 class="h2_title">ĐỒNG HỒ ĐÔI</h2>
      <section class="row">
        <?php 
          while($row = mysqli_fetch_array($data['contentDoi'])){
          echo "
          <div class=\"col-lg-3 col-md-4 col-sm-6 product__box\">
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
      </section>

      <h2 class="h2_title">PHỤ KIỆN</h2>
      <section class="row">
        <?php 
          while($row = mysqli_fetch_array($data['contentPhuKien'])){
          echo "
          <div class=\"col-lg-3 col-md-4 col-sm-6 product__box\">
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
      </section>

      <h2 class="h2_title">THÔNG TIN HỮU ÍCH</h2>
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 product__box">
          <img class="product__img" src="./public/img/product/dongho_louis_erard.jpg" alt="">
          <div class="product__info">
            <p class="type">Đồng hồ nam</p>
            <a class="product__name hiden-text" href="">ĐỒNG HỒ LOUIS ERARD 13900AA05.BDC102 NAM PIN DÂY DA</a>
            <div class="price__box">
              <span class="old__price">20,000,000 đ</span>
              <span class="new__price">18,195,000 đ</span>
            </div>
          </div>
          <div class="add_cart">
            <a href=""><i class="add_cart__icon fa-solid fa-cart-plus"></i></a>
            
          </div>
        </div>
      </div>

</main>