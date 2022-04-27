<div class="row justify-content-end">
    <a class="btn btn-primary m-3" href="http://localhost/WatchWebPro/admin/quanLyDanhMuc">Quản lí danh mục</a>
</div>
<table class="table text-center .table-hover mt-5">
    <thead>
      <tr>
        <th>Tên Danh Mục</th>
        <th>Mô Tả</th>
        <th>Xử Lý</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $row = mysqli_fetch_array($data['content']);
                echo "
                <tr>
                    <td>{$row['name']}</td>
                    <td>{$row['mo_ta']}</td>
                    <td class=\"d-flex\">
                            <div class=\"w-100 d-flex justify-content-center  \">
                                <button class=\"btn btn-danger p-2  m-2\" data-toggle=\"modal\" data-target=\"#myModal\">DELETE</button>
                            </div>
                            <!-- The Modal -->
                            <div class=\"modal\" id=\"myModal\">
                              <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                
                                  <!-- Modal Header -->
                                  <div class=\"modal-header\">
                                    <div class=\"d-flex align-items-center\">
                                      <img width=\"80px\" src=\"https://www.pngkit.com/png/full/153-1531841_-nh-anime-girl-halloween.png\" alt=\"\">
                                      <h4 class=\"modal-title ml-3\">Siri cảnh báo!!!</h4>
                                    </div>
                                    
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                  </div>
                                  
                                  <!-- Modal body -->
                                  <div class=\"modal-body\">
                                        Sau khi xóa sản phẩm sẽ bị mất vĩnh viễn!
                                        Vẫn xóa?
                                  </div>
                                  
                                  <!-- Modal footer -->
                                  <div class=\"modal-footer\">
                                  <form action=\"http://localhost/WatchWebPro/admin/danhMucHandle\" method=\"POST\">
                                        <input class=\"d-none \" value=\"{$row['id']}\" type=\"text\" name=\"idDelete\">
                                        <input type=\"submit\" class=\"btn btn-danger p-2 m-2 text-white\" name=\"handle\" data-toggle=\"modal\" data-target=\"#myModal\" value=\"DELETE\">
                                        <button type=\"button\" class=\"btn p-2 m-2 btn-primary\" data-dismiss=\"modal\">Đóng</button>
                                    </form>  
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                    </td>
                </tr>";
            
        ?>
    </tbody>
  </table>
  