<?php
  //chắc chắn chỉ có 1 sản phẩm trong content nên không cần dung while
  $row = mysqli_fetch_array($data['content']);
    echo "<div class=\"main__detail row not-ml-mr\">
            <div class=\"img__box col-lg-6\">
              <img class=\"img__detail\"
                src=\"{$row['img_source']}\"
                alt=\"\">
            </div>
            <div class=\"detail__content col-lg-6 pl-3 pr-3\">
              <h3 class=\"title__name\">{$row['name']}</h3>
              <div class=\"small-line\"></div>
              <span class=\"old__price\">{$row['old_price']} </span>
              <span class=\"new_price\">{$row['new_price']}</span>
              <p class=\"text__info pt-3\">{$row['mo_ta']}</p>
              <div class=\"pb-3\">
                <input class=\"quanlity__input mr-3\" min=0 max=999 type=\"number\">
                <input type=\"button\" class=\"btn__AddSp\" value=\"THÊM VÀO GIỎ\">
              </div>
              <p class=\"small text-secondary\">Mã: {$row['id']}</p>
              <a class=\"type_sp small text-secondary\">Danh mục: {$row['type']}</a>
            </div>
          </div>
          <div class=\"row not-ml-mr w-100\">
            <ul class=\"options__info w-100\">
              <li class=\"options__1 options__info-item active\"><span>THÔNG TIN BỔ SUNG</span></li>
              <li class=\"options__2 options__info-item\"><span>ĐÁNH GIÁ</span></li>
              <li class=\"options__3 options__info-item\"><span>CHÍNH SÁCH BẢO HÀNH</span></li>
              <div class=\"tranfarent\"></div>
            </ul>
            <div class=\"tab__container w-100 p-4\"> 
                <div class=\"tab__1\">
                  <table class=\"tab_table\">
                        <tr>
                          <th>Bộ máy & Năng lượng</th>
                          <td>
                            <p class=\"m-auto w-100\"><a href=\"\" class=\"text-dark\" rel=\"tag\">Pin (Quartz)</a></p>
                          </td>
                        </tr>
                        <tr>
                          <th>Chất liệu dây</th>
                          <td>
                            <p class=\"m-auto w-100\"><a href=\"\" class=\"text-dark\" rel=\"tag\">Dây Nhựa / Cao Su</a>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <th>Chất liệu mặt kính</th>
                          <td>
                            <p class=\"m-auto w-100\"><a href=\"\" class=\"text-dark\" rel=\"tag\">Kính Cứng</a></p>
                          </td>
                        </tr>
                        <tr>
                          <th>Giới tính</th>
                          <td>
                            <p class=\"m-auto w-100\"><a href=\"\" class=\"text-dark\" rel=\"tag\">Nữ</a></p>
                          </td>
                        </tr>
                        <tr>
                          <th>Hình dạng mặt số</th>
                          <td>
                            <p class=\"m-auto w-100\"><a href=\"\" class=\"text-dark\" rel=\"tag\">Tròn</a></p>
                          </td>
                        </tr>
                        <tr>
                          <th>Kích thước mặt số</th>
                          <td>
                            <p class=\"m-auto w-100\"><a href=\"\" class=\"text-dark\" rel=\"tag\">&gt; 44 mm</a></p>
                          </td>
                        </tr>
                        <tr>
                          <th>Màu mặt số</th>
                          <td>
                            <p class=\"m-auto w-100\"><a href=\"\" class=\"text-dark\" rel=\"tag\">Xanh</a></p>
                          </td>
                        </tr>
                        <tr>
                          <th>Mức chống nước</th>
                          <td>
                            <p class=\"m-auto w-100\"><a href=\"\" class=\"text-dark\" rel=\"tag\">Lặn Biển (20ATM)</a></p>
                          </td>
                        </tr>
                        <tr>
                          <th>Thương hiệu</th>
                          <td>
                            <p class=\"m-auto w-100\"><a href=\"\" class=\"text-dark\" rel=\"tag\">G-Shock &amp; Baby-G</a>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <th>Xuất xứ</th>
                          <td>
                            <p class=\"m-auto w-100\"><a href=\"\" class=\"text-dark\" rel=\"tag\">Nhật Bản</a></p>
                          </td>
                        </tr>
                  </table>
                </div>

                <div class=\"tab__2\">
                  <div class=\"tab_feedback pb-5\">
                          <h4>Hãy là người đầu tiên nhận xét “ĐỒNG HỒ CASIO GA-100DE-2ADR NỮ PIN DÂY NHỰA”</h4>
                          <p>Đánh giá của bạn</p>
                          <ul class=\"star__list\">
                            <li class=\"star__list-item\">
                              <i class=\"fa-solid star-icon fa-star\"></i>
                            </li>
                            <li class=\"star__list-item\">
                              <i class=\"fa-solid star-icon fa-star\"></i>
                              <i class=\"fa-solid star-icon fa-star\"></i>
                            </li>
                            <li class=\"star__list-item\">
                              <i class=\"fa-solid star-icon fa-star\"></i>
                              <i class=\"fa-solid star-icon fa-star\"></i>
                              <i class=\"fa-solid star-icon fa-star\"></i>
                            </li>
                            <li class=\"star__list-item\">
                              <i class=\"fa-solid star-icon fa-star\"></i>
                              <i class=\"fa-solid star-icon fa-star\"></i>
                              <i class=\"fa-solid star-icon fa-star\"></i>
                              <i class=\"fa-solid star-icon fa-star\"></i>
                            </li>
                            <li class=\"star__list-item active\">
                            <i class=\"fa-solid star-icon fa-star\"></i>
                            <i class=\"fa-solid star-icon fa-star\"></i>
                            <i class=\"fa-solid star-icon fa-star\"></i>
                            <i class=\"fa-solid star-icon fa-star\"></i>
                            <i class=\"fa-solid star-icon fa-star\"></i>
                            </li>
                          </ul>
                          <label class=\"d-block\" for=\"comment\">Nhận xét của bạn*</label>
                          <textarea class=\"w-100 p-2\" name=\"comment\" id=\"comment\" cols=\"70\" rows=\"5\"></textarea>
                          <div class=\"row not-ml-mr\">
                              <div class=\"col pl-0\">
                                <label class=\"d-block\" for=\"name\">Tên*</label>
                                <input class=\"w-100\" id=\"name\" name=\"name\" type=\"text\">
                              </div>
                              <div class=\"col pr-0\">
                                <label class=\"d-block\" for=\"email\">Email*</label>
                                <input class=\"w-100\" id=\"email\" name=\"email\" type=\"text\">
                              </div>
                          </div>
                          <button class=\"btn text-white bg-dark\">GỬI ĐI</button>
                  </div>
                </div>

                <div class=\"tab__3\">
                  <ul>
                        <li><p>Chính sách bảo hành của riêng mỗi hãng:</p> </li>
                        <li><p>CASIO: Bảo hành chính hãng máy 1 năm, pin 1,5 năm</p> </li>
                        <li><p>CITIZEN: Bảo hành chính hãng toàn cầu máy 1 năm, pin 1 năm</p> </li>
                        <li><p>SEIKO: Bảo hành chính hãng toàn cầu máy 1 năm, pin 1 năm</p> </li>
                        <li><p>ORIENT: Bảo hành chính hãng toàn cầu máy 1 năm, pin 1 năm</p> </li>
                        <li><p>OP: Bảo hành chính hãng máy 2 năm, pin 1 năm</p> </li>
                        <li><p>RHYTHM: Bảo hành chính hãng máy 1 năm, pin 1 năm</p> </li>
                        <li><p>OGIVAL: Bảo hành chính hãng máy 2 năm, pin 1 năm</p> </li>
                        <li><p>ELLE: Bảo hành chính hãng máy 2 năm, pin 2 năm</p> </li>
                        <li><p>TISSOT: Bảo hành chính hãng máy 2 năm, pin 1 năm</p> </li>
                  </ul>
                </div>
            </div>
      </div>";
?>








