<?php
    session_start();
    if(isset($_POST["dangnhap"])){
        $phonenumber = $_POST["phonenumber"];
        $password = $_POST["pwd"];
        $result = false;

        // $password=md5($password);
        while($row = mysqli_fetch_array($data2['content'])){ // các thông tin user
            if( ($row['phonenumber'] == $phonenumber) && ($row['passwd'] == $password) ){
                $result = true;
                break;
            }
        }
      
          if ($result) {
            $_SESSION['user'] = $row;
            header('Location: http://localhost/WatchWebPro/');
          }else {
            echo '<script>alert("Sai số điện thoại hoặc mật khẩu")</script>';
            echo '<script>window.location.href="http://localhost/WatchWebPro/login"</script>';
          }
    }
?>