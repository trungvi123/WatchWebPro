<?php

$errors = array();
$phonenumber = "";

$conn = $data2['connect'];

if(isset($_POST["dangky"])){
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $rpwd = $_POST["rpwd"];
    $phonenumber = $_POST["phonenumber"];
    $result = false;
    while($row = mysqli_fetch_assoc($data2['content'])){ // lấy các sdt trên sv về ktra
        if($row['phonenumber'] == $phonenumber){
            $result = true;
            break;
        }
    }
    
        if ($result) { // if user exists
            echo '<script>alert("Số điện thoại đã tồn tại")</script>';
            echo '<script>window.location.href="http://localhost/WatchWebPro/register"</script>';
        }else { 
            // $pass = md5($pwd);
            $pass = $pwd;
            mysqli_query($conn,"
                insert into thanhvien (username,passwd,phonenumber)
                value ('".$username."','".$pass."','".$phonenumber."')
            ");
            echo'<script>alert("Bạn đã đăng ký thành công !")</script>';
            echo '<script>window.location.href="http://localhost/WatchWebPro/login"</script>';
        }
}


?>