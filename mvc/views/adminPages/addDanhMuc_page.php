<div class="row justify-content-end">
    <a class="btn btn-primary m-3" href="http://localhost/WatchWebPro/admin/quanlyDanhMuc">Quản lí danh mục</a>
</div>

<div class="ml-5 mr-5 pl-5 pr-5 justify-content-center">
    <table class="table text-center">
           <form class="form_add mb-3" action="http://localhost/WatchWebPro/admin/danhMucHandle" method="POST">
            <tr class="form__row">
                <th>Tên Danh Mục</th>
                <td>
                    <input class="w-100 p-1 " placeholder="VD: ĐỒNG HỒ NAM" type="text" name="name">
                </td>
            </tr>
            <tr class="form_row">
                <th>Mô tả</th>
                <td>
                    <input class="w-100 p-1 "  type="text" name="mo_ta">
                </td>
            </tr>

            <tr class="form_row">
                <th>Xử lí</th>
                <td>
                    <input type="submit" class="btn btn-primary w-50" name="handle" value="ADD">
                </td>
            </tr>
        </form>  
    </table>
</div>


