<div class="row justify-content-end">
    <a class="btn btn-primary m-3" href="http://localhost/WatchWebPro/admin/quanLySanPham">Quản lí sản phẩm</a>
</div>
<?php 
$row = mysqli_fetch_array($data['content']);

echo "
<div class=\"ml-5 mr-5 pl-5 pr-5 justify-content-center\">
    <table class=\"table text-center\">
           <form class=\"form_add mb-3\" action=\"http://localhost/WatchWebPro/admin/handle\" method=\"POST\">
            <tr class=\"form__row\">
                <th>Tên Sản Phẩm</th>
                <td>
                    <input class=\"w-100 p-1 \" type=\"text\" name=\"name\" value = \"{$row['name']}\">
                </td>
            </tr>
            <tr class=\"form_row\">
                <th>Hình Ảnh </th>
                <td>
                    <input class=\"w-100 p-1 \" placeholder=\"Thêm link ảnh\" type=\"text\" name=\"img_source\" value =\"{$row['img_source']}\">
                </td>
            </tr>
            <tr class=\"form_row\">
                <th>Loại</th>
                <td>
                    <input class=\"w-100 p-1 \" placeholder=\"VD: ĐỒNG HỒ NAM\" type=\"text\" name=\"type\" value =\"{$row['type']}\">
                </td>
            </tr>
            <tr class=\"form_row\">
                <th>Giá cũ</th>
                <td>
                    <input class=\"w-100 p-1 \" type=\"text\" name=\"old_price\" value =\"{$row['old_price']}\">
                </td>
            </tr>
            <tr class=\"form_row\">
                <th>Giá mới</th>
                <td>
                    <input class=\"w-100 p-1 \" type=\"text\" name=\"new_price\" value =\"{$row['new_price']}\">
                </td>
            </tr>
            <tr class=\"form_row\">
                <th>Thương hiệu</th>
                <td>
                    <input class=\"w-100 p-1 \" type=\"text\" name=\"brand\" value =\"{$row['brand']}\">
                </td>
            </tr>
            <tr class=\"form_row\">
                <th>Loại dây</th>
                <td>
                    <input class=\"w-100 p-1 \" type=\"text\" name=\"watch_chain\" value =\"{$row['watch_chain']}\">
                </td>
            </tr>
            <tr class=\"form_row\">
                <th>Loại kính</th>
                <td>
                    <input class=\"w-100 p-1 \" type=\"text\" name=\"glass_type\" value =\"{$row['glass_type']}\">
                </td>
            </tr>
            <tr class=\"form_row\">
                <th>Màu sắc</th>
                <td>
                    <input class=\"w-100 p-1 \" type=\"text\" name=\"color\" value =\"{$row['color']}\">
                </td>
            </tr>
            <tr class=\"form_row\">
                <th>Hình dạng mặt kính</th>
                <td>
                    <input class=\"w-100 p-1 \" type=\"text\" name=\"shape\" value =\"{$row['shape']}\">
                </td>
            </tr>
            <tr class=\"form_row\">
                <th>Mô tả</th>
                <td>
                    <input class=\"w-100 p-1 \" type=\"text\" name=\"mo_ta\" value =\"{$row['mo_ta']}\">
                </td>
            </tr>
            <tr class=\"form_row\">
                <th>Xử lí</th>
                <td>
                    <input class=\"d-none \" value=\"{$row['id']}\" type=\"text\" name=\"idEdit\">
                    <input type=\"submit\" class=\"btn btn-primary w-50\" name=\"handle\" value=\"EDIT\">
                </td>
            </tr>
        </form>  
        <div id=\"empty\"></div>
    </table>
</div>
";
?>

