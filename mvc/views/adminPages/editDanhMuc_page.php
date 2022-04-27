<div class="row justify-content-end">
    <a class="btn btn-primary m-3" href="http://localhost/WatchWebPro/admin/quanLyDanhMuc">Quản lí sản phẩm</a>
</div>
<?php 
$row = mysqli_fetch_array($data['content']);

echo "
<div class=\"ml-5 mr-5 pl-5 pr-5 justify-content-center\">
    <table class=\"table text-center\">
           <form class=\"form_add mb-3\" action=\"http://localhost/WatchWebPro/admin/danhMucHandle\" method=\"POST\">
            <tr class=\"form__row\">
                <th>Tên Danh Mục</th>
                <td>
                    <input class=\"w-100 p-1 \" type=\"text\" name=\"name\" value = \"{$row['name']}\">
                </td>
            </tr>
            <tr class=\"form_row\">
                <th>Mô Tả </th>
                <td>
                    <input class=\"w-100 p-1 \" placeholder=\"Thêm mô tả\" type=\"text\" name=\"mo_ta\" value =\"{$row['mo_ta']}\">
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

