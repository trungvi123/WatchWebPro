<div class="row justify-content-end">
    <a class="btn btn-primary m-3" href="http://localhost/WatchWebPro/admin/addDanhMuc">Thêm Danh Mục +</a>
</div>

<table class="table text-center table-hover mt-5">
    <thead>
      <tr>
        <th>Tên Danh Mục</th>
        <th>Xử Lý</th>
      </tr>
    </thead>
    <tbody>
        <?php
            while($row = mysqli_fetch_array($data['content'])){
                echo "
                <tr>
                    <td>{$row['name']}</td>
                    <td class=\"d-flex justify-content-center\">
                        <form class=\"\" action=\"http://localhost/WatchWebPro/admin/editDanhMuc/{$row['id']}\" method=\"POST\">
                            <input class=\"d-none\" type=\"number\" value=\"{$row['id']}\" name=\"idSelect\">
                            <button class=\"btn btn-warning p-2 m-2 text-white\" type=\"submit\" >Sửa</button>
                        </form>

                        <form action=\"http://localhost/WatchWebPro/admin/deleteDanhMuc/{$row['id']}\" method=\"POST\">
                            <input class=\"d-none\" type=\"number\" value=\"{$row['id']}\" name=\"idSelect\">
                            <button class=\"btn btn-danger p-2 m-2 text-white\" type=\"submit\" >Xóa</button>
                            
                        </form>
                    </td>
                </tr>";
            }
           
        ?> 
<!-- Lý do sài 2 form thay cho 2 thẻ a là vì thẻ a chỉ sd Get và không thể sd Post -->
<!-- Trường hợp này nếu sài thẻ a thì href sẽ khiến cho url xấu đi-->
<!-- Làm tất cả chỉ vì muốn url đẹp :> -->

    </tbody>
  </table>
