<?php
    if(isset($_POST["dangnhap"])){
        $phonenumber = $_POST["phonenumber"];
        $password = $_POST["pwd"];
        $result = false;
        $isAdmin = false;
        // $password=md5($password);
        while($row = mysqli_fetch_array($data2['contentTV'])){ // các thông tin user
            if( ($row['phonenumber'] == $phonenumber) && ($row['passwd'] == $password) ){
                $result = true;
                break;
            }
        }
        // $Adrow = mysqli_fetch_array(mysqli_query($this->conn, "select * from adminLogin"))
        while($Adrow = mysqli_fetch_array($data2['contentAD'])){ // các thông tin user
          if( ($Adrow['phonenumber'] == $phonenumber) && ($Adrow['passwd'] == $password) ){
              $result = true;
              $isAdmin = true;
              break;
          }
        }
      
          if ($result) {
            if($isAdmin){
              $_SESSION['AdUser'] = $Adrow;
              header('Location: http://localhost/WatchWebPro/');
            }else {
              $_SESSION['user'] = $row;
              header('Location: http://localhost/WatchWebPro/');
            }
            
          }else {
            echo '<script>alert("Sai số điện thoại hoặc mật khẩu")</script>';
            echo '<script>window.location.href="http://localhost/WatchWebPro/login"</script>';
          }
    }
?>