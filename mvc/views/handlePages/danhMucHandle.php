<?php
    $conn = $data2['connect'];

    if(isset($_POST['handle']) && $_POST['handle']=="ADD"){
        $name = $_POST['name'];
        $mo_ta = $_POST['mo_ta'];

       $query = "INSERT INTO danhmuc (name,mo_ta) VALUE('".$name."','".$mo_ta."') ";
       mysqli_query($conn,$query);
       header('Location: http://localhost/WatchWebPro/admin/addDanhMuc');

    }else if(isset($_POST['handle']) && $_POST['handle']=="DELETE"){
        if(isset($_POST['idDelete'])){
            $idDelete = $_POST['idDelete'];
            $query = "DELETE FROM danhMuc WHERE id = \"$idDelete\" ";
            mysqli_query($conn,$query);
            header('Location: http://localhost/WatchWebPro/admin/quanLyDanhMuc');
        }
    }else if(isset($_POST['handle']) && $_POST['handle']=="EDIT"){
        if(isset($_POST['idEdit'])){
            $idEdit = $_POST['idEdit'];
            $name = $_POST['name'];
            $mo_ta = $_POST['mo_ta'];
            
            $query = "DELETE FROM danhMuc WHERE id = \"$idEdit\" ";
            mysqli_query($conn,$query);

            $query2 = "INSERT INTO danhMuc(name,mo_ta,id) 
            VALUE('".$name."','".$mo_ta."','".$idEdit."')";
            mysqli_query($conn,$query2);
            header('Location: http://localhost/WatchWebPro/admin/quanLyDanhMuc');
         }
    }
?>